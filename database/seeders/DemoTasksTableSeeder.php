<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DemoTasksTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('tasks')->delete();

        \DB::table('tasks')->insert(array (
            0 =>
                array (
                    'id' => 1,
                    'name' => 'Administration des médicaments',
                    'description' => 'Administration des médicaments aux patients selon les prescriptions.',
                    'created_at' => now(),
                    'updated_at' => now(),
                    'deleted_at' => NULL,
                    'maturity' => rand(0, 5),
                ),
            1 =>
                array (
                    'id' => 2,
                    'name' => 'Diagnostic des patients',
                    'description' => 'Évaluation et diagnostic des conditions médicales des patients.',
                    'created_at' => now(),
                    'updated_at' => now(),
                    'deleted_at' => NULL,
                    'maturity' => rand(0, 5),
                ),
            2 =>
                array (
                    'id' => 3,
                    'name' => 'Coordination des rendez-vous',
                    'description' => 'Organisation et planification des rendez-vous des patients.',
                    'created_at' => now(),
                    'updated_at' => now(),
                    'deleted_at' => NULL,
                    'maturity' => rand(0, 5),
                ),
            3 =>
                array (
                    'id' => 4,
                    'name' => 'Maintenance des équipements médicaux',
                    'description' => 'Entretien et vérification des équipements médicaux.',
                    'created_at' => now(),
                    'updated_at' => now(),
                    'deleted_at' => NULL,
                    'maturity' => rand(0, 5),
                ),
            4 =>
                array (
                    'id' => 5,
                    'name' => 'Conseil sur les prescriptions',
                    'description' => 'Fournir des conseils aux médecins concernant les prescriptions médicamenteuses.',
                    'created_at' => now(),
                    'updated_at' => now(),
                    'deleted_at' => NULL,
                    'maturity' => rand(0, 5),
                ),
            5 =>
                array (
                    'id' => 6,
                    'name' => 'Élaboration de programmes de réhabilitation',
                    'description' => 'Création de programmes de réhabilitation adaptés aux patients.',
                    'created_at' => now(),
                    'updated_at' => now(),
                    'deleted_at' => NULL,
                    'maturity' => rand(0, 5),
                ),
            6 =>
                array (
                    'id' => 7,
                    'name' => 'Soutien aux patients et familles',
                    'description' => 'Offrir un soutien émotionnel et social aux patients et leurs familles.',
                    'created_at' => now(),
                    'updated_at' => now(),
                    'deleted_at' => NULL,
                    'maturity' => rand(0, 5),
                ),
            7 =>
                array (
                    'id' => 8,
                    'name' => 'Supervision des opérations quotidiennes',
                    'description' => 'Veiller à la bonne marche des opérations au sein de l’hôpital.',
                    'created_at' => now(),
                    'updated_at' => now(),
                    'deleted_at' => NULL,
                    'maturity' => rand(0, 5),
                ),
        ));



    }
}
