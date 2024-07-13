<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DemoBaysTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('bays')->delete();

        $bays = [
            [
                'name' => 'BAIE 101',
                'description' => '<p>Baie dédiée aux serveurs et équipements réseau.</p>',
                'room_id' => 2, // Salle serveur
                'maturity' => 5,
            ],
            [
                'name' => 'BAIE 102',
                'description' => '<p>Baie pour l\'infrastructure IT de l\'administration.</p>',
                'room_id' => 1, // Administration
                'maturity' => 4,
            ],
            [
                'name' => 'BAIE 201',
                'description' => '<p>Baie pour les équipements médicaux dans la salle d\'opération 1.</p>',
                'room_id' => 7, // Salle d'opération 1
                'maturity' => 5,
            ],
            [
                'name' => 'BAIE 202',
                'description' => '<p>Baie pour les équipements médicaux dans la salle d\'opération 2.</p>',
                'room_id' => 8, // Salle d'opération 2
                'maturity' => 5,
            ],
            [
                'name' => 'BAIE 203',
                'description' => '<p>Baie pour les équipements médicaux dans la salle d\'opération 3.</p>',
                'room_id' => 9, // Salle d'opération 3
                'maturity' => 5,
            ],
            [
                'name' => 'BAIE 204',
                'description' => '<p>Baie pour les équipements médicaux dans la salle d\'opération 4.</p>',
                'room_id' => 10, // Salle d'opération 4
                'maturity' => 5,
            ],
            [
                'name' => 'BAIE 205',
                'description' => '<p>Baie pour les équipements médicaux dans la salle d\'opération 5.</p>',
                'room_id' => 11, // Salle d'opération 5
                'maturity' => 5,
            ],
            [
                'name' => 'BAIE 206',
                'description' => '<p>Baie pour les équipements médicaux dans la salle d\'opération 6.</p>',
                'room_id' => 12, // Salle d'opération 6
                'maturity' => 5,
            ],
            [
                'name' => 'BAIE 301',
                'description' => '<p>Baie pour les équipements des chambres des patients.</p>',
                'room_id' => 13, // Chambre 1
                'maturity' => 4,
            ],
            // Continuer jusqu'à la Chambre 30...
            [
                'name' => 'BAIE 302',
                'description' => '<p>Baie pour les équipements des chambres des patients.</p>',
                'room_id' => 14, // Chambre 2
                'maturity' => 4,
            ],
            // Ajouter d'autres baies pour chaque chambre...
            [
                'name' => 'BAIE 401',
                'description' => '<p>Baie pour les équipements de la salle d\'examen 1.</p>',
                'room_id' => 19, // Salle d'examen 1
                'maturity' => 4,
            ],
            [
                'name' => 'BAIE 402',
                'description' => '<p>Baie pour les équipements de la salle d\'examen 2.</p>',
                'room_id' => 20, // Salle d'examen 2
                'maturity' => 4,
            ],
            [
                'name' => 'BAIE 403',
                'description' => '<p>Baie pour les équipements de la salle d\'examen 3.</p>',
                'room_id' => 21, // Salle d'examen 3
                'maturity' => 4,
            ],
            [
                'name' => 'BAIE 404',
                'description' => '<p>Baie pour les équipements de la salle d\'examen 4.</p>',
                'room_id' => 22, // Salle d'examen 4
                'maturity' => 4,
            ],
        ];

        foreach ($bays as $index => $bay) {
            \DB::table('bays')->insert(array_merge($bay, [
                'id' => $index + 1,
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ]));
        }
    }
}