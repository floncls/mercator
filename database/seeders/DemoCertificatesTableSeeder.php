<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DemoCertificatesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('certificates')->delete();

        \DB::table('certificates')->insert(array (
            0 =>
                array (
                    'id' => 1,
                    'name' => 'CERT01',
                    'type' => 'DES3',
                    'description' => '<p>Certificat 01</p>',
                    'start_validity' => '2020-10-27',
                    'end_validity' => '2022-01-01',
                    'created_at' => '2021-07-14 10:28:47',
                    'updated_at' => '2022-02-08 16:25:10',
                    'deleted_at' => NULL,
                    'status' => 0,
                    'last_notification' => NULL,
                    'maturity' => rand(0, 5),
                ),
            1 =>
                array (
                    'id' => 2,
                    'name' => 'CERT02',
                    'type' => 'AES 256',
                    'description' => '<p>Certificat numéro 02</p>',
                    'start_validity' => '2021-07-14',
                    'end_validity' => '2021-07-17',
                    'created_at' => '2021-07-14 10:33:33',
                    'updated_at' => '2021-07-14 16:14:12',
                    'deleted_at' => NULL,
                    'status' => NULL,
                    'last_notification' => NULL,
                    'maturity' => rand(0, 5),
                ),
            2 =>
                array (
                    'id' => 3,
                    'name' => 'CERT03',
                    'type' => 'AES 256',
                    'description' => '<p>Certificat numéro 3</p>',
                    'start_validity' => '2021-09-23',
                    'end_validity' => '2021-11-11',
                    'created_at' => '2021-07-14 12:35:41',
                    'updated_at' => '2021-09-23 16:11:34',
                    'deleted_at' => NULL,
                    'status' => NULL,
                    'last_notification' => NULL,
                    'maturity' => rand(0, 5),
                ),
            3 =>
                array (
                    'id' => 4,
                    'name' => 'CERT04',
                    'type' => 'DES3',
                    'description' => '<p>Certificat interne DES 3</p>',
                    'start_validity' => NULL,
                    'end_validity' => NULL,
                    'created_at' => '2021-07-14 12:40:15',
                    'updated_at' => '2021-07-14 12:40:15',
                    'deleted_at' => NULL,
                    'status' => NULL,
                    'last_notification' => NULL,
                    'maturity' => rand(0, 5),
                ),
            4 =>
                array (
                    'id' => 5,
                    'name' => 'CERT05',
                    'type' => 'RSA 128',
                    'description' => '<p>Clé 05 avec RSA</p>',
                    'start_validity' => NULL,
                    'end_validity' => NULL,
                    'created_at' => '2021-07-14 12:45:00',
                    'updated_at' => '2021-07-14 12:45:00',
                    'deleted_at' => NULL,
                    'status' => NULL,
                    'last_notification' => NULL,
                    'maturity' => rand(0, 5),
                ),
            5 =>
                array (
                    'id' => 6,
                    'name' => 'CERT07',
                    'type' => 'DES3',
                    'description' => '<p>cert 7</p>',
                    'start_validity' => NULL,
                    'end_validity' => NULL,
                    'created_at' => '2021-07-14 14:44:12',
                    'updated_at' => '2021-07-14 14:44:12',
                    'deleted_at' => NULL,
                    'status' => NULL,
                    'last_notification' => NULL,
                    'maturity' => rand(0, 5),
                ),
            6 =>
                array (
                    'id' => 7,
                    'name' => 'CERT08',
                    'type' => 'DES3',
                    'description' => '<p>Master cert 08</p>',
                    'start_validity' => '2021-06-15',
                    'end_validity' => '2022-08-11',
                    'created_at' => '2021-08-11 20:33:42',
                    'updated_at' => '2021-08-11 20:33:42',
                    'deleted_at' => NULL,
                    'status' => NULL,
                    'last_notification' => NULL,
                    'maturity' => rand(0, 5),
                ),
            7 =>
                array (
                    'id' => 8,
                    'name' => 'CERT09',
                    'type' => 'DES3',
                    'description' => '<p>Test cert nine</p>',
                    'start_validity' => '2021-09-25',
                    'end_validity' => '2021-09-26',
                    'created_at' => '2021-09-23 16:17:20',
                    'updated_at' => '2021-09-23 16:17:20',
                    'deleted_at' => NULL,
                    'status' => NULL,
                    'last_notification' => NULL,
                    'maturity' => rand(0, 5),
                ),
        ));



    }
}