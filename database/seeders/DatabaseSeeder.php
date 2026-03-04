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
Watch::create([
    'series' => 'Resistor Series',
    'model_name' => 'Onyx Stealth',
    'description' => 'A luxury timepiece crafted for stealth and sophistication.',
    'price' => 1299.00,
    'image_url' => 'https://via.placeholder.com/400x400.png?text=Watch+1',
    'is_active' => true,
    'slug' => 'onyx-stealth',
    'case_material' => 'Grade 5 Titanium',
    'water_resistance' => '300M',
    'movement_type' => 'Automatic H-26',
]);

Watch::create([
    'series' => 'Resistor Series',
    'model_name' => 'Midnight Phantom',
    'description' => 'Built for modern explorers with precision engineering.',
    'price' => 1499.00,
    'image_url' => 'https://via.placeholder.com/400x400.png?text=Watch+2',
    'is_active' => true,
    'slug' => 'midnight-phantom',
    'case_material' => 'Carbon Fiber',
    'water_resistance' => '200M',
    'movement_type' => 'Swiss Automatic',
]);
    }
}
