<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create a single user with a unique email and hashed password
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test' . now()->timestamp . '@example.com', // Unique email
            'password' => Hash::make('password123')
        ]);
    }
}