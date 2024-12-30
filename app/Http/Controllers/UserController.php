<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class UserController  extends Controller
{

    public function dashboard(){
        return view('dashboard');
    }

    public function leaderboard(){
        return view('leaderboard');
    }

    public function characters(){
        return view('characters');
    }

    public function play(){
        return view('play');
    }

    public function settings(){
        return view('settings');
    }

    public function chapters(){
        return view('chapters');
    }
}
