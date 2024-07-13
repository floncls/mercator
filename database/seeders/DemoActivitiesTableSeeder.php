<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DemoActivitiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('activities')->delete();

        \DB::table('activities')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'name' => 'Suivi des soins infirmiers',
                    'description' => '<p>Administration des traitements et suivi des patients.</p>',
                    'created_at' => now(),
                    'updated_at' => now(),
                    'deleted_at' => NULL,
                    'maturity' => rand(0, 5),
                ),
            1 =>
                array(
                    'id' => 2,
                    'name' => 'Planification des opérations',
                    'description' => '<p>Organisation des interventions chirurgicales.</p>',
                    'created_at' => now(),
                    'updated_at' => now(),
                    'deleted_at' => NULL,
                    'maturity' => rand(0, 5),
                ),
            2 =>
                array(
                    'id' => 3,
                    'name' => 'Communication interne',
                    'description' => '<p>Facilitation des échanges d\'informations entre départements.</p>',
                    'created_at' => now(),
                    'updated_at' => now(),
                    'deleted_at' => NULL,
                    'maturity' => rand(0, 5),
                ),
            3 =>
                array(
                    'id' => 4,
                    'name' => 'Soutien psychologique',
                    'description' => '<p>Accompagnement psychologique des patients et familles.</p>',
                    'created_at' => now(),
                    'updated_at' => now(),
                    'deleted_at' => NULL,
                    'maturity' => rand(0, 5),
                ),
        ));
    }
}
