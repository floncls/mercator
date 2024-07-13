<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DemoVlansTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('vlans')->delete();

        \DB::table('vlans')->insert(array (
            0 =>
                array (
                    'id' => 1,
                    'name' => 'VLAN_Médical',
                    'description' => 'VLAN pour les équipements médicaux',
                    'created_at' => now(),
                    'updated_at' => now(),
                    'deleted_at' => NULL,
                    'maturity' => rand(0, 5),
                ),
            1 =>
                array (
                    'id' => 2,
                    'name' => 'VLAN_IT',
                    'description' => 'VLAN pour le réseau informatique',
                    'created_at' => now(),
                    'updated_at' => now(),
                    'deleted_at' => NULL,
                    'maturity' => rand(0, 5),
                ),
            2 =>
                array (
                    'id' => 3,
                    'name' => 'VLAN_Administratif',
                    'description' => 'VLAN pour le réseau administratif',
                    'created_at' => now(),
                    'updated_at' => now(),
                    'deleted_at' => NULL,
                    'maturity' => rand(0, 5),
                ),
            3 =>
                array (
                    'id' => 4,
                    'name' => 'VLAN_R&D',
                    'description' => 'VLAN pour le réseau recherche et développement',
                    'created_at' => now(),
                    'updated_at' => now(),
                    'deleted_at' => NULL,
                    'maturity' => rand(0, 5),
                ),
            4 =>
                array (
                    'id' => 5,
                    'name' => 'VLAN_Guest',
                    'description' => 'VLAN pour les invités',
                    'created_at' => now(),
                    'updated_at' => now(),
                    'deleted_at' => NULL,
                    'maturity' => rand(0, 5),
                ),
        ));
    }
}