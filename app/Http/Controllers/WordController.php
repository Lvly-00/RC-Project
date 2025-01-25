<?php

namespace App\Http\Controllers;
use App\Models\Word;

use Illuminate\Http\Request;

class WordController extends Controller
{


    public function showRandomWord()
    {
        $word = Word::inRandomOrder()->first();
        return view('play', ['word' => $word->word, 'meaning' => $word->meaning]);
    }
}
