<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DemoPhysicalSwitchesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('physical_switches')->delete();

        $physicalSwitches = [];

        // 6 NetGear JGS524
        for ($i = 1; $i <= 6; $i++) {
            $physicalSwitches[] = [
                'id' => $i,
                'name' => "Switch NetGear JGS524 $i",
                'description' => '<p>Switch réseau pour la gestion des connexions LAN.</p>',
                'type' => 'NetGear JGS524',
                'site_id' => 1,
                'building_id' => 2, // Salle serveur
                'bay_id' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
                'maturity' => 4,
            ];
        }

        // 10 GS750E
        for ($i = 7; $i <= 16; $i++) {
            $physicalSwitches[] = [
                'id' => $i,
                'name' => "Switch GS750E " . ($i - 6),
                'description' => '<p>Switch PoE pour les périphériques réseau.</p>',
                'type' => 'NetGear GS750E',
                'site_id' => 1,
                'building_id' => 2,
                'bay_id' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
                'maturity' => 2,
            ];
        }

        foreach ($physicalSwitches as $switch) {
            \DB::table('physical_switches')->insert(array_merge($switch, [
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ]));
        }
    }
}
