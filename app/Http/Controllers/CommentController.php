<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;


class CommentController extends Controller
{
    public function store(Request $request)
    {
        try {
            $validated= $request->validate([
                'chapter_number' => 'required|integer|min:1|max:30',
                'chapter_id' => 'required|exists:chapters,id',
                'comment' => 'required|string',
            ]);

            Log::info('Validated Data:', $validated);


            $comment = Comment::create([
                'chapter_number' => $validated['chapter_number'],
                'comment' => $validated['comment'],
                'chapter_id' => $validated['chapter_id'],
                'user_id' => Auth::id(),
            ]);

            // Correct way to log the comment data
            Log::info('New comment created', [
                'comment_id' => $comment->id,
                'chapter_id' => $comment->chapter_id,
                'user_id' => $comment->user_id,
                'comment_text' => $comment->comment,
            ]);

            return redirect()->back()->with('success', 'Comment submitted successfully!');
        } catch (\Exception $e) {
            Log::error('Error creating comment: ', ['error' => $e->getMessage()]);
            return redirect()->back()->with('error', 'Failed to submit comment.');
        }
    }
}
