<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;

class GamesController extends Controller
{


    public function game1()
    {
        $questions = Question::inRandomOrder()->take(5)->get(); // Randomize and take 5 questions
        return view('games.game1', compact('questions'));
    }

    public function game2(Request $request)
    {
        $this->storeAnswer($request);
        $questions = Question::inRandomOrder()->take(5)->get();
        return view('games.game2', compact('questions'));
    }

    public function game3(Request $request)
    {
        $this->storeAnswer($request);
        $questions = Question::inRandomOrder()->take(5)->get();
        return view('games.game3', compact('questions'));
    }

    public function game4(Request $request)
    {
        $this->storeAnswer($request);
        $questions = Question::inRandomOrder()->take(5)->get();
        return view('games.game4', compact('questions'));
    }

    public function game5(Request $request)
    {
        $this->storeAnswer($request);
        $questions = Question::inRandomOrder()->take(5)->get();
        return view('games.game5', compact('questions'));
    }

    public function game6(Request $request)
    {
        $this->storeAnswer($request);
        $questions = Question::inRandomOrder()->take(5)->get();
        return view('games.game6', compact('questions'));
    }

    public function game7(Request $request)
    {
        $this->storeAnswer($request);
        $questions = Question::inRandomOrder()->take(5)->get();
        return view('games.game7', compact('questions'));
    }

    public function game8(Request $request)
    {
        $this->storeAnswer($request);
        $questions = Question::inRandomOrder()->take(5)->get();
        return view('games.game8', compact('questions'));
    }

    public function game9(Request $request)
    {
        $this->storeAnswer($request);
        $questions = Question::inRandomOrder()->take(5)->get();
        return view('games.game9', compact('questions'));
    }

    public function game10(Request $request)
    {
        $this->storeAnswer($request);
        $questions = Question::inRandomOrder()->take(5)->get();
        return view('games.game10', compact('questions'));
    }

    public function game11(Request $request)
    {
        $this->storeAnswer($request);
        $questions = Question::inRandomOrder()->take(5)->get();
        return view('games.game11', compact('questions'));
    }

    public function game12(Request $request)
    {
        $this->storeAnswer($request);
        $questions = Question::inRandomOrder()->take(5)->get();
        return view('games.game12', compact('questions'));
    }

    public function game13(Request $request)
    {
        $this->storeAnswer($request);
        $questions = Question::inRandomOrder()->take(5)->get();
        return view('games.game13', compact('questions'));
    }

    public function game14(Request $request)
    {
        $this->storeAnswer($request);
        $questions = Question::inRandomOrder()->take(5)->get();
        return view('games.game14', compact('questions'));
    }

    public function game15(Request $request)
    {
        $this->storeAnswer($request);
        $questions = Question::inRandomOrder()->take(5)->get();
        return view('games.game15', compact('questions'));
    }

    protected function storeAnswer(Request $request)
    {
        // Store the answer in the session or database
        session()->push('answers', $request->all());
    }
}
