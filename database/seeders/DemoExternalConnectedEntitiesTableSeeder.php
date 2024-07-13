<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DemoExternalConnectedEntitiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('external_connected_entities')->delete();

        \DB::table('external_connected_entities')->insert(array (
            0 =>
                array (
                    'id' => 1,
                    'name' => 'External Laboratory',
                    'type' => 'Lab',
                    'entity_id' => 1,
                    'contacts' => 'lab.contact@example.com',
                    'description' => '<p>Laboratoire externe pour analyses et tests médicaux</p>',
                    'network_id' => 1,
                    'src' => '192.168.2.0/24',
                    'dest' => '192.168.1.0/24',
                    'created_at' => now(),
                    'updated_at' => now(),
                    'deleted_at' => NULL,
                    'maturity' => rand(0, 5),
                ),
            1 =>
                array (
                    'id' => 2,
                    'name' => 'Medical Supplier',
                    'type' => 'Supplier',
                    'entity_id' => 2,
                    'contacts' => 'supplier.contact@example.com',
                    'description' => '<p>Fournisseur de matériel médical</p>',
                    'network_id' => 1,
                    'src' => '192.168.3.0/24',
                    'dest' => '192.168.1.0/24',
                    'created_at' => now(),
                    'updated_at' => now(),
                    'deleted_at' => NULL,
                    'maturity' => rand(0, 5),
                ),
        ));
    }
}