<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DemoSitesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('sites')->delete();

        \DB::table('sites')->insert(array (
            0 =>
                array (
                    'id' => 1,
                    'name' => 'Centre Hospitalier Autonome Tournaisien (CHAT)',
                    'description' => '<p>Le Centre Hospitalier Autonome Tournaisien (CHAT)</p>',
                    'created_at' => now(),
                    'updated_at' => now(),
                    'deleted_at' => NULL,
                    'maturity' => 5
                )
        ));


    }
}