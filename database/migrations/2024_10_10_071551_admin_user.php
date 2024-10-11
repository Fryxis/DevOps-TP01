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
        // Insert a new user into the 'users' table
        DB::table('users')->insert([
            'id' => 1,
            'username' => 'Super Admin',
            'name' => 'Super Admin',
            'title' => null,
            'email' => 'hamza.ougayour@cybergenix.fr',
            'phone' => null,
            'gender' => null,
            'type' => 'super admin',
            'is_active' => 1,
            'user_roles' => null,
            'lang' => 'fr',
            'password' => '$2y$10$ccUtaX.cGquCMjokWFAsXOom8tGVZyPIVi9NyhicALDRE5.BpvpY2',
            'mode' => 'light',
            'avatar' => 'avatar.png',
            'plan' => null,
            'plan_expire_date' => null,
            'plan_is_active' => 1,
            'created_by' => 0,
            'remember_token' => null,
            'created_at' => now(),
            'updated_at' => now(),
            'messenger_color' => '#2180f3',
            'dark_mode' => 0,
            'active_status' => 0,
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Optionally, you can remove the user when rolling back the migration
        DB::table('users')->where('id', 1)->delete();
    }
};