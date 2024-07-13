<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DemoBuildingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('buildings')->delete();

        $rooms = [
            [
                'name' => 'Administration',
                'description' => 'Bureau pour la gestion de l\'hôpital.',
                'site_id' => 1,
                'maturity' => 4,
            ],
            [
                'name' => 'Salle serveur',
                'description' => 'Salle dédiée aux serveurs de l\'hôpital.',
                'site_id' => 1,
                'maturity' => 5,
            ],
            [
                'name' => 'Toilettes',
                'description' => 'Deux toilettes pour le personnel et les visiteurs.',
                'site_id' => 1,
                'maturity' => 3,
            ],
            [
                'name' => 'Salle de stockage',
                'description' => 'Salle pour le stockage de matériel.',
                'site_id' => 1,
                'maturity' => 3,
            ],
            [
                'name' => 'Bureau du CTO',
                'description' => 'Bureau du Directeur Technique.',
                'site_id' => 1,
                'maturity' => 4,
            ],
            [
                'name' => 'Bureau du CEO',
                'description' => NULL,
                'site_id' => 1,
                'maturity' => 4,
            ],
            [
                'name' => 'Salle d\'opération 1',
                'description' => 'Salle d\'opération dédiée aux interventions chirurgicales.',
                'site_id' => 1,
                'maturity' => 5,
            ],
            // Répéter pour les 6 salles d'opération
            [
                'name' => 'Salle d\'opération 2',
                'description' => 'Salle d\'opération dédiée aux interventions chirurgicales.',
                'site_id' => 1,
                'maturity' => 5,
            ],
            [
                'name' => 'Salle d\'opération 3',
                'description' => 'Salle d\'opération dédiée aux interventions chirurgicales.',
                'site_id' => 1,
                'maturity' => 5,
            ],
            [
                'name' => 'Salle d\'opération 4',
                'description' => 'Salle d\'opération dédiée aux interventions chirurgicales.',
                'site_id' => 1,
                'maturity' => 5,
            ],
            [
                'name' => 'Salle d\'opération 5',
                'description' => 'Salle d\'opération dédiée aux interventions chirurgicales.',
                'site_id' => 1,
                'maturity' => 5,
            ],
            [
                'name' => 'Salle d\'opération 6',
                'description' => 'Salle d\'opération dédiée aux interventions chirurgicales.',
                'site_id' => 1,
                'maturity' => 5,
            ],
            [
                'name' => 'Chambre 1',
                'description' => NULL,
                'site_id' => 1,
                'maturity' => 4,
            ],
            // Répéter pour les 30 chambres
            [
                'name' => 'Chambre 2',
                'description' => 'Chambre pour les patients.',
                'site_id' => 1,
                'maturity' => 4,
            ],
            // Continuer jusqu'à la Chambre 30...
            [
                'name' => 'Salle de repos pour les chirurgiens',
                'description' => 'Salle de repos dédiée aux chirurgiens.',
                'site_id' => 1,
                'maturity' => 4,
            ],
            [
                'name' => 'Salle d\'examen 1',
                'description' => 'Salle d\'examen pour les consultations.',
                'site_id' => 1,
                'maturity' => 4,
            ],
            // Répéter pour les 4 salles d'examen
            [
                'name' => 'Salle d\'examen 2',
                'description' => 'Salle d\'examen pour les consultations.',
                'site_id' => 1,
                'maturity' => 4,
            ],
            [
                'name' => 'Salle d\'examen 3',
                'description' => 'Salle d\'examen pour les consultations.',
                'site_id' => 1,
                'maturity' => 4,
            ],
            [
                'name' => 'Salle d\'examen 4',
                'description' => 'Salle d\'examen pour les consultations.',
                'site_id' => 1,
                'maturity' => 4,
            ],
            [
                'name' => 'Local pour les ergothérapeutes',
                'description' => 'Local pour les séances d\'ergothérapie.',
                'site_id' => 1,
                'maturity' => 3,
            ],
            [
                'name' => 'Local pour les kinésithérapeutes',
                'description' => 'Local pour les séances de kinésithérapie.',
                'site_id' => 1,
                'maturity' => 3,
            ],
            [
                'name' => 'Dépôt de médicaments 1',
                'description' => 'Dépôt pour les médicaments.',
                'site_id' => 1,
                'maturity' => 3,
            ],
            // Répéter pour les 4 dépôts de médicaments
            [
                'name' => 'Dépôt de médicaments 2',
                'description' => 'Dépôt pour les médicaments.',
                'site_id' => 1,
                'maturity' => 3,
            ],
            [
                'name' => 'Dépôt de médicaments 3',
                'description' => NULL,
                'site_id' => 1,
                'maturity' => 3,
            ],
            [
                'name' => 'Dépôt de médicaments 4',
                'description' => 'Dépôt pour les médicaments.',
                'site_id' => 1,
                'maturity' => 3,
            ],
            [
                'name' => 'Salle d\'attente 1',
                'description' => 'Salle d\'attente pour les patients.',
                'site_id' => 1,
                'maturity' => 4,
            ],
            // Répéter pour les 3 salles d'attente
            [
                'name' => 'Salle d\'attente 2',
                'description' => 'Salle d\'attente pour les patients.',
                'site_id' => 1,
                'maturity' => 4,
            ],
            [
                'name' => 'Salle d\'attente 3',
                'description' => 'Salle d\'attente pour les patients.',
                'site_id' => 1,
                'maturity' => 4,
            ],
            [
                'name' => 'Local d\'infirmières 1',
                'description' => 'Local pour le personnel infirmier.',
                'site_id' => 1,
                'maturity' => 4,
            ],
            // Répéter pour les 6 locaux d'infirmières
            [
                'name' => 'Local d\'infirmières 2',
                'description' => 'Local pour le personnel infirmier.',
                'site_id' => 1,
                'maturity' => 4,
            ],
            [
                'name' => 'Local d\'infirmières 3',
                'description' => 'Local pour le personnel infirmier.',
                'site_id' => 1,
                'maturity' => 4,
            ],
            [
                'name' => 'Local d\'infirmières 4',
                'description' => 'Local pour le personnel infirmier.',
                'site_id' => 1,
                'maturity' => 4,
            ],
            [
                'name' => 'Local d\'infirmières 5',
                'description' => NULL,
                'site_id' => 1,
                'maturity' => 4,
            ],
            [
                'name' => 'Local d\'infirmières 6',
                'description' => 'Local pour le personnel infirmier.',
                'site_id' => 1,
                'maturity' => 4,
            ],
        ];

        foreach ($rooms as $room) {
            \DB::table('buildings')->insert(array_merge($room, [
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ]));
        }
    }
}