<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DemoGatewaysTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('gateways')->delete();

        \DB::table('gateways')->insert(array (
            0 =>
                array (
                    'id' => 1,
                    'name' => 'Main Gateway',
                    'description' => '<p>Gateway principale pour la gestion du trafic réseau</p>',
                    'authentification' => 'Password',
                    'ip' => '192.168.1.1',
                    'created_at' => now(),
                    'updated_at' => now(),
                    'deleted_at' => NULL,
                    'maturity' => rand(0, 5),
                ),
        ));


    }
}