<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Comment;
use App\Models\Chapter;
use App\Models\User;

class CommentSeeder extends Seeder
{
    public function run()
    {
        // Ensure the chapter exists
        $chapter = Chapter::firstOrCreate(
            ['id' => 1], // Ensure chapter with ID 1 exists
            ['name' => 'Chapter 1'] // Default values if not found
        );

        // Ensure the user exists
        $user = User::firstOrCreate(
            ['id' => 1], // Ensure user with ID 1 exists
            ['name' => 'Test User', 'email' => 'testuser@example.com'] // Default values if not found
        );

        // Now create the comment
        Comment::create([
            'chapter_number' => 1,
            'comment' => 'This is a sample comment.',
            'chapter_id' => $chapter->id, // Ensure chapter ID is valid
            'user_id' => $user->id,       // Ensure user ID is valid
        ]);
    }
}
