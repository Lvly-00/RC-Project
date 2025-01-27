<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateChaptersTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('chapters', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        // Insert chapters 1 to 15
        DB::table('chapters')->insert([
            ['id' => 1, 'name' => 'Chapter 1', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'name' => 'Chapter 2', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'name' => 'Chapter 3', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 4, 'name' => 'Chapter 4', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 5, 'name' => 'Chapter 5', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 6, 'name' => 'Chapter 6', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 7, 'name' => 'Chapter 7', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 8, 'name' => 'Chapter 8', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 9, 'name' => 'Chapter 9', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 10, 'name' => 'Chapter 10', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 11, 'name' => 'Chapter 11', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 12, 'name' => 'Chapter 12', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 13, 'name' => 'Chapter 13', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 14, 'name' => 'Chapter 14', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 15, 'name' => 'Chapter 15', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chapters');
    }
}
