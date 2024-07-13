<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DemoPhysicalRoutersTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('physical_routers')->delete();

        $physicalRouters = [
            [
                'id' => 1,
                'name' => 'R1',
                'description' => '<p>Routeur principal</p>',
                'type' => 'Fortinet',
                'site_id' => 1,
                'building_id' => 1, // Sous-sol
                'bay_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
                'vendor' => null,
                'product' => null,
                'version' => null,
                'maturity' => 4,
            ],
            // Ajouter d'autres routeurs si nécessaire
        ];

        foreach ($physicalRouters as $router) {
            \DB::table('physical_routers')->insert(array_merge($router, [
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ]));
        }
    }
}
