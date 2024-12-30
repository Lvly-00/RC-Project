<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class GameController extends Controller
{
    private $wordSets = [
        'level1' => [
            'cat' => 'A small domesticated carnivorous mammal with soft fur.',
            'dog' => 'A domesticated carnivorous mammal that typically has a long snout.',
            'bat' => 'A nocturnal flying mammal capable of sustained flight.',
            'ant' => 'A small insect that lives in colonies.',
            'bee' => 'An insect known for producing honey.',
            'cow' => 'A large domesticated ungulate.',
            'fox' => 'A small to medium-sized, omnivorous mammal.',
            'hen' => 'A female chicken.',
            'pig' => 'A domesticated animal with a snout.',
            'rat' => 'A medium-sized rodent.'
        ],
        'level2' => [
            'laravel' => 'A web application framework with expressive, elegant syntax.',
            'hangman' => 'A game in which players guess the letters of a hidden word.',
            'php' => 'A popular general-purpose scripting language especially suited to web development.',
            'python' => 'A high-level programming language known for its readability.',
            'javascript' => 'A programming language commonly used in web development.',
            'html' => 'The standard markup language for documents designed to be displayed in a web browser.',
            'css' => 'A style sheet language used for describing the presentation of a document.',
            'ruby' => 'A dynamic, open-source programming language with a focus on simplicity and productivity.',
            'java' => 'A high-level, class-based, object-oriented programming language.',
            'swift' => 'A powerful and intuitive programming language for iOS and macOS.'
        ],
        'level3' => [
            'development' => 'The process of developing or being developed, such as in software.',
            'programming' => 'The process of writing computer programs.',
            'algorithm' => 'A process or set of rules to be followed in calculations or other problem-solving operations.',
            'database' => 'An organized collection of data, generally stored and accessed electronically.',
            'software' => 'The programs and other operating information used by a computer.',
            'hardware' => 'The physical parts of a computer system.',
            'networking' => 'The practice of connecting computers and other devices together to share resources.',
            'security' => 'The state of being free from danger or threat.',
            'cloud' => 'The practice of using a network of remote servers hosted on the Internet to store, manage, and process data.',
            'virtualization' => 'The creation of a virtual version of something, such as a server or storage device.'
        ]
    ];

    public function index(Request $request, $level = 'level1')
    {
        // Check if the level exists in the wordSets
        if (!array_key_exists($level, $this->wordSets)) {
            return redirect()->back()->withErrors(['level' => 'Invalid level selected.']);
        }

        // Initialize the session for the first time or if the level has changed
        if (!Session::has('words') || Session::get('level') !== $level) {
            $wordData = $this->wordSets[$level];
            $words = array_keys($wordData); // Get all word keys
            Session::put('words', $words); // Store all words in session
            Session::put('currentWordIndex', 0); // Initialize the current word index
            Session::put('level', $level);
            Session::put('guesses', []); // Reset guesses
            Session::put('attempts', 6); // Reset attempts
        }

        // Get the current word index
        $currentWordIndex = Session::get('currentWordIndex');
        $words = Session::get('words');

        // Check if we have more words to ask
        if ($currentWordIndex < count($words)) {
            $word = $words[$currentWordIndex]; // Get the current word
            Session::put('word', $word);
            Session::put(' description', $this->wordSets[$level][$word]); // Store the description
        } else {
            // If all words have been used, you can either reset or end the game
            return redirect()->route('index', ['level' => $level])->with('message', 'All words have been used for this level. Please restart the game.');
        }

        return view('games.game1', [
            'word' => Session::get('word'),
            'description' => Session::get('description'),
            'guesses' => Session::get('guesses'),
            'attempts' => Session::get('attempts'),
            'level' => $level
        ]);
    }

    public function guess(Request $request)
    {
        $request->validate(['letter' => 'required|string|max:1']);

        $letter = strtolower($request->input('letter'));
        $word = Session::get('word');
        $guesses = Session::get('guesses');
        $attempts = Session::get('attempts');

        if (!in_array($letter, $guesses)) {
            $guesses[] = $letter;
            Session::put('guesses', $guesses);

            if (!str_contains($word, $letter)) {
                $attempts--;
                Session::put('attempts', $attempts);
            }
        }

        if ($attempts <= 0) {
            return redirect()->route('index', ['level' => Session::get('level')])->with('message', 'Game Over! The word was ' . $word);
        }

        if ($this->isWordGuessed($word, $guesses)) {
            // Increment the current word index for the next word
            $currentWordIndex = Session::get('currentWordIndex');
            Session::put('currentWordIndex', $currentWordIndex + 1);

            // Reset guesses and attempts for the next word
            Session::put('guesses', []); // Reset guesses
            Session::put('attempts', 6); // Reset attempts

            return redirect()->route('index', ['level' => Session::get('level')])->with('message', 'Congratulations! You guessed the word: ' . $word);
        }

        return redirect()->route('index', ['level' => Session::get('level')]);
    }

    private function isWordGuessed($word, $guesses)
    {
        foreach (str_split($word) as $char) {
            if (!in_array($char, $guesses)) {
                return false;
            }
        }
        return true;
    }

    public function restart()
    {
        // Clear the session data related to the game
        Session::forget('word');
        Session::forget('guesses');
        Session::forget('attempts');
        Session::forget('level');
        Session::forget('currentWordIndex');
        Session::forget('words');

        return redirect()->route('index');
    }
}
