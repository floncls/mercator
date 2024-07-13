<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DemoRoutersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('routers')->delete();

        \DB::table('routers')->insert(array (
            0 =>
                array (
                    'id' => 1,
                    'name' => 'Main Router',
                    'description' => '<p>Routeur principal gérant le trafic réseau de l\'hôpital</p>',
                    'rules' => 'Allow all internal traffic, Block external traffic except for specific ports',
                    'ip_addresses' => '192.168.1.1',
                    'created_at' => now(),
                    'updated_at' => now(),
                    'deleted_at' => NULL,
                    'maturity' => rand(0, 5),
                ),
        ));
    }
}