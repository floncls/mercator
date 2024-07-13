<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DemoWorkstationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('workstations')->delete();

        $workstations = [];

        // Création des 10 PC classiques
        for ($i = 1; $i <= 10; $i++) {
            $workstations[] = [
                'id' => $i,
                'name' => 'PC' . $i,
                'description' => '<p>Station de travail pour le personnel.</p>',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
                'site_id' => 1,
                'building_id' => 1, // Administration
                'physical_switch_id' => null,
                'type' => 'Dell OptiPlex 7080',
                'operating_system' => 'Windows 10',
                'address_ip' => '192.168.1.' . (20 + $i),
                'cpu' => 'Intel i5',
                'memory' => '16GB',
                'disk' => '512GB SSD',
                'vendor' => 'Dell',
                'product' => 'OptiPlex',
                'version' => '7080',
                'maturity' => 5,
            ];
        }

        // Création des 75 thin clients
        for ($i = 11; $i <= 85; $i++) {
            $workstations[] = [
                'id' => $i,
                'name' => 'Thin Client ' . ($i - 10),
                'description' => '<p>Thin client pour accès distant aux applications.</p>',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
                'site_id' => 1,
                'building_id' => 1, // Administration
                'physical_switch_id' => null,
                'type' => 'ThinClient 420',
                'operating_system' => 'ThinOS',
                'address_ip' => '192.168.1.' . (30 + ($i - 10)),
                'cpu' => null,
                'memory' => null,
                'disk' => null,
                'vendor' => 'Dell',
                'product' => 'ThinClient',
                'version' => '420',
                'maturity' => 4,
            ];
        }

        foreach ($workstations as $workstation) {
            \DB::table('workstations')->insert(array_merge($workstation, [
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ]));
        }
    }
}
