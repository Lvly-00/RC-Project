<?php

namespace Database\Seeders;


use App\Models\User;
use App\Models\Score;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();


        User ::factory()->create(['name' => 'John Doe']);
        User ::factory()->create(['name' => 'Jane Doe']);

        Score::create(['user_id' => 1, 'score' => 100]);
        Score::create(['user_id' => 1, 'score' => 50]);
        Score::create(['user_id' => 2, 'score' => 200]);
    }
}   
