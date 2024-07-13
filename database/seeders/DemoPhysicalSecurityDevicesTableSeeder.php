<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DemoPhysicalSecurityDevicesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('physical_security_devices')->delete();
        
        \DB::table('physical_security_devices')->insert(array (
            0 => array (
                'id' => 1,
                'name' => 'Watchguard Firewall',
                'type' => 'Firewall',
                'description' => '<p>Watchguard XTM8 pour la sécurité du réseau</p>',
                'site_id' => 1,
                'building_id' => 1,
                'bay_id' => NULL,
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => NULL,
                'maturity' => rand(0, 5),
            ),
        ));
        
        
    }
}