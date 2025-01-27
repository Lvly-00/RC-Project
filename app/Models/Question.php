<?php

namespace App\Models;

use App\Models\Choice;
use App\Models\Chapter;

use Illuminate\Database\Eloquent\Model;


class Question extends Model
{
    public function choices()
    {
        return $this->hasMany(Choice::class);
    }

    // app/Models/Question.php
    public function chapter()
    {
        return $this->belongsTo(Chapter::class);
    }
}
