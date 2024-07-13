<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DemoStorageDevicesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('storage_devices')->delete();

        $storageDevices = [
            [
                'id' => 1,
                'name' => 'NAS Synology Rackstation RX1216sas',
                'description' => '<p>Serveur de stockage avec 12 baies, utilisé pour le stockage des données médicales.</p>',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
                'site_id' => 1,
                'building_id' => 2, // Salle serveur
                'bay_id' => null,
                'physical_switch_id' => null,
                'vendor' => 'Synology',
                'product' => 'Rackstation',
                'version' => 'RX1216sas',
                'maturity' => 5,
            ],
            // Ajouter d'autres dispositifs de stockage si nécessaire
        ];

        foreach ($storageDevices as $device) {
            \DB::table('storage_devices')->insert(array_merge($device, [
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ]));
        }
    }
}