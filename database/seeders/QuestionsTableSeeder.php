<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Question;
use App\Models\Choice;

class QuestionsTableSeeder extends Seeder
{
    public function run()
    {
        echo "Creating question 1...\n";
        $question1 = Question::create([
            'question' => 'huni pa ng ibon ay nakalulunos',
            'chapter_id' => 1,
        ]);

        echo "Creating choices for question 1...\n";
        Choice::create([
            'question_id' => $question1->id,
            'choice' => 'Nakakaawa',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question1->id,
            'choice' => 'Nakaalis',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question1->id,
            'choice' => 'Nakakagalak',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question1->id,
            'choice' => 'Nakakatakot',
            'is_correct' => false,
        ]);

        echo "Creating question 2...\n";
        $question2 = Question::create([
            'question' => 'Karamiha\'y Sipres at Higerang kutad',
            'chapter_id' => 1,
        ]);

        echo "Creating choices for question 2...\n";
        Choice::create([
            'question_id' => $question2->id,
            'choice' => 'Maiksi',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question2->id,
            'choice' => 'Matibay',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question2->id,
            'choice' => 'Matigas',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question2->id,
            'choice' => 'Marupok',
            'is_correct' => false,
        ]);

        echo "Creating question 3...\n";
        $question3 = Question::create([
            'question' => 'Hayena\'t Tigreng ganid na nagsisila',
            'chapter_id' => 1,
        ]);

        echo "Creating choices for question 3...\n";
        Choice::create([
            'question_id' => $question3->id,
            'choice' => 'Maamo',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question3->id,
            'choice' => 'Mabagsik',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question3->id,
            'choice' => 'Matakaw',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question3->id,
            'choice' => 'Mapagbigay',
            'is_correct' => false,
        ]);

        echo "Creating question 4...\n";
        $question4 = Question::create([
            'question' => 'Sa isang madilim, gubat na mapanglaw',
            'chapter_id' => 1,
        ]);

        echo "Creating choices for question 4...\n";
        Choice::create([
            'question_id' => $question4->id,
            'choice' => 'Masaya',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question4->id,
            'choice' => 'Malungkot',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question4->id,
            'choice' => 'Maaliwalas',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question4->id,
            'choice' => 'Magulo',
            'is_correct' => false,
        ]);

        echo "Creating question 5...\n";
        $question5 = Question::create([
            'question' => 'pawang dalamhati, kahapisa\'t lungkot',
            'chapter_id' => 1,
        ]);

        echo "Creating choices for question 5...\n";
        Choice::create([
            'question_id' => $question5->id,
            'choice' => 'Kaligayahan',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question5->id,
            'choice' => 'Pagdalamhati',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question5->id,
            'choice' => 'Pag-asa',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question5->id,
            'choice' => 'Kapayapaan',
            'is_correct' => false,
        ]);

        echo "Creating question 6...\n";
        $question6 = Question::create([
            'question' => 'pawang kulay-luksa at nakikiayon',
            'chapter_id' => 1,
        ]);

        echo "Creating choices for question 6...\n";
        Choice::create([
            'question_id' => $question6->id,
            'choice' => 'Maligaya',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question6->id,
            'choice' => 'Mabilis',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question6->id,
            'choice' => 'Malungkot',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question6->id,
            'choice' => 'Masarap',
            'is_correct' => false,
        ]);

        echo "All questions and choices created.\n";
    }
}
