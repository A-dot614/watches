<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Watch;
use App\Http\Controllers\WatchController;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Watch::factory()->create([
            'model_name' => 'Onyx Stealth',
            'serial_number' => 'SN-TEST-0001',
            'price' => 1000.00,
            'is_active' => true,
            'slug' => 'test-watch',
        ]);
    }
}
