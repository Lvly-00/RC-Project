<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Quiz;

class QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run() {
        $quiz = Quiz::create(['title' => 'Sample Quiz', 'required_score' => 3]);
        $question = $quiz->questions()->create(['question_text' => 'What is 2 + 2?']);
        $question->options()->createMany([
            ['option_text' => '3', 'is_correct' => false],
            ['option_text' => '4', 'is_correct' => true],
            ['option_text' => '5', 'is_correct' => false],
        ]);
    }
}
