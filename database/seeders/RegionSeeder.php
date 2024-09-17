<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Region;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Region::factory()->create([
            'name' => 'Auvergne-Rhône-Alpes',
        ]);

        Region::factory()->create([
            'name' => 'Bourgogne-Franche-Comté',
        ]);

        Region::factory()->create([
            'name' => 'Bretagne',
        ]);

        Region::factory()->create([
            'name' => 'Centre-Val de Loire',
        ]);

        Region::factory()->create([
            'name' => 'Corse',
        ]);

        Region::factory()->create([
            'name' => 'Grand Est',
        ]);

        Region::factory()->create([
            'name' => 'Hauts-de-France',
        ]);

        Region::factory()->create([
            'name' => 'Île-de-France',
        ]);

        Region::factory()->create([
            'name' => 'Normandie',
        ]);

        Region::factory()->create([
            'name' => 'Nouvelle-Aquitaine',
        ]);

        Region::factory()->create([
            'name' => 'Occitanie',
        ]);

        Region::factory()->create([
            'name' => 'Pays de la Loire',
        ]);

        Region::factory()->create([
            'name' => 'Provence-Alpes-Côte d\'Azur',
        ]);

        Region::factory()->create([
            'name' => 'Guadeloupe',
        ]);

        Region::factory()->create([
            'name' => 'Martinique',
        ]);

        Region::factory()->create([
            'name' => 'Guyane',
        ]);

        Region::factory()->create([
            'name' => 'La Réunion',
        ]);

        Region::factory()->create([
            'name' => 'Mayotte',
        ]);



    }
}
