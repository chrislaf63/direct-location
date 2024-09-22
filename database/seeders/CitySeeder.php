<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\City;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        City::factory()->create([
            'name' => 'Boug-en-Bresse',
            'zip_code' => '01000',
            'departement_id' => 1,
        ]);

        City::factory()->create([
            'name' => 'Laon',
            'zip_code' => '02000',
            'departement_id' => 2,
        ]);

        City::factory()->create([
            'name' => 'Moulins',
            'zip_code' => '03000',
            'departement_id' => 3,
        ]);

        City::factory()->create([
            'name' => 'Digne',
            'zip_code' => '04000',
            'departement_id' => 4,
        ]);

        City::factory()->create([
            'name' => 'Gap',
            'zip_code' => '05000',
            'departement_id' => 5,
        ]);

        City::factory()->create([
            'name' => 'Nice',
            'zip_code' => '06000',
            'departement_id' => 6,
        ]);

        City::factory()->create([
            'name' => 'Privas',
            'zip_code' => '07000',
            'departement_id' => 7,
        ]);

        City::factory()->create([
            'name' => 'Charleville-Mézières',
            'zip_code' => '08000',
            'departement_id' => 8,
        ]);

        City::factory()->create([
            'name' => 'Foix',
            'zip_code' => '09000',
            'departement_id' => 9,
        ]);

        City::factory()->create([
            'name' => 'Troyes',
            'zip_code' => '10000',
            'departement_id' => 10,
        ]);

        City::factory()->create([
            'name' => 'Carcassonne',
            'zip_code' => '11000',
            'departement_id' => 11,
        ]);

        City::factory()->create([
            'name' => 'Rodez',
            'zip_code' => '12000',
            'departement_id' => 12,
        ]);

        City::factory()->create([
            'name' => 'Marseille',
            'zip_code' => '13000',
            'departement_id' => 13,
        ]);

        City::factory()->create([
            'name' => 'Caen',
            'zip_code' => '14000',
            'departement_id' => 14,
        ]);

        City::factory()->create([
            'name' => 'Aurillac',
            'zip_code' => '15000',
            'departement_id' => 15,
        ]);

        City::factory()->create([
            'name' => 'Angoulême',
            'zip_code' => '16000',
            'departement_id' => 16,
        ]);

        City::factory()->create([
            'name' => 'La Rochelle',
            'zip_code' => '17000',
            'departement_id' => 17,
        ]);

        City::factory()->create([
            'name' => 'Bourges',
            'zip_code' => '18000',
            'departement_id' => 18,
        ]);

        City::factory()->create([
            'name' => 'Tulle',
            'zip_code' => '19000',
            'departement_id' => 19,
        ]);

        City::factory()->create([
            'name' => 'Ajaccio',
            'zip_code' => '20000',
            'departement_id' => 20,
        ]);

        City::factory()->create([
            'name' => 'Bastia',
            'zip_code' => '20200',
            'departement_id' => 21,
        ]);

        City::factory()->create([
            'name' => 'Dijon',
            'zip_code' => '21000',
            'departement_id' => 22,
        ]);

        City::factory()->create([
            'name' => 'Saint-Brieuc',
            'zip_code' => '22000',
            'departement_id' => 23,
        ]);

        City::factory()->create([
            'name' => 'Guéret',
            'zip_code' => '23000',
            'departement_id' => 24,
        ]);

        City::factory()->create([
            'name' => 'Périgueux',
            'zip_code' => '24000',
            'departement_id' => 25,
        ]);

        City::factory()->create([
            'name' => 'Besançon',
            'zip_code' => '25000',
            'departement_id' => 26,
        ]);

        City::factory()->create([
            'name' => 'Valence',
            'zip_code' => '26000',
            'departement_id' => 27,
        ]);

        City::factory()->create([
            'name' => 'Évreux',
            'zip_code' => '27000',
            'departement_id' => 28,
        ]);

        City::factory()->create([
            'name' => 'Chartres',
            'zip_code' => '28000',
            'departement_id' => 29,
        ]);

        City::factory()->create([
            'name' => 'Quimper',
            'zip_code' => '29000',
            'departement_id' => 30,
        ]);

        City::factory()->create([
            'name' => 'Nîmes',
            'zip_code' => '30000',
            'departement_id' => 31,
        ]);

        City::factory()->create([
            'name' => 'Toulouse',
            'zip_code' => '31000',
            'departement_id' => 32,
        ]);

        City::factory()->create([
            'name' => 'Auch',
            'zip_code' => '32000',
            'departement_id' => 33,
        ]);

        City::factory()->create([
            'name' => 'Bordeaux',
            'zip_code' => '33000',
            'departement_id' => 34,
        ]);

        City::factory()->create([
            'name' => 'Montpellier',
            'zip_code' => '34000',
            'departement_id' => 35,
        ]);

        City::factory()->create([
            'name' => 'Rennes',
            'zip_code' => '35000',
            'departement_id' => 36,
        ]);

        City::factory()->create([
            'name' => 'Châteauroux',
            'zip_code' => '36000',
            'departement_id' => 37,
        ]);

        City::factory()->create([
            'name' => 'Tours',
            'zip_code' => '37000',
            'departement_id' => 38,
        ]);

        City::factory()->create([
            'name' => 'Grenoble',
            'zip_code' => '38000',
            'departement_id' => 39,
        ]);

        City::factory()->create([
            'name' => 'Bourgoin-Jallieu',
            'zip_code' => '38300',
            'departement_id' => 39,
        ]);

        City::factory()->create([
            'name' => 'Lons-le-Saunier',
            'zip_code' => '39000',
            'departement_id' => 40,
        ]);

        City::factory()->create([
            'name' => 'Mont-de-Marsan',
            'zip_code' => '40000',
            'departement_id' => 41,
        ]);

        City::factory()->create([
            'name' => 'Blois',
            'zip_code' => '41000',
            'departement_id' => 42,
        ]);

        City::factory()->create([
            'name' => 'Saint-Étienne',
            'zip_code' => '42000',
            'departement_id' => 43,
        ]);

        City::factory()->create([
            'name' => 'Le Puy-en-Velay',
            'zip_code' => '43000',
            'departement_id' => 44,
        ]);

        City::factory()->create([
            'name' => 'Nantes',
            'zip_code' => '44000',
            'departement_id' => 45,
        ]);

        City::factory()->create([
            'name' => 'Orléans',
            'zip_code' => '45000',
            'departement_id' => 46,
        ]);

        City::factory()->create([
            'name' => 'Cahors',
            'zip_code' => '46000',
            'departement_id' => 47,
        ]);

        City::factory()->create([
            'name' => 'Agen',
            'zip_code' => '47000',
            'departement_id' => 48,
        ]);

        City::factory()->create([
            'name' => 'Mende',
            'zip_code' => '48000',
            'departement_id' => 49,
        ]);

        City::factory()->create([
            'name' => 'Angers',
            'zip_code' => '49000',
            'departement_id' => 50,
        ]);

        City::factory()->create([
            'name' => 'Saint-Lô',
            'zip_code' => '50000',
            'departement_id' => 51,
        ]);

        City::factory()->create([
            'name' => 'Châlons-en-Champagne',
            'zip_code' => '51000',
            'departement_id' => 52,
        ]);

        City::factory()->create([
            'name' => 'Chaumont',
            'zip_code' => '52000',
            'departement_id' => 53,
        ]);

        City::factory()->create([
            'name' => 'Laval',
            'zip_code' => '53000',
            'departement_id' => 54,
        ]);

        City::factory()->create([
            'name' => 'Nancy',
            'zip_code' => '54000',
            'departement_id' => 55,
        ]);

        City::factory()->create([
            'name' => 'Bar-le-Duc',
            'zip_code' => '55000',
            'departement_id' => 56
        ]);

        City::factory()->create([
            'name' => 'Vannes',
            'zip_code' => '56000',
            'departement_id' => 57,
        ]);

        City::factory()->create([
            'name' => 'Metz',
            'zip_code' => '57000',
            'departement_id' => 58,
        ]);

        City::factory()->create([
            'name' => 'Nevers',
            'zip_code' => '58000',
            'departement_id' => 59,
        ]);

        City::factory()->create([
            'name' => 'Lille',
            'zip_code' => '59000',
            'departement_id' => 60,
        ]);

        City::factory()->create([
            'name' => 'Beauvais',
            'zip_code' => '60000',
            'departement_id' => 61,
        ]);

        City::factory()->create([
            'name' => 'Alençon',
            'zip_code' => '61000',
            'departement_id' => 62,
        ]);

        City::factory()->create([
            'name' => 'Arras',
            'zip_code' => '62000',
            'departement_id' => 63,
        ]);

        City::factory()->create([
            'name' => 'Clermont-Ferrand',
            'zip_code' => '63000',
            'departement_id' => 64,
        ]);

        City::factory()->create([
            'name' => 'Aigueperse',
            'zip_code' => '63260',
            'departement_id' => 64,
        ]);

        City::factory()->create([
            'name' => 'Pau',
            'zip_code' => '64000',
            'departement_id' => 65,
        ]);

        City::factory()->create([
            'name' => 'Tarbes',
            'zip_code' => '65000',
            'departement_id' => 66,
        ]);

        City::factory()->create([
            'name' => 'Perpignan',
            'zip_code' => '66000',
            'departement_id' => 67,
        ]);

        City::factory()->create([
            'name' => 'Strasbourg',
            'zip_code' => '67000',
            'departement_id' => 68,
        ]);

        City::factory()->create([
            'name' => 'Colmar',
            'zip_code' => '68000',
            'departement_id' => 69,
        ]);

        City::factory()->create([
            'name' => 'Lyon',
            'zip_code' => '69000',
            'departement_id' => 70,
        ]);


        City::factory()->create([
            'name' => 'Vesoul',
            'zip_code' => '70000',
            'departement_id' => 71,
        ]);

        City::factory()->create([
            'name' => 'Mâcon',
            'zip_code' => '71000',
            'departement_id' => 72,
        ]);

        City::factory()->create([
            'name' => 'Le Mans',
            'zip_code' => '72000',
            'departement_id' => 73,
        ]);

        City::factory()->create([
            'name' => 'Aix-les-Bains',
            'zip_code' => '73100',
            'departement_id' => 74,
        ]);

        City::factory()->create([
            'name' => 'Chambéry',
            'zip_code' => '73000',
            'departement_id' => 74,
        ]);

        City::factory()->create([
            'name' => 'Annecy',
            'zip_code' => '74000',
            'departement_id' => 75,
        ]);

        City::factory()->create([
            'name' => 'Paris',
            'zip_code' => '75000',
            'departement_id' => 76,
        ]);

        City::factory()->create([
            'name' => 'Melun',
            'zip_code' => '77000',
            'departement_id' => 78,
        ]);

        City::factory()->create([
            'name' => 'Versailles',
            'zip_code' => '78000',
            'departement_id' => 79,
        ]);

        City::factory()->create([
            'name' => 'Niort',
            'zip_code' => '79000',
            'departement_id' => 80,
        ]);

        City::factory()->create([
            'name' => 'Amiens',
            'zip_code' => '80000',
            'departement_id' => 81,
        ]);

        City::factory()->create([
            'name' => 'Albi',
            'zip_code' => '81000',
            'departement_id' => 82,
        ]);

        City::factory()->create([
            'name' => 'Montauban',
            'zip_code' => '82000',
            'departement_id' => 83,
        ]);

        City::factory()->create([
            'name' => 'Toulon',
            'zip_code' => '83000',
            'departement_id' => 84,
        ]);

        City::factory()->create([
            'name' => 'Avignon',
            'zip_code' => '84000',
            'departement_id' => 85,
        ]);

        City::factory()->create([
            'name' => 'La Roche-sur-Yon',
            'zip_code' => '85000',
            'departement_id' => 86,
        ]);

        City::factory()->create([
            'name' => 'Poitiers',
            'zip_code' => '86000',
            'departement_id' => 87,
        ]);

        City::factory()->create([
            'name' => 'Limoges',
            'zip_code' => '87000',
            'departement_id' => 88,
        ]);


        City::factory()->create([
            'name' => 'Epinal',
            'zip_code' => '88000',
            'departement_id' => 89,
        ]);

        City::factory()->create([
            'name' => 'Auxe',
            'zip_code' => '89000',
            'departement_id' => 90,
        ]);

        City::factory()->create([
            'name' => 'Belfort',
            'zip_code' => '90000',
            'departement_id' => 91,
        ]);

        City::factory()->create([
            'name' => 'Évry',
            'zip_code' => '91000',
            'departement_id' => 92,
        ]);

        City::factory()->create([
            'name' => 'Nanterre',
            'zip_code' => '92000',
            'departement_id' => 93,
        ]);

        City::factory()->create([
            'name' => 'Bobigny',
            'zip_code' => '93000',
            'departement_id' => 94,
        ]);

        City::factory()->create([
            'name' => 'Créteil',
            'zip_code' => '94000',
            'departement_id' => 95,
        ]);

        City::factory()->create([
            'name' => 'Pontoise',
            'zip_code' => '95000',
            'departement_id' => 96,
        ]);

        City::factory()->create([
            'name' => 'Cergy',
            'zip_code' => '95800',
            'departement_id' => 96,
        ]);

    }
}
