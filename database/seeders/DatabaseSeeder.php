<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::create([
            'username' => 'admin',
            'email' => 'admin@example.com',
            'description' => 'Main admin',
            'password' => 'admin',
            'is_admin' => true,
            'can_post' => true,
            'email_verified_at' => now(),
        ]);
        \App\Models\User::factory(10)->create();
    }
}
