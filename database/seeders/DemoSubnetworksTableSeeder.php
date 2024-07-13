<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DemoSubnetworksTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('subnetworks')->delete();

        \DB::table('subnetworks')->insert(array (
            0 =>
                array (
                    'id' => 1,
                    'name' => 'Subnet 1',
                    'description' => '<p>Subnet pour le département administratif</p>',
                    'address' => '192.168.1.0/24',
                    'default_gateway' => '192.168.1.1',
                    'ip_allocation_type' => 'DHCP',
                    'vlan_id' => 10,
                    'zone' => 'Internal',
                    'dmz' => false,
                    'wifi' => false,
                    'responsible_exp' => 'IT Department',
                    'gateway_id' => 1,
                    'network_id' => 1,
                    'created_at' => now(),
                    'updated_at' => now(),
                    'deleted_at' => NULL,
                    'maturity' => rand(0, 5),
                ),
            1 =>
                array (
                    'id' => 2,
                    'name' => 'Subnet 2',
                    'description' => '<p>Subnet pour le département médical</p>',
                    'address' => '192.168.2.0/24',
                    'default_gateway' => '192.168.2.1',
                    'ip_allocation_type' => 'Static',
                    'vlan_id' => 20,
                    'zone' => 'Internal',
                    'dmz' => false,
                    'wifi' => true,
                    'responsible_exp' => 'IT Department',
                    'gateway_id' => 1,
                    'network_id' => 1,
                    'created_at' => now(),
                    'updated_at' => now(),
                    'deleted_at' => NULL,
                    'maturity' => rand(0, 5),
                ),
        ));
    }
}