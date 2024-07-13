<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DemoApplicationModulesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('application_modules')->delete();

        \DB::table('application_modules')->insert(array (
            0 =>
                array (
                    'id' => 1,
                    'name' => 'Gestion des Patients',
                    'description' => '<p>Module de gestion des dossiers et informations des patients</p>',
                    'created_at' => now(),
                    'updated_at' => now(),
                    'deleted_at' => NULL,
                    'maturity' => rand(0, 5),
                ),
            1 =>
                array (
                    'id' => 2,
                    'name' => 'Évaluation de la Qualité',
                    'description' => '<p>Module d\'évaluation et de suivi de la qualité des soins</p>',
                    'created_at' => now(),
                    'updated_at' => now(),
                    'deleted_at' => NULL,
                    'maturity' => rand(0, 5),
                ),
            2 =>
                array (
                    'id' => 3,
                    'name' => 'Gestion des Dossiers Médicaux',
                    'description' => '<p>Module de gestion et d\'archivage des dossiers médicaux électroniques</p>',
                    'created_at' => now(),
                    'updated_at' => now(),
                    'deleted_at' => NULL,
                    'maturity' => rand(0, 5),
                ),
            3 =>
                array (
                    'id' => 4,
                    'name' => 'Achats et Marchés Publics',
                    'description' => '<p>Module de gestion des achats et des marchés publics</p>',
                    'created_at' => now(),
                    'updated_at' => now(),
                    'deleted_at' => NULL,
                    'maturity' => rand(0, 5),
                ),
            4 =>
                array (
                    'id' => 5,
                    'name' => 'Planification RH',
                    'description' => '<p>Module de planification et de gestion des ressources humaines</p>',
                    'created_at' => now(),
                    'updated_at' => now(),
                    'deleted_at' => NULL,
                    'maturity' => rand(0, 5),
                ),
            5 =>
                array (
                    'id' => 6,
                    'name' => 'Gestion des Salaires',
                    'description' => '<p>Module de gestion des salaires et rémunérations</p>',
                    'created_at' => now(),
                    'updated_at' => now(),
                    'deleted_at' => NULL,
                    'maturity' => rand(0, 5),
                ),
            6 =>
                array (
                    'id' => 7,
                    'name' => 'Médecine du Travail',
                    'description' => '<p>Module de gestion de la médecine du travail</p>',
                    'created_at' => now(),
                    'updated_at' => now(),
                    'deleted_at' => NULL,
                    'maturity' => rand(0, 5),
                ),
            7 =>
                array (
                    'id' => 8,
                    'name' => 'Intranet',
                    'description' => '<p>Module de gestion de l\'intranet de l\'organisation</p>',
                    'created_at' => now(),
                    'updated_at' => now(),
                    'deleted_at' => NULL,
                    'maturity' => rand(0, 5),
                ),
            8 =>
                array (
                    'id' => 9,
                    'name' => 'Extranet',
                    'description' => '<p>Module de gestion de l\'extranet de l\'organisation</p>',
                    'created_at' => now(),
                    'updated_at' => now(),
                    'deleted_at' => NULL,
                    'maturity' => rand(0, 5),
                ),
        ));



    }
}