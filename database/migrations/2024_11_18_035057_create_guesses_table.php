<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuessesTable extends Migration
{
    public function up()
    {
        Schema::create('guesses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('game_id')->constrained();
            $table->char('letter', 1);
            $table->boolean('is_correct');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('guesses');
    }
}
