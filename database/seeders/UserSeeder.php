<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // admin user
        User::factory()->create([
            'name' => 'Abdullah Bin Mumtaz',
            'email' => 'admin@watch.com',
            'role' => 'admin',
            'password' => Hash::make('password'),
        ]);

        // buy user
        User::factory()->create([
            'name' => 'John Doe',
            'email' => 'buy@watch.com',
            'role' => 'buy',
            'password' => Hash::make('password'),
        ]);
    }
}
