<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Score;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ScoreController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'score' => 'required|integer',
        ]);

        // Store the score with the authenticated user's ID
        $score = Score::create([
            'user_id' => Auth::id(), // Ensure user_id is stored
            'name' => $request->name,
            'score' => $request->score,
        ]);

        return response()->json($score, 201);
    }

    public function leaderboard()
    {
        $leaderboard = User::join('scores', 'users.id', '=', 'scores.user_id')
            ->selectRaw('users.name, SUM(scores.score) as total_score')
            ->groupBy('users.id', 'users.name')
            ->orderByDesc('total_score')
            ->get();

        return view('leaderboard', compact('leaderboard'));
    }
}
