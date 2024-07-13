<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DemoOperationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('operations')->delete();

        \DB::table('operations')->insert(array (
            0 =>
                array (
                    'id' => 1,
                    'name' => 'Admission des patients',
                    'description' => '<p>Enregistrement des informations personnelles et médicales des nouveaux patients.</p>',
                    'created_at' => now(),
                    'updated_at' => now(),
                    'deleted_at' => NULL,
                    'process_id' => NULL,
                    'maturity' => rand(0, 5),
                ),
            1 =>
                array (
                    'id' => 2,
                    'name' => 'Planification des consultations',
                    'description' => '<p>Organisation des rendez-vous médicaux entre les patients et les médecins.</p>',
                    'created_at' => now(),
                    'updated_at' => now(),
                    'deleted_at' => NULL,
                    'process_id' => NULL,
                    'maturity' => rand(0, 5),
                ),
            2 =>
                array (
                    'id' => 3,
                    'name' => 'Réalisation d’examens',
                    'description' => '<p>Coordination et exécution des examens médicaux (radiographies, analyses de sang).</p>',
                    'created_at' => now(),
                    'updated_at' => now(),
                    'deleted_at' => NULL,
                    'process_id' => NULL,
                    'maturity' => rand(0, 5),
                ),
            3 =>
                array (
                    'id' => 4,
                    'name' => 'Administration des traitements',
                    'description' => '<p>Gestion de l’administration des médicaments aux patients, incluant le suivi des prescriptions.</p>',
                    'created_at' => now(),
                    'updated_at' => now(),
                    'deleted_at' => NULL,
                    'process_id' => NULL,
                    'maturity' => rand(0, 5),
                ),
            4 =>
                array (
                    'id' => 5,
                    'name' => 'Gestion des urgences',
                    'description' => '<p>Triage et traitement des cas d\'urgence dans le service des urgences.</p>',
                    'created_at' => now(),
                    'updated_at' => now(),
                    'deleted_at' => NULL,
                    'process_id' => NULL,
                    'maturity' => rand(0, 5),
                ),
            5 =>
                array (
                    'id' => 6,
                    'name' => 'Gestion des dossiers médicaux',
                    'description' => '<p>Maintien et mise à jour des dossiers médicaux des patients.</p>',
                    'created_at' => now(),
                    'updated_at' => now(),
                    'deleted_at' => NULL,
                    'process_id' => NULL,
                    'maturity' => rand(0, 5),
                ),
            6 =>
                array (
                    'id' => 7,
                    'name' => 'Facturation et paiements',
                    'description' => '<p>Émission de factures aux patients et gestion des paiements.</p>',
                    'created_at' => now(),
                    'updated_at' => now(),
                    'deleted_at' => NULL,
                    'process_id' => NULL,
                    'maturity' => rand(0, 5),
                ),
            7 =>
                array (
                    'id' => 8,
                    'name' => 'Suivi des patients',
                    'description' => '<p>Surveillance continue de l\'état de santé des patients.</p>',
                    'created_at' => now(),
                    'updated_at' => now(),
                    'deleted_at' => NULL,
                    'process_id' => NULL,
                    'maturity' => rand(0, 5),
                ),
            8 =>
                array (
                    'id' => 9,
                    'name' => 'Gestion des ressources humaines',
                    'description' => '<p>Recrutement et gestion des employés de l\'hôpital.</p>',
                    'created_at' => now(),
                    'updated_at' => now(),
                    'deleted_at' => NULL,
                    'process_id' => NULL,
                    'maturity' => rand(0, 5),
                ),
            9 =>
                array (
                    'id' => 10,
                    'name' => 'Gestion des stocks',
                    'description' => '<p>Contrôle des fournitures médicales et gestion des commandes.</p>',
                    'created_at' => now(),
                    'updated_at' => now(),
                    'deleted_at' => NULL,
                    'process_id' => NULL,
                    'maturity' => rand(0, 5),
                ),
        ));



    }
}