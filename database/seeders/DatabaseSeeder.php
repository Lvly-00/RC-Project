<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Question;
use App\Models\Choice;


class QuestionsTableSeeder extends Seeder
{
    public function run()
    {
        $question = Question::create([
            'question' => 'huni pa ng ibon ay nakalulunos',
            'chapter_id' => 1,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice' => 'Nakakaawa',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice' => 'Nakaalis',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice' => 'Nakakagalak',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice' => 'Nakakatakot',
            'is_correct' => false,
        ]);
    }
}
