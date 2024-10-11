<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
                DB::table('languages')->insert([
            [
                'id' => 1,
                'code' => 'ar',
                'fullName' => 'Arabic',
                'created_at' => '2024-09-30 14:38:05',
                'updated_at' => '2024-09-30 14:38:05',
            ],
            [
                'id' => 2,
                'code' => 'zh',
                'fullName' => 'Chinese',
                'created_at' => '2024-09-30 14:38:05',
                'updated_at' => '2024-09-30 14:38:05',
            ],
            [
                'id' => 3,
                'code' => 'da',
                'fullName' => 'Danish',
                'created_at' => '2024-09-30 14:38:05',
                'updated_at' => '2024-09-30 14:38:05',
            ],
            [
                'id' => 4,
                'code' => 'de',
                'fullName' => 'German',
                'created_at' => '2024-09-30 14:38:05',
                'updated_at' => '2024-09-30 14:38:05',
            ],
            [
                'id' => 5,
                'code' => 'en',
                'fullName' => 'English',
                'created_at' => '2024-09-30 14:38:05',
                'updated_at' => '2024-09-30 14:38:05',
            ],
            [
                'id' => 6,
                'code' => 'es',
                'fullName' => 'Spanish',
                'created_at' => '2024-09-30 14:38:05',
                'updated_at' => '2024-09-30 14:38:05',
            ],
            [
                'id' => 7,
                'code' => 'fr',
                'fullName' => 'French',
                'created_at' => '2024-09-30 14:38:05',
                'updated_at' => '2024-09-30 14:38:05',
            ],
            [
                'id' => 8,
                'code' => 'he',
                'fullName' => 'Hebrew',
                'created_at' => '2024-09-30 14:38:05',
                'updated_at' => '2024-09-30 14:38:05',
            ],
            [
                'id' => 9,
                'code' => 'it',
                'fullName' => 'Italian',
                'created_at' => '2024-09-30 14:38:05',
                'updated_at' => '2024-09-30 14:38:05',
            ],
            [
                'id' => 10,
                'code' => 'ja',
                'fullName' => 'Japanese',
                'created_at' => '2024-09-30 14:38:05',
                'updated_at' => '2024-09-30 14:38:05',
            ],
            [
                'id' => 11,
                'code' => 'nl',
                'fullName' => 'Dutch',
                'created_at' => '2024-09-30 14:38:05',
                'updated_at' => '2024-09-30 14:38:05',
            ],
            [
                'id' => 12,
                'code' => 'pl',
                'fullName' => 'Polish',
                'created_at' => '2024-09-30 14:38:05',
                'updated_at' => '2024-09-30 14:38:05',
            ],
            [
                'id' => 13,
                'code' => 'pt',
                'fullName' => 'Portuguese',
                'created_at' => '2024-09-30 14:38:05',
                'updated_at' => '2024-09-30 14:38:05',
            ],
            [
                'id' => 14,
                'code' => 'ru',
                'fullName' => 'Russian',
                'created_at' => '2024-09-30 14:38:05',
                'updated_at' => '2024-09-30 14:38:05',
            ],
            [
                'id' => 15,
                'code' => 'tr',
                'fullName' => 'Turkish',
                'created_at' => '2024-09-30 14:38:05',
                'updated_at' => '2024-09-30 14:38:05',
            ],
            [
                'id' => 16,
                'code' => 'pt-br',
                'fullName' => 'Portuguese(Brazil)',
                'created_at' => '2024-09-30 14:38:05',
                'updated_at' => '2024-09-30 14:38:05',
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Supprimer les enregistrements
        DB::table('languages')->whereIn('id', range(1, 16))->delete();
    }
};