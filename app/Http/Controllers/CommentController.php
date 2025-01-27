<?php
namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    // Store a new comment
    public function store(Request $request)
    {
        $request->validate([
            'chapter_number' => 'required|integer|min:1|max:30',
            'comment' => 'required|string',
        ]);

        Comment::create([
            'chapter_number' => $request->chapter_number,
            'user_id' => Auth::id(),
            'comment' => $request->comment,
        ]);

        return redirect()->back()->with('success', 'Comment submitted successfully!');
    }
}
