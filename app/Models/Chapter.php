<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Chapter extends Model
{
    // app/Models/Chapter.php
    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);  // Assuming Comment model is set up correctly
    }
}

