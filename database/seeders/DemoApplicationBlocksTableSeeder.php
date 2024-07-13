<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DemoApplicationBlocksTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('application_blocks')->delete();

        \DB::table('application_blocks')->insert(array (
            0 =>
                array (
                    'id' => 1,
                    'name' => 'Bloc Administratif',
                    'description' => '<p>Bloc dédié à la gestion administrative des hôpitaux</p>',
                    'responsible' => 'Jean Pierre',
                    'created_at' => '2020-06-13 06:09:01',
                    'updated_at' => '2020-06-13 06:09:01',
                    'deleted_at' => NULL,
                    'maturity' => rand(0, 5),
                ),
            1 =>
                array (
                    'id' => 2,
                    'name' => 'Bloc Qualité',
                    'description' => '<p>Bloc dédié à l\'évaluation et à l\'assurance qualité des services médicaux</p>',
                    'responsible' => 'Margaret Hamilton',
                    'created_at' => '2020-06-14 09:20:15',
                    'updated_at' => '2020-06-14 09:20:15',
                    'deleted_at' => NULL,
                    'maturity' => rand(0, 5),
                ),
            2 =>
                array (
                    'id' => 3,
                    'name' => 'Bloc Gestion des Dossiers Médicaux',
                    'description' => '<p>Bloc dédié à la gestion des dossiers médicaux électroniques</p>',
                    'responsible' => 'Margaret Hamilton',
                    'created_at' => '2020-06-15 10:30:25',
                    'updated_at' => '2020-06-15 10:30:25',
                    'deleted_at' => NULL,
                    'maturity' => rand(0, 5),
                ),
            3 =>
                array (
                    'id' => 4,
                    'name' => 'Bloc Achats Publics',
                    'description' => '<p>Bloc dédié à la gestion des achats et des marchés publics</p>',
                    'responsible' => 'Jean Pierre',
                    'created_at' => '2020-06-16 11:40:35',
                    'updated_at' => '2020-06-16 11:40:35',
                    'deleted_at' => NULL,
                    'maturity' => rand(0, 5),
                ),
            4 =>
                array (
                    'id' => 5,
                    'name' => 'Bloc Planification des Ressources Humaines',
                    'description' => '<p>Bloc dédié à la gestion et à la planification des ressources humaines</p>',
                    'responsible' => 'Margaret Hamilton',
                    'created_at' => '2020-06-17 12:50:45',
                    'updated_at' => '2020-06-17 12:50:45',
                    'deleted_at' => NULL,
                    'maturity' => rand(0, 5),
                ),
            5 =>
                array (
                    'id' => 6,
                    'name' => 'Bloc Gestion des Salaires',
                    'description' => '<p>Bloc dédié à la gestion des salaires et des rémunérations</p>',
                    'responsible' => 'Margaret Hamilton',
                    'created_at' => '2020-06-18 14:00:55',
                    'updated_at' => '2020-06-18 14:00:55',
                    'deleted_at' => NULL,
                    'maturity' => rand(0, 5),
                ),
            6 =>
                array (
                    'id' => 7,
                    'name' => 'Bloc Médecine du Travail',
                    'description' => '<p>Bloc dédié à la gestion de la médecine du travail</p>',
                    'responsible' => 'Margaret Hamilton',
                    'created_at' => '2020-06-19 15:11:05',
                    'updated_at' => '2020-06-19 15:11:05',
                    'deleted_at' => NULL,
                    'maturity' => rand(0, 5),
                ),
            7 =>
                array (
                    'id' => 8,
                    'name' => 'Bloc Intranet',
                    'description' => '<p>Bloc dédié à la gestion de l\'intranet de l\'organisation</p>',
                    'responsible' => 'Jean Pierre',
                    'created_at' => '2020-06-20 16:21:15',
                    'updated_at' => '2020-06-20 16:21:15',
                    'deleted_at' => NULL,
                    'maturity' => rand(0, 5),
                ),
            8 =>
                array (
                    'id' => 9,
                    'name' => 'Bloc Extranet',
                    'description' => '<p>Bloc dédié à la gestion de l\'extranet de l\'organisation</p>',
                    'responsible' => 'Jean Pierre',
                    'created_at' => '2020-06-21 17:31:25',
                    'updated_at' => '2020-06-21 17:31:25',
                    'deleted_at' => NULL,
                    'maturity' => rand(0, 5),
                ),
        ));



    }
}