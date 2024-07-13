<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DemoNetworksTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('networks')->delete();

        \DB::table('networks')->insert(array (
            0 =>
                array (
                    'id' => 1,
                    'name' => 'Hospital Network',
                    'description' => '<p>Réseau principal couvrant toutes les opérations de l\'hôpital</p>',
                    'protocol_type' => 'Ethernet IP 100/1000Mb/10Gb/s',
                    'responsible' => 'IT Department',
                    'responsible_sec' => 'Network Security Team',
                    'security_need_c' => 3,
                    'security_need_i' => 4,
                    'security_need_a' => 5,
                    'security_need_t' => 4,
                    'created_at' => now(),
                    'updated_at' => now(),
                    'deleted_at' => NULL,
                    'maturity' => rand(0, 5),
                ),
        ));


    }
}