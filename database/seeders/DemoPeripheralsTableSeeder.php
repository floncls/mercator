<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DemoPeripheralsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('peripherals')->delete();

        $peripherals = [
            [
                'id' => 1,
                'name' => 'PER_01',
                'type' => 'IBM 3400',
                'description' => '<p>Périphérique important pour l\'impression.</p>',
                'responsible' => 'Marcel',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
                'site_id' => 1,
                'building_id' => 2, // Salle serveur
                'bay_id' => null,
                'vendor' => 'IBM',
                'product' => '3400',
                'version' => '1.0',
                'maturity' => 2,
            ],
            [
                'id' => 2,
                'name' => 'HP LaserJet Pro 4001dn',
                'type' => 'Imprimante',
                'description' => '<p>Imprimante laser pour documents administratifs.</p>',
                'responsible' => 'Équipe IT',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
                'site_id' => 1,
                'building_id' => 2,
                'bay_id' => null,
                'vendor' => 'HP',
                'product' => 'LaserJet Pro 4001dn',
                'version' => '1.0',
                'maturity' => 1,
            ],
            [
                'id' => 3,
                'name' => 'HP ColorLaserJet Pro M255dw',
                'type' => 'Imprimante',
                'description' => '<p>Imprimante couleur pour documents variés.</p>',
                'responsible' => 'Équipe IT',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
                'site_id' => 1,
                'building_id' => 2,
                'bay_id' => null,
                'vendor' => 'HP',
                'product' => 'ColorLaserJet Pro M255dw',
                'version' => '1.0',
                'maturity' => NULL,
            ],
            // Ajouter d'autres périphériques si nécessaire
        ];

        foreach ($peripherals as $peripheral) {
            \DB::table('peripherals')->insert(array_merge($peripheral, [
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ]));
        }
    }
}