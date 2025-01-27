<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ChapterController;
use App\Http\Controllers\GamesController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\WordController;
use App\Http\Controllers\QuestionController;

Route::get('/', function () {
    return view('login');
});

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('postlogin', [AuthController::class, 'login'])->name('postlogin');
Route::get('signup', [AuthController::class, 'signup'])->name('register-user');
Route::post('postsignup', [AuthController::class, 'signupsave'])->name('postsignup');

Route::middleware('authenticated')->group(function () {
    Route::post('signout', [AuthController::class, 'signOut'])->name('signout');
    Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');
    Route::get('/characters', [UserController::class, 'characters'])->name('characters');
    Route::get('/play', [WordController::class, 'showRandomWord'])->name('play');
    Route::get('/settings', [UserController::class, 'settings'])->name('settings');
    Route::get('/chapters', [UserController::class, 'chapters'])->name('chapters');
    Route::get('/chapters/{number}', [ChapterController::class, 'showChapter'])->name('chapters.show');

    Route::get('/kabanata/{chapter}', [ChapterController::class, 'showChapter'])->name('kabanata');
    Route::post('/kabanata/{chapter}/next', [ChapterController::class, 'nextChapter'])->name('kabanata.next');

    // comments
    Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');

    // games
    Route::get('/quiz/chapter/{chapterId}', [QuestionController::class, 'showChapter'])->name('quiz.showChapter');
    Route::post('/quiz/chapter/{chapterId}/next', [QuestionController::class, 'nextChapter'])->name('quiz.nextChapter');
    Route::post('/quiz/submit', [QuestionController::class, 'submit'])->name('quiz.submit');

    Route::get('/games/game1', [GamesController::class, 'game1'])->name('games.game1');
    Route::get('/games/game2', [GamesController::class, 'game2'])->name('games.game2');
    Route::get('/games/game3', [GamesController::class, 'game3'])->name('games.game3');
    Route::get('/games/game4', [GamesController::class, 'game4'])->name('games.game4');
    Route::get('/games/game5', [GamesController::class, 'game5'])->name('games.game5');
    Route::get('/games/game6', [GamesController::class, 'game6'])->name('games.game6');
    Route::get('/games/game7', [GamesController::class, 'game7'])->name('games.game7');
    Route::get('/games/game8', [GamesController::class, 'game8'])->name('games.game8');
    Route::get('/games/game9', [GamesController::class, 'game9'])->name('games.game9');
    Route::get('/games/game10', [GamesController::class, 'game10'])->name('games.game10');
    Route::get('/games/game11', [GamesController::class, 'game11'])->name('games.game11');
    Route::get('/games/game12', [GamesController::class, 'game12'])->name('games.game12');
    Route::get('/games/game13', [GamesController::class, 'game13'])->name('games.game13');
    Route::get('/games/game14', [GamesController::class, 'game14'])->name('games.game14');
    Route::get('/games/game15', [GamesController::class, 'game15'])->name('games.game15');
});
