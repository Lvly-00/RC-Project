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
            'question' => 'Ang huni ng ibon ay nakalulunos',
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
            'question' => 'Ang hayena\'t Tigreng ganid na nagsisila',
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
            'question' => 'Pawang dalamhati, kahapisa\'t lungkot;',
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
            'question' => 'estatuwa manding nakatayo\'t umid',
            'chapter_id' => 6,
        ]);

        echo "Creating choices for question 6...\n";
        Choice::create([
            'question_id' => $question6->id,
            'choice' => 'Humihinga',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question6->id,
            'choice' => 'Nagniningning',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question6->id,
            'choice' => 'Nag-aalab',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question6->id,
            'choice' => 'Nagpapakita',
            'is_correct' => false,
        ]);

        echo "Creating question 7...\n";
        $question7 = Question::create([
            'question' => 'pika\'y isinaksak saka naghimutok;',
            'chapter_id' => 7,
        ]);

        echo "Creating choices for question 7...\n";
        Choice::create([
            'question_id' => $question7->id,
            'choice' => 'Nagalit',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question7->id,
            'choice' => 'Nag-isip',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question7->id,
            'choice' => 'Nagdalamhati',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question7->id,
            'choice' => 'Nag-puri',
            'is_correct' => false,
        ]);

        echo "Creating question 8...\n";
        $question8 = Question::create([
            'question' => 'Sa sintang inagaw ang itinatangis, dahilan ng aking luhang nagbabatis;',
            'chapter_id' => 8,
        ]);

        echo "Creating choices for question 8...\n";
        Choice::create([
            'question_id' => $question8->id,
            'choice' => 'Tumutulo',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question8->id,
            'choice' => 'Pumatak',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question8->id,
            'choice' => 'Umaagos',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question8->id,
            'choice' => 'Nagniningning',
            'is_correct' => false,
        ]);

        echo "Creating question 9...\n";
        $question9 = Question::create([
            'question' => 'siya\'y tinutungo\'t pagsil-in ang hangad, ngunit nangatigil pagdating sa harap.',
            'chapter_id' => 9,
        ]);

        echo "Creating choices for question 9...\n";
        Choice::create([
            'question_id' => $question9->id,
            'choice' => 'Pagsisilbi',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question9->id,
            'choice' => 'Paglilingkod',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question9->id,
            'choice' => 'Pagpapakita',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question9->id,
            'choice' => 'Pagtulong',
            'is_correct' => false,
        ]);

        echo "Creating question 10...\n";
        $question10 = Question::create([
            'question' => 'Masaya akong naakay kita sa buhay na ito.',
            'chapter_id' => 10,
        ]);

        echo "Creating choices for question 10...\n";
        Choice::create([
            'question_id' => $question10->id,
            'choice' => 'Dinala',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question10->id,
            'choice' => 'Iniwan',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question10->id,
            'choice' => 'Pelusa',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question10->id,
            'choice' => 'Hugis',
            'is_correct' => false,
        ]);

        echo "Creating question 11-1...\n";
        $question11_1 = Question::create([
            'question' => 'Nabibihay ang isang dalaga sa pagkawala ng kaniyang asawa.',
            'chapter_id' => 11,
        ]);

        echo "Creating choices for question 11-1...\n";
        Choice::create([
            'question_id' => $question11_1->id,
            'choice' => 'Nababahala',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question11_1->id,
            'choice' => 'Matatag',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question11_1->id,
            'choice' => 'Iniiwasan',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question11_1->id,
            'choice' => 'Sumasaya',
            'is_correct' => false,
        ]);

        echo "Creating question 11-2...\n";
        $question11_2 = Question::create([
            'question' => 'Rinig na rinig ko ang himutok ng aking kaibigan.',
            'chapter_id' => 11,
        ]);

        echo "Creating choices for question 11-2...\n";
        Choice::create([
            'question_id' => $question11_2->id,
            'choice' => 'Buntong-hininga',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question11_2->id,
            'choice' => 'Hilik',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question11_2->id,
            'choice' => 'Gulat',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question11_2->id,
            'choice' => 'Lumbay',
            'is_correct' => false,
        ]);

        echo "Creating question 11-3...\n";
        $question11_3 = Question::create([
            'question' => 'Bakit ka ba nanlalata?',
            'chapter_id' => 11,
        ]);

        echo "Creating choices for question 11-3...\n";
        Choice::create([
            'question_id' => $question11_3->id,
            'choice' => 'Lumbay',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question11_3->id,
            'choice' => 'Saya',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question11_3->id,
            'choice' => 'Nanghihina',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question11_3->id,
            'choice' => 'Nagulat',
            'is_correct' => false,
        ]);

        echo "Creating question 11-4...\n";
        $question11_4 = Question::create([
            'question' => 'Tinunton ng aking mga mata ang iyong ngiti.',
            'chapter_id' => 11,
        ]);

        echo "Creating choices for question 11-4...\n";
        Choice::create([
            'question_id' => $question11_4->id,
            'choice' => 'Sinundan',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question11_4->id,
            'choice' => 'Nagulat',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question11_4->id,
            'choice' => 'Tumulong',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question11_4->id,
            'choice' => 'Ngumiti',
            'is_correct' => false,
        ]);

        echo "Creating question 11-5...\n";
        $question11_5 = Question::create([
            'question' => 'Lumalagitik ang aking mga buto sa pag-tayo.',
            'chapter_id' => 11,
        ]);

        echo "Creating choices for question 11-5...\n";
        Choice::create([
            'question_id' => $question11_5->id,
            'choice' => 'Tahimik',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question11_5->id,
            'choice' => 'Nanghihina',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question11_5->id,
            'choice' => 'Malambot',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question11_5->id,
            'choice' => 'Maingay',
            'is_correct' => true,
        ]);

        echo "Creating question 12-1...\n";
        $question12_1 = Question::create([
            'question' => 'Sumapayapa ang aking damdamin nung ika’y aking nasulyapan.',
            'chapter_id' => 12,
        ]);

        echo "Creating choices for question 12-1...\n";
        Choice::create([
            'question_id' => $question12_1->id,
            'choice' => 'Kumalma',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question12_1->id,
            'choice' => 'Sumaya',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question12_1->id,
            'choice' => 'Nalumbay',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question12_1->id,
            'choice' => 'Nagsisi',
            'is_correct' => false,
        ]);

        echo "Creating question 12-2...\n";
        $question12_2 = Question::create([
            'question' => 'Kasuklamsuklam ang nangyari sa ating dalawa.',
            'chapter_id' => 12,
        ]);

        echo "Creating choices for question 12-2...\n";
        Choice::create([
            'question_id' => $question12_2->id,
            'choice' => 'Isiniwalat',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question12_2->id,
            'choice' => 'Itinago',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question12_2->id,
            'choice' => 'Kahamakhamak',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question12_2->id,
            'choice' => 'Natigilan',
            'is_correct' => false,
        ]);

        echo "Creating question 12-3...\n";
        $question12_3 = Question::create([
            'question' => 'Bakit hindi mo inihayag na ako’y iyong iniibig noon?',
            'chapter_id' => 12,
        ]);

        echo "Creating choices for question 12-3...\n";
        Choice::create([
            'question_id' => $question12_3->id,
            'choice' => 'Sinekreto',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question12_3->id,
            'choice' => 'Isiniwalat',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question12_3->id,
            'choice' => 'Kinagalit',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question12_3->id,
            'choice' => 'Ikinasaya',
            'is_correct' => false,
        ]);

        echo "Creating question 12-4...\n";
        $question12_4 = Question::create([
            'question' => 'Ako’y nagitlahanan nung sinabi mong papakasalan mo ang aking kaibigan.',
            'chapter_id' => 12,
        ]);

        echo "Creating choices for question 12-4...\n";
        Choice::create([
            'question_id' => $question12_4->id,
            'choice' => 'Nagulat',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question12_4->id,
            'choice' => 'Natuwa',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question12_4->id,
            'choice' => 'Nagalit',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question12_4->id,
            'choice' => 'Nalumbay',
            'is_correct' => false,
        ]);

        echo "Creating question 12-5...\n";
        $question12_5 = Question::create([
            'question' => 'Nasasaklaw sa batas na bawal magnakaw, ngunit bakit mo ninakaw ang aking puso?',
            'chapter_id' => 12,
        ]);

        echo "Creating choices for question 12-5...\n";
        Choice::create([
            'question_id' => $question12_5->id,
            'choice' => 'Kasama',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question12_5->id,
            'choice' => 'Alam',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question12_5->id,
            'choice' => 'Tinamaan',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question12_5->id,
            'choice' => 'Sinugatan',
            'is_correct' => true,
        ]);

        echo "Creating question 13-1...\n";
        $question13_1 = Question::create([
            'question' => 'Kalumbay-lumbay ang aking dinanas nung pinagpalit mo ako sa iba.',
            'chapter_id' => 13,
        ]);

        echo "Creating choices for question 13-1...\n";
        Choice::create([
            'question_id' => $question13_1->id,
            'choice' => 'Nakakalungkot',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question13_1->id,
            'choice' => 'Masakit',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question13_1->id,
            'choice' => 'Nakatutuwa',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question13_1->id,
            'choice' => 'Nakakasuklamsuklam',
            'is_correct' => false,
        ]);

        echo "Creating question 13-2...\n";
        $question13_2 = Question::create([
            'question' => 'Aking natanto na iba ang iyong mahal.',
            'chapter_id' => 13,
        ]);

        echo "Creating choices for question 13-2...\n";
        Choice::create([
            'question_id' => $question13_2->id,
            'choice' => 'Napahayag',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question13_2->id,
            'choice' => 'Habag',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question13_2->id,
            'choice' => 'Saklaw',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question13_2->id,
            'choice' => 'Naisip',
            'is_correct' => true,
        ]);

        echo "Creating question 13-3...\n";
        $question13_3 = Question::create([
            'question' => 'Laking tuwa ko nung nahikayat kitang pumasok sa iskuwela.',
            'chapter_id' => 13,
        ]);

        echo "Creating choices for question 13-3...\n";
        Choice::create([
            'question_id' => $question13_3->id,
            'choice' => 'Napapayag',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question13_3->id,
            'choice' => 'Ginalit',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question13_3->id,
            'choice' => 'Pinahiya',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question13_3->id,
            'choice' => 'Sinundo',
            'is_correct' => false,
        ]);

        echo "Creating question 13-4...\n";
        $question13_4 = Question::create([
            'question' => 'Alam mo ba kung anong pinanggalingan ng aking mga damdamin?',
            'chapter_id' => 13,
        ]);

        echo "Creating choices for question 13-4...\n";
        Choice::create([
            'question_id' => $question13_4->id,
            'choice' => 'Pinagmulan',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question13_4->id,
            'choice' => 'Dinanas',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question13_4->id,
            'choice' => 'Nangyari',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question13_4->id,
            'choice' => 'Patutunguhan',
            'is_correct' => false,
        ]);

        echo "Creating question 13-5...\n";
        $question13_5 = Question::create([
            'question' => 'Ipinamahayag ng iyong mga magulang na ako’y hindi karapatdapat sa iyo.',
            'chapter_id' => 13,
        ]);

        echo "Creating choices for question 13-5...\n";
        Choice::create([
            'question_id' => $question13_5->id,
            'choice' => 'Itinago',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question13_5->id,
            'choice' => 'Ikinasaya',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question13_5->id,
            'choice' => 'Itinayo',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question13_5->id,
            'choice' => 'Isiniwalat',
            'is_correct' => true,
        ]);

        echo "Creating question 14-1...\n";
        $question14_1 = Question::create([
            'question' => 'Ako’y iyong kaagapay sa iyong kalungkutan.',
            'chapter_id' => 14,
        ]);

        echo "Creating choices for question 14-1...\n";
        Choice::create([
            'question_id' => $question14_1->id,
            'choice' => 'Katulong',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question14_1->id,
            'choice' => 'Sagabal',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question14_1->id,
            'choice' => 'Karangalan',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question14_1->id,
            'choice' => 'Kahati',
            'is_correct' => false,
        ]);

        echo "Creating question 14-2...\n";
        $question14_2 = Question::create([
            'question' => 'Ang mga alagad ng sundalo ay sinusundo ka.',
            'chapter_id' => 14,
        ]);

        echo "Creating choices for question 14-2...\n";
        Choice::create([
            'question_id' => $question14_2->id,
            'choice' => 'Tagahatid',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question14_2->id,
            'choice' => 'Bitbitin',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question14_2->id,
            'choice' => 'Huwaran',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question14_2->id,
            'choice' => 'Kasamahan',
            'is_correct' => false,
        ]);

        echo "Creating question 14-3...\n";
        $question14_3 = Question::create([
            'question' => 'Tinudla ko sila sa kabila, ika’y tumakbo na’t umalis!',
            'chapter_id' => 14,
        ]);

        echo "Creating choices for question 14-3...\n";
        Choice::create([
            'question_id' => $question14_3->id,
            'choice' => 'Itinuro',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question14_3->id,
            'choice' => 'Saksi',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question14_3->id,
            'choice' => 'Iwan',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question14_3->id,
            'choice' => 'Kabayak',
            'is_correct' => false,
        ]);

        echo "Creating question 14-4...\n";
        $question14_4 = Question::create([
            'question' => 'Sakbat ko sa balikat ang mga mais.',
            'chapter_id' => 14,
        ]);

        echo "Creating choices for question 14-4...\n";
        Choice::create([
            'question_id' => $question14_4->id,
            'choice' => 'Pasan',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question14_4->id,
            'choice' => 'Kaaway',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question14_4->id,
            'choice' => 'Inagaw',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question14_4->id,
            'choice' => 'Kalat',
            'is_correct' => false,
        ]);

        echo "Creating question 14-5...\n";
        $question14_5 = Question::create([
            'question' => 'Oh, nasaan ang iyong esposa?',
            'chapter_id' => 14,
        ]);

        echo "Creating choices for question 14-5...\n";
        Choice::create([
            'question_id' => $question14_5->id,
            'choice' => 'Asawa',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question14_5->id,
            'choice' => 'Katulong',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question14_5->id,
            'choice' => 'Kapatid',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question14_5->id,
            'choice' => 'Kabit',
            'is_correct' => false,
        ]);

        echo "Creating question 15-1...\n";
        $question15_1 = Question::create([
            'question' => 'Sinulat ko na ang sukat ng iyong lupain.',
            'chapter_id' => 15,
        ]);

        echo "Creating choices for question 15-1...\n";
        Choice::create([
            'question_id' => $question15_1->id,
            'choice' => 'Kilos',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question15_1->id,
            'choice' => 'Haba',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question15_1->id,
            'choice' => 'Labis',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question15_1->id,
            'choice' => 'Kulang',
            'is_correct' => false,
        ]);

        echo "Creating question 15-2...\n";
        $question15_2 = Question::create([
            'question' => 'Manigas ka na nga sa lamig!',
            'chapter_id' => 15,
        ]);

        echo "Creating choices for question 15-2...\n";
        Choice::create([
            'question_id' => $question15_2->id,
            'choice' => 'Maniig',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question15_2->id,
            'choice' => 'Magpainit',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question15_2->id,
            'choice' => 'Magtiis',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question15_2->id,
            'choice' => 'Manaway',
            'is_correct' => false,
        ]);

        echo "Creating question 15-3...\n";
        $question15_3 = Question::create([
            'question' => 'Tila ako’y iyong iniwan.',
            'chapter_id' => 15,
        ]);

        echo "Creating choices for question 15-3...\n";
        Choice::create([
            'question_id' => $question15_3->id,
            'choice' => 'Anaki',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question15_3->id,
            'choice' => 'Tiyak',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question15_3->id,
            'choice' => 'Tunay',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question15_3->id,
            'choice' => 'Labis',
            'is_correct' => false,
        ]);

        echo "Creating question 15-4...\n";
        $question15_4 = Question::create([
            'question' => 'Ayusin mo nga ang itong mga gawi!',
            'chapter_id' => 15,
        ]);

        echo "Creating choices for question 15-4...\n";
        Choice::create([
            'question_id' => $question15_4->id,
            'choice' => 'Kilos',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question15_4->id,
            'choice' => 'Imbento',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question15_4->id,
            'choice' => 'Pandinig',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question15_4->id,
            'choice' => 'Pakiramdam',
            'is_correct' => false,
        ]);

        echo "Creating question 15-5...\n";
        $question15_5 = Question::create([
            'question' => 'Lagi ka nalang bang magmamalakhi?',
            'chapter_id' => 15,
        ]);

        echo "Creating choices for question 15-5...\n";
        Choice::create([
            'question_id' => $question15_5->id,
            'choice' => 'Susuko',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question15_5->id,
            'choice' => 'Magtitiis',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question15_5->id,
            'choice' => 'Magpapakatibay',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question15_5->id,
            'choice' => 'Lalayas',
            'is_correct' => false,
        ]);











        echo "All questions and choices created.\n";
    }
}
