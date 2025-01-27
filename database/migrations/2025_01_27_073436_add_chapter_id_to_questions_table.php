<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // Remove the lines that add the chapter_id column if it already exists
    public function up()
    {
        Schema::table('questions', function (Blueprint $table) {
            if (!Schema::hasColumn('questions', 'chapter_id')) {
                $table->foreignId('chapter_id')->constrained('chapters')->onDelete('cascade');
            }
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('questions', function (Blueprint $table) {
            $table->dropForeign(['chapter_id']);
            $table->dropColumn('chapter_id');
        });
    }
};
