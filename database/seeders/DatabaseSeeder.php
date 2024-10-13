<?php

namespace Database\Seeders;

use App\Models\Departement;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Chrislaf',
            'email' => 'test@example.com',
            'role' => 'admin',
            'password' => bcrypt('password'),
        ]);

        User::factory(10)->create();

        $this->call([
            CategorySeeder::class,
            RegionSeeder::class,
            DepartementSeeder::class,
            CitySeeder::class,
            AdSeeder::class,
        ]);
    }
}
