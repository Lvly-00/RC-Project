<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Choice;
use App\Models\Chapter;


use Illuminate\Http\Request;

class QuestionController extends Controller
{

    public function index()
    {
        $questions = Question::with('choices')->inRandomOrder()->take(5)->get();
        return view('quiz', compact('questions'));
    }

    public function submit(Request $request)
    {
        $score = 0;
        foreach ($request->all() as $key => $value) {
            if (strpos($key, 'question_') === 0) {
                $questionId = str_replace('question_', '', $key);
                $choice = Choice::find($value);
                if ($choice && $choice->is_correct) {
                    $score++;
                }
            }
        }
        return "Your score: $score / 5";
    }

    public function showChapter($chapterId)
    {
        $chapter = Chapter::with('questions.choices')->findOrFail($chapterId);
        $questions = $chapter->questions->random(5); // Randomize and take 5 questions
        return view('chapter', compact('chapter', 'questions'));
    }
}
