<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create an admin user
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@test.com',
            'password' => Hash::make('123456789'),
            'role' => 'admin',
        ]);

        // Create a regular user
        User::create([
            'name' => 'Test User',
            'email' => 'user@test.com',
            'password' => Hash::make('123456789'),
            'role' => 'user',
        ]);
    }
}
