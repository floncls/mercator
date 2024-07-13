<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DemoPhysicalServersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('physical_servers')->delete();

        $servers = [
            [
                'name' => 'Server 1',
                'type' => 'Physical',
                'description' => 'Serveur principal pour la gestion des applications.',
                'configuration' => 'RHEL 9, 16 vCPU, 32GB RAM',
                'address_ip' => '192.168.1.10',
                'cpu' => '16',
                'memory' => '32GB',
                'disk' => '2TB',
                'disk_used' => '500GB',
                'operating_system' => 'RHEL 9',
                'install_date' => now(),
                'update_date' => now(),
                'site_id' => 1,
                'building_id' => 2, // Salle serveur
                'bay_id' => 1, // BAIE 101
                'cluster_id' => null,
                'responsible' => 'Margaret Hamilton',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
                'maturity' => 5,
            ],
            [
                'name' => 'Server 2',
                'type' => 'Physical',
                'description' => 'Serveur de virtualisation VMware.',
                'configuration' => 'Windows Server 2016, 8 vCPU, 16GB RAM',
                'address_ip' => '192.168.1.11',
                'cpu' => '8',
                'memory' => '16GB',
                'disk' => '1TB',
                'disk_used' => '200GB',
                'operating_system' => 'Windows Server 2016',
                'install_date' => now(),
                'update_date' => now(),
                'site_id' => 1,
                'building_id' => 2, // Salle serveur
                'bay_id' => 1, // BAIE 101
                'cluster_id' => null,
                'responsible' => 'Margaret Hamilton',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
                'maturity' => 5,
            ],
            [
                'name' => 'Server 3',
                'type' => 'Virtual',
                'description' => 'Serveur de gestion des patients.',
                'configuration' => 'Windows Server 2016, 4 vCPU, 8GB RAM',
                'address_ip' => '192.168.1.12',
                'cpu' => '4',
                'memory' => '8GB',
                'disk' => '500GB',
                'disk_used' => '150GB',
                'operating_system' => 'Windows Server 2016',
                'install_date' => now(),
                'update_date' => now(),
                'site_id' => 1,
                'building_id' => 2, // Salle serveur
                'bay_id' => 1, // BAIE 101
                'cluster_id' => null,
                'responsible' => 'Margaret Hamilton',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
                'maturity' => 4,
            ],
            [
                'name' => 'Server 4',
                'type' => 'Virtual',
                'description' => 'Serveur de sauvegarde.',
                'configuration' => 'Windows Server 2016, 4 vCPU, 8GB RAM',
                'address_ip' => '192.168.1.13',
                'cpu' => '4',
                'memory' => '8GB',
                'disk' => '500GB',
                'disk_used' => '100GB',
                'operating_system' => 'Windows Server 2016',
                'install_date' => now(),
                'update_date' => now(),
                'site_id' => 1,
                'building_id' => 2, // Salle serveur
                'bay_id' => 1, // BAIE 101
                'cluster_id' => null,
                'responsible' => 'Margaret Hamilton',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
                'maturity' => 4,
            ],
            [
                'name' => 'Server 5',
                'type' => 'Physical',
                'description' => 'Serveur Citrix pour la virtualisation des postes.',
                'configuration' => 'Windows Server 2016, 12 vCPU, 24GB RAM',
                'address_ip' => '192.168.1.14',
                'cpu' => '12',
                'memory' => '24GB',
                'disk' => '1TB',
                'disk_used' => '300GB',
                'operating_system' => 'Windows Server 2016',
                'install_date' => now(),
                'update_date' => now(),
                'site_id' => 1,
                'building_id' => 2, // Salle serveur
                'bay_id' => 1, // BAIE 101
                'cluster_id' => null,
                'responsible' => 'Margaret Hamilton',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
                'maturity' => 5,
            ],
        ];

        foreach ($servers as $index => $server) {
            \DB::table('physical_servers')->insert(array_merge($server, [
                'id' => $index + 1,
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ]));
        }
    }
}