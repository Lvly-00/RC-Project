<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Question;
use App\Models\Choice;
use Illuminate\Support\Facades\DB;



class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $chapters = [];
        for ($i = 1; $i <= 15; $i++) {
            $chapters[] = [
                'id' => $i,
                'name' => 'Chapter ' . $i,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('chapters')->insert($chapters);
    }
}
