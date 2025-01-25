<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ChapterController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\ScoreController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\WordController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('postlogin', [AuthController::class, 'login'])->name('postlogin');
Route::get('signup', [AuthController::class, 'signup'])->name('register-user');
Route::post('postsignup', [AuthController::class, 'signupsave'])->name('postsignup');


Route::middleware('authenticated')->group(function () {

    Route::post('signout', [AuthController::class, 'signOut'])->name('signout');
    Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');
    Route::get('/characters', [UserController::class, 'characters'])->name('characters');
    Route::get('/play', [UserController::class, 'play'])->name('play');
    Route::get('/settings', [UserController::class, 'settings'])->name('settings');
    Route::get('/characters', [UserController::class, 'characters'])->name('characters');
    Route::get('/chapters', [UserController::class, 'chapters'])->name('chapters');
    Route::get('/chapters/{number}', [ChapterController::class, 'show'])->name('chapters.show');
    Route::get('/games/{number}', [GameController::class, 'showGame'])->name('games.show');
    // Route::get('/game', [GameController::class, 'index'])->name('index');


    Route::post('/scores', [ScoreController::class, 'store'])->name('store');
    Route::get('/leaderboard', [ScoreController::class, 'leaderboard'])->name('leaderboard');

    Route::get('/game/{level?}', [GameController::class, 'index'])->name('index');
    Route::post('/game/guess', [GameController::class, 'guess'])->name('guess');
    Route::post('/game/start', [GameController::class, 'startGame'])->name('start');
    Route::get('/restart', [GameController::class, 'restart'])->name('restart');
    Route::get('/kabanata/{chapter}', [ChapterController::class, 'showChapter'])->name('kabanata');
    Route::get('/next-chapter', [ChapterController::class, 'next'])->name('next.chapter');
    // comments
    Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');

    //randomWord

    Route::get('/play', [WordController::class, 'showRandomWord'])->name('play');


});
