<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DemoPhonesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('phones')->delete();

        $phones = [
            [
                'id' => 1,
                'name' => 'Phone 01',
                'description' => '<p>Téléphone de test</p>',
                'type' => 'MOTOROLA 3110',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
                'site_id' => 1,
                'building_id' => 1, // Administration
                'physical_switch_id' => null,
                'vendor' => 'Motorola',
                'product' => '3110',
                'version' => '1.0',
                'maturity' => 1,
            ],
            [
                'id' => 2,
                'name' => 'Phone 02',
                'description' => '<p>Téléphone fixe de bureau</p>',
                'type' => 'Cisco 8841',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
                'site_id' => 1,
                'building_id' => 1,
                'physical_switch_id' => null,
                'vendor' => 'Cisco',
                'product' => '8841',
                'version' => '1.0',
                'maturity' => 5,
            ],
            [
                'id' => 3,
                'name' => 'Phone 03',
                'description' => '<p>Téléphone mobile pour le personnel</p>',
                'type' => 'Samsung Galaxy S21',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
                'site_id' => 1,
                'building_id' => 1,
                'physical_switch_id' => null,
                'vendor' => 'Samsung',
                'product' => 'Galaxy S21',
                'version' => '1.0',
                'maturity' => NULL,
            ],
            // Ajouter d'autres téléphones si nécessaire
        ];

        foreach ($phones as $phone) {
            \DB::table('phones')->insert(array_merge($phone, [
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ]));
        }
    }
}