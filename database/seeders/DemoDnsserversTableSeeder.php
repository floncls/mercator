<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DemoDnsserversTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('dnsservers')->delete();

        \DB::table('dnsservers')->insert(array (
            0 =>
                array (
                    'id' => 1,
                    'name' => 'Primary DNS Server',
                    'description' => '<p>Serveur DNS principal de l\'hôpital</p>',
                    'address_ip' => '192.168.1.2',
                    'created_at' => now(),
                    'updated_at' => now(),
                    'deleted_at' => NULL,
                    'maturity' => rand(0, 5),
                ),
            1 =>
                array (
                    'id' => 2,
                    'name' => 'Secondary DNS Server',
                    'description' => '<p>Serveur DNS secondaire de l\'hôpital</p>',
                    'address_ip' => '192.168.1.3',
                    'created_at' => now(),
                    'updated_at' => now(),
                    'deleted_at' => NULL,
                    'maturity' => rand(0, 5),
                ),
        ));

    }
}