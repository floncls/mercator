<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DemoDatabasesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('databases')->delete();

        \DB::table('databases')->insert(array (
            0 =>
                array (
                    'id' => 1,
                    'name' => 'Patients Database',
                    'description' => '<p>Base de données contenant les informations des patients</p>',
                    'responsible' => 'Paul',
                    'type' => 'MySQL',
                    'security_need_c' => 1,
                    'external' => 'Interne',
                    'created_at' => now(),
                    'updated_at' => now(),
                    'deleted_at' => NULL,
                    'entity_resp_id' => 2,
                    'security_need_i' => 2,
                    'security_need_a' => 3,
                    'security_need_t' => 4,
                    'maturity' => 5,
                ),
        ));
        
        
    }
}