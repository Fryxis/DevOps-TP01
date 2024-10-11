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
        //Insérer les données dans la table plans
        DB::table('plans')->insert([
            [
                'id' => 1,
                'name' => 'Free Plan',
                'price' => 0.00,
                'duration' => 'month',
                'storage_limit' => 1024.00,
                'max_user' => 5,
                'max_account' => 5,
                'max_contact' => 5,
                'trial' => 0,
                'trial_days' => null,
                'description' => null,
                'status' => 1,
                'enable_chatgpt' => 'on',
                'image' => 'free_plan.png',
                'created_at' => '2024-09-30 14:38:02',
                'updated_at' => '2024-10-06 21:23:41',
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //Supprimer l'enregistrement
        DB::table('plans')->where('id', 1)->delete();
    }
};