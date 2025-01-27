<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Comment;

class ChapterController extends Controller
{
    public function showChapter($chapter)
    {
        if ($chapter < 1 || $chapter > 30) {
            return abort(404);
        }

        $number = $chapter; // Define the $number variable
        $questions = Question::where('chapter_id', $chapter)->inRandomOrder()->take(5)->get();

        $comments = Comment::where('chapter_number', $number)->with('user')->latest()->get();

        $viewName = 'chapters.kabanata' . $number;

        return view($viewName, [
            'number' => $number,
            'comments' => $comments,
            'questions' => $questions,
        ]);
    }

    public function nextChapter(Request $request)
    {
        $chapterNumber = $request->input('chapter_number');

        return redirect()->route('kabanata', ['chapter' => $chapterNumber]);
    }
}
