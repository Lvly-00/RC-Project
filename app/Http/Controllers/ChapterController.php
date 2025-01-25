<?php

namespace App\Http\Controllers;
use App\Models\Comment;

use Illuminate\Http\Request;

class ChapterController extends Controller
{

    public function show($number)
{
    if ($number < 1 || $number > 30) {
        return abort(404);
    }
    // dd($number);

    $comments = Comment::where('chapter_number', $number)
        ->with('user')
        ->latest()
        ->get();

    $viewName = 'chapters.kabanata' . $number;

    return view($viewName, [
        'number' => $number,
        'comments' => $comments,
    ]);
}


    public function showChapter(Request $chapter)
    {
        // Validate the chapter number
        if ($chapter < 1 || $chapter > 30) {
            return abort(404); // Return a 404 error for invalid chapters
        }

        // Define the quiz data for the current chapter
        $quizzes = [
            1 => [
                'question' => 'What is the capital of the Philippines?',
                'choices' => ['Manila', 'Cebu', 'Davao', 'Quezon City'],
                'correct_answer' => 'Manila',
            ],
            2 => [
                'question' => 'Who is the national hero of the Philippines?',
                'choices' => ['Jose Rizal', 'Andres Bonifacio', 'Emilio Aguinaldo', 'Lapu-Lapu'],
                'correct_answer' => 'Jose Rizal',
            ],
            // Add more questions for each chapter
        ];

        // Define the current chapter and total chapters
        $currentChapter = $chapter;
        $totalChapters = 30; // Total number of chapters

        // Pass the variables to the view
        return view('quiz', [
            'currentChapter' => $currentChapter,
            'totalChapters' => $totalChapters,
            'quiz' => $quizzes[$currentChapter] ?? null, // Get the quiz for the current chapter
        ]);
    }
}
