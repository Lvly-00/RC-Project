<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // public function up(): void
    // {
    //     $chapters = [];
    //     for ($i = 1; $i <= 15; $i++) {
    //         $chapters[] = [
    //             'id' => $i,
    //             'name' => 'Chapter ' . $i,
    //             'created_at' => now(),
    //             'updated_at' => now(),
    //         ];
    //     }

    //     DB::table('chapters')->insert($chapters);
    // }

    /**
     * Reverse the migrations.
     */
    // public function down(): void
    // {
    //     DB::table('chapters')->whereIn('id', range(1, 15))->delete();
    // }
};
