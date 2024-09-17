<?php

namespace Database\Seeders;

use App\Models\Departement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Departement::factory()->create([
            'name' => 'Ain',
            'number' => '01',
            'region_id' => 1,
        ]);

        Departement::factory()->create([
            'name' => 'Aisne',
            'number' => '02',
            'region_id' => 7,
        ]);

        Departement::factory()->create([
            'name' => 'Allier',
            'number' => '03',
            'region_id' => 1,
        ]);

        Departement::factory()->create([
            'name' => 'Alpes-de-Haute-Provence',
            'number' => '04',
            'region_id' => 13,
        ]);

        Departement::factory()->create([
            'name' => 'Hautes-Alpes',
            'number' => '05',
            'region_id' => 13,
        ]);

        Departement::factory()->create([
            'name' => 'Alpes-Maritimes',
            'number' => '06',
            'region_id' => 13,
        ]);

        Departement::factory()->create([
            'name' => 'Ardèche',
            'number' => '07',
            'region_id' => 1,
        ]);

        Departement::factory()->create([
            'name' => 'Ardennes',
            'number' => '08',
            'region_id' => 6,
        ]);

        Departement::factory()->create([
            'name' => 'Ariège',
            'number' => '09',
            'region_id' => 11,
        ]);

        Departement::factory()->create([
            'name' => 'Aube',
            'number' => '10',
            'region_id' => 6,
        ]);

        Departement::factory()->create([
            'name' => 'Aude',
            'number' => '11',
            'region_id' => 11,
        ]);

        Departement::factory()->create([
            'name' => 'Aveyron',
            'number' => '12',
            'region_id' => 11,
        ]);

        Departement::factory()->create([
            'name' => 'Bouches-du-Rhône',
            'number' => '13',
            'region_id' => 13,
        ]);

        Departement::factory()->create([
            'name' => 'Calvados',
            'number' => '14',
            'region_id' => 9,
        ]);

        Departement::factory()->create([
            'name' => 'Cantal',
            'number' => '15',
            'region_id' => 1,
        ]);

        Departement::factory()->create([
            'name' => 'Charente',
            'number' => '16',
            'region_id' => 10,
        ]);

        Departement::factory()->create([
            'name' => 'Charente-Maritime',
            'number' => '17',
            'region_id' => 10,
        ]);

        Departement::factory()->create([
            'name' => 'Cher',
            'number' => '18',
            'region_id' => 4,
        ]);

        Departement::factory()->create([
            'name' => 'Corrèze',
            'number' => '19',
            'region_id' => 10,
        ]);

        Departement::factory()->create([
            'name' => 'Corse-du-Sud',
            'number' => '2A',
            'region_id' => 5,
        ]);

        Departement::factory()->create([
            'name' => 'Haute-Corse',
            'number' => '2B',
            'region_id' => 5,
        ]);

        Departement::factory()->create([
            'name' => 'Côte-d\'Or',
            'number' => '21',
            'region_id' => 2,
        ]);

        Departement::factory()->create([
            'name' => 'Côtes-d\'Armor',
            'number' => '22',
            'region_id' => 3,
        ]);

        Departement::factory()->create([
            'name' => 'Creuse',
            'number' => '23',
            'region_id' => 10,
        ]);

        Departement::factory()->create([
            'name' => 'Dordogne',
            'number' => '24',
            'region_id' => 10,
        ]);

        Departement::factory()->create([
            'name' => 'Doubs',
            'number' => '25',
            'region_id' => 2,
        ]);

        Departement::factory()->create([
            'name' => 'Drôme',
            'number' => '26',
            'region_id' => 1,
        ]);

        Departement::factory()->create([
            'name' => 'Eure',
            'number' => '27',
            'region_id' => 9,
        ]);

        Departement::factory()->create([
            'name' => 'Eure-et-Loir',
            'number' => '28',
            'region_id' => 4,
        ]);

        Departement::factory()->create([
            'name' => 'Finistère',
            'number' => '29',
            'region_id' => 3,
        ]);

        Departement::factory()->create([
            'name' => 'Gard',
            'number' => '30',
            'region_id' => 11,
        ]);

        Departement::factory()->create([
            'name' => 'Haute-Garonne',
            'number' => '31',
            'region_id' => 11,
        ]);

        Departement::factory()->create([
            'name' => 'Gers',
            'number' => '32',
            'region_id' => 11,
        ]);

        Departement::factory()->create([
            'name' => 'Gironde',
            'number' => '33',
            'region_id' => 10,
        ]);

        Departement::factory()->create([
            'name' => 'Hérault',
            'number' => '34',
            'region_id' => 11,
        ]);

        Departement::factory()->create([
            'name' => 'Ille-et-Vilaine',
            'number' => '35',
            'region_id' => 3,
        ]);

        Departement::factory()->create([
            'name' => 'Indre',
            'number' => '36',
            'region_id' => 4,
        ]);

        Departement::factory()->create([
            'name' => 'Indre-et-Loire',
            'number' => '37',
            'region_id' => 4,
        ]);

        Departement::factory()->create([
            'name' => 'Isère',
            'number' => '38',
            'region_id' => 1,
        ]);

        Departement::factory()->create([
            'name' => 'Jura',
            'number' => '39',
            'region_id' => 2,
        ]);

        Departement::factory()->create([
            'name' => 'Landes',
            'number' => '40',
            'region_id' => 10,
        ]);

        Departement::factory()->create([
            'name' => 'Loir-et-Cher',
            'number' => '41',
            'region_id' => 4,
        ]);

        Departement::factory()->create([
            'name' => 'Loire',
            'number' => '42',
            'region_id' => 1,
        ]);

        Departement::factory()->create([
            'name' => 'Haute-Loire',
            'number' => '43',
            'region_id' => 1,
        ]);

        Departement::factory()->create([
            'name' => 'Loire-Atlantique',
            'number' => '44',
            'region_id' => 12,
        ]);

        Departement::factory()->create([
            'name' => 'Loiret',
            'number' => '45',
            'region_id' => 4,
        ]);

        Departement::factory()->create([
            'name' => 'Lot',
            'number' => '46',
            'region_id' => 11,
        ]);

        Departement::factory()->create([
            'name' => 'Lot-et-Garonne',
            'number' => '47',
            'region_id' => 10,
        ]);

        Departement::factory()->create([
            'name' => 'Lozère',
            'number' => '48',
            'region_id' => 11,
        ]);

        Departement::factory()->create([
            'name' => 'Maine-et-Loire',
            'number' => '49',
            'region_id' => 12,
        ]);

        Departement::factory()->create([
            'name' => 'Manche',
            'number' => '50',
            'region_id' => 9,
        ]);

        Departement::factory()->create([
            'name' => 'Marne',
            'number' => '51',
            'region_id' => 6,
        ]);

        Departement::factory()->create([
            'name' => 'Haute-Marne',
            'number' => '52',
            'region_id' => 6,
        ]);

        Departement::factory()->create([
            'name' => 'Mayenne',
            'number' => '53',
            'region_id' => 12,
        ]);

        Departement::factory()->create([
            'name' => 'Meurthe-et-Moselle',
            'number' => '54',
            'region_id' => 1,
        ]);

        Departement::factory()->create([
            'name' => 'Meuse',
            'number' => '55',
            'region_id' => 6,
        ]);

        Departement::factory()->create([
            'name' => 'Morbihan',
            'number' => '56',
            'region_id' => 3,
        ]);

        Departement::factory()->create([
            'name' => 'Moselle',
            'number' => '57',
            'region_id' => 6,
        ]);

        Departement::factory()->create([
            'name' => 'Nièvre',
            'number' => '58',
            'region_id' => 2,
        ]);

        Departement::factory()->create([
            'name' => 'Nord',
            'number' => '59',
            'region_id' => 7,
        ]);

        Departement::factory()->create([
            'name' => 'Oise',
            'number' => '60',
            'region_id' => 7,
        ]);

        Departement::factory()->create([
            'name' => 'Orne',
            'number' => '61',
            'region_id' => 9,
        ]);

        Departement::factory()->create([
            'name' => 'Pas-de-Calais',
            'number' => '62',
            'region_id' => 7,
        ]);

        Departement::factory()->create([
            'name' => 'Puy-de-Dôme',
            'number' => '63',
            'region_id' => 1,
        ]);

        Departement::factory()->create([
            'name' => 'Pyrénées-Atlantiques',
            'number' => '64',
            'region_id' => 10,
        ]);

        Departement::factory()->create([
            'name' => 'Hautes-Pyrénées',
            'number' => '65',
            'region_id' => 11,
        ]);

        Departement::factory()->create([
            'name' => 'Pyrénées-Orientales',
            'number' => '66',
            'region_id' => 11,
        ]);

        Departement::factory()->create([
            'name' => 'Bas-Rhin',
            'number' => '67',
            'region_id' => 6,
        ]);

        Departement::factory()->create([
            'name' => 'Haut-Rhin',
            'number' => '68',
            'region_id' => 6,
        ]);

        Departement::factory()->create([
            'name' => 'Rhône',
            'number' => '69',
            'region_id' => 1,
        ]);

        Departement::factory()->create([
            'name' => 'Haute-Saône',
            'number' => '70',
            'region_id' => 2,
        ]);

        Departement::factory()->create([
            'name' => 'Saône-et-Loire',
            'number' => '71',
            'region_id' => 2,
        ]);

        Departement::factory()->create([
            'name' => 'Sarthe',
            'number' => '72',
            'region_id' => 12,
        ]);

        Departement::factory()->create([
            'name' => 'Savoie',
            'number' => '73',
            'region_id' => 1,
        ]);

        Departement::factory()->create([
            'name' => 'Haute-Savoie',
            'number' => '74',
            'region_id' => 1,
        ]);

        Departement::factory()->create([
            'name' => 'Paris',
            'number' => '75',
            'region_id' => 8,
        ]);

        Departement::factory()->create([
            'name' => 'Seine-Maritime',
            'number' => '76',
            'region_id' => 9,
        ]);

        Departement::factory()->create([
            'name' => 'Seine-et-Marne',
            'number' => '77',
            'region_id' => 8,
        ]);

        Departement::factory()->create([
            'name' => 'Yvelines',
            'number' => '78',
            'region_id' => 8,
        ]);

        Departement::factory()->create([
            'name' => 'Deux-Sèvres',
            'number' => '79',
            'region_id' => 10,
        ]);

        Departement::factory()->create([
            'name' => 'Somme',
            'number' => '80',
            'region_id' => 7,
        ]);

        Departement::factory()->create([
            'name' => 'Tarn',
            'number' => '81',
            'region_id' => 11,
        ]);

        Departement::factory()->create([
            'name' => 'Tarn-et-Garonne',
            'number' => '82',
            'region_id' => 11,
        ]);

        Departement::factory()->create([
            'name' => 'Var',
            'number' => '83',
            'region_id' => 13,
        ]);

        Departement::factory()->create([
            'name' => 'Vaucluse',
            'number' => '84',
            'region_id' => 13,
        ]);

        Departement::factory()->create([
            'name' => 'Vendée',
            'number' => '85',
            'region_id' => 12,
        ]);

        Departement::factory()->create([
            'name' => 'Vienne',
            'number' => '86',
            'region_id' => 10,
        ]);

        Departement::factory()->create([
            'name' => 'Haute-Vienne',
            'number' => '87',
            'region_id' => 10,
        ]);

        Departement::factory()->create([
            'name' => 'Vosges',
            'number' => '88',
            'region_id' => 6,
        ]);

        Departement::factory()->create([
            'name' => 'Yonne',
            'number' => '89',
            'region_id' => 2,
        ]);

        Departement::factory()->create([
            'name' => 'Territoire de Belfort',
            'number' => '90',
            'region_id' => 2,
        ]);

        Departement::factory()->create([
            'name' => 'Essonne',
            'number' => '91',
            'region_id' => 8,
        ]);

        Departement::factory()->create([
            'name' => 'Hauts-de-Seine',
            'number' => '92',
            'region_id' => 8,
        ]);

        Departement::factory()->create([
            'name' => 'Seine-Saint-Denis',
            'number' => '93',
            'region_id' => 8,
        ]);

        Departement::factory()->create([
            'name' => 'Val-de-Marne',
            'number' => '94',
            'region_id' => 8,
        ]);

        Departement::factory()->create([
            'name' => 'Val-d\'Oise',
            'number' => '95',
            'region_id' => 8,
        ]);

        Departement::factory()->create([
            'name' => 'Guadeloupe',
            'number' => '971',
            'region_id' => 1,
        ]);

        Departement::factory()->create([
            'name' => 'Martinique',
            'number' => '972',
            'region_id' => 1,
        ]);

        Departement::factory()->create([
            'name' => 'Guyane',
            'number' => '973',
            'region_id' => 1,
        ]);

        Departement::factory()->create([
            'name' => 'La Réunion',
            'number' => '974',
            'region_id' => 1,
        ]);

        Departement::factory()->create([
            'name' => 'Mayotte',
            'number' => '976',
            'region_id' => 1,
        ]);

    }
}
