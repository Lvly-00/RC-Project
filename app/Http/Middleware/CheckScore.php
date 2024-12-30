<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckScore
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  int  $passingScore
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Assuming you have a User model with a score attribute
        $user = Auth::user();
        $passingScore = 70; // Define your passing score

        // Check if the user has a score and if it meets the passing score
        if ($user && $user->score < $passingScore) {
            return redirect()->route('chapters.show', ['number' => 1]) // Redirect to the first chapter or a specific page
                ->with('error', 'You need to meet the passing score to access this chapter or game.');
        }

        return $next($request);
    }
}
