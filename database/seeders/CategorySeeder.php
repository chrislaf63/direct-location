<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::factory()->create([
            'name' => 'Véhicules',
        ]);

        Category::factory()->create([
            'name' => 'Remorques',
        ]);

        Category::factory()->create([
            'name' => 'Maison',
        ]);

        Category::factory()->create([
            'name' => 'Jardin',
        ]);

        Category::factory()->create([
            'name' => 'Puériculture',
        ]);

        Category::factory()->create([
            'name' => 'Autre',
        ]);
    }
}
