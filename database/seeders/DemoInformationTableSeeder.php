<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DemoInformationTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('information')->delete();

        \DB::table('information')->insert(array (
            0 =>
                array (
                    'id' => 1,
                    'name' => 'Dossiers médicaux des patients',
                    'description' => '<p>Contient les historiques médicaux, les diagnostics, les traitements et les résultats d\'examens des patients.</p>',
                    'owner' => 'Service des archives médicales',
                    'administrator' => 'Service informatique',
                    'storage' => 'interne',
                    'security_need_c' => 4,
                    'sensitivity' => 'Donnée à caractère personnel de santé',
                    'constraints' => '<p>Conformité aux réglementations sur la protection des données de santé (ex: GDPR, HIPAA).</p>',
                    'created_at' => now(),
                    'updated_at' => now(),
                    'deleted_at' => NULL,
                    'security_need_i' => 5,
                    'security_need_a' => 4,
                    'security_need_t' => 4,
                    'retention' => '10 ans après la dernière consultation',
                    'maturity' => rand(0, 5),
                ),
            1 =>
                array (
                    'id' => 2,
                    'name' => 'Données personnelles des patients',
                    'description' => '<p>Comprend les informations d\'identification, de contact et les informations administratives des patients.</p>',
                    'owner' => 'Service des admissions',
                    'administrator' => 'Service informatique',
                    'storage' => 'interne',
                    'security_need_c' => 3,
                    'sensitivity' => 'Donnée à caractère personnel',
                    'constraints' => '<p>Conformité aux réglementations sur la protection des données personnelles (ex: GDPR).</p>',
                    'created_at' => now(),
                    'updated_at' => now(),
                    'deleted_at' => NULL,
                    'security_need_i' => 4,
                    'security_need_a' => 3,
                    'security_need_t' => 3,
                    'retention' => '5 ans après la dernière interaction',
                    'maturity' => rand(0, 5),
                ),
            2 =>
                array (
                    'id' => 3,
                    'name' => 'Résultats d\'examens',
                    'description' => '<p>Comprend les résultats d\'examens de laboratoire, d\'imagerie et autres tests médicaux effectués sur les patients.</p>',
                    'owner' => 'Service médical',
                    'administrator' => 'Service informatique',
                    'storage' => 'interne',
                    'security_need_c' => 4,
                    'sensitivity' => 'Donnée à caractère personnel de santé',
                    'constraints' => '<p>Conformité aux réglementations sur la protection des données de santé (ex: HIPAA).</p>',
                    'created_at' => now(),
                    'updated_at' => now(),
                    'deleted_at' => NULL,
                    'security_need_i' => 5,
                    'security_need_a' => 4,
                    'security_need_t' => 4,
                    'retention' => 'Période de rétention spécifique selon le type d\'examen',
                    'maturity' => rand(0, 5),
                ),
            3 =>
                array (
                    'id' => 4,
                    'name' => 'Budgets des départements',
                    'description' => '<p>Comprend les allocations budgétaires et les dépenses des différents départements de l\'hôpital.</p>',
                    'owner' => 'Service financier',
                    'administrator' => 'Service administratif',
                    'storage' => 'interne',
                    'security_need_c' => 3,
                    'sensitivity' => 'Donnée financière confidentielle',
                    'constraints' => '<p>Conformité aux réglementations financières et comptables internes.</p>',
                    'created_at' => now(),
                    'updated_at' => now(),
                    'deleted_at' => NULL,
                    'security_need_i' => 4,
                    'security_need_a' => 3,
                    'security_need_t' => 3,
                    'retention' => '10 ans après la clôture de l\'exercice fiscal',
                    'maturity' => rand(0, 5),
                ),
            4 =>
                array (
                    'id' => 5,
                    'name' => 'Gestion des stocks de médicaments',
                    'description' => '<p>Comprend les données sur l\'inventaire, l\'approvisionnement et la distribution des médicaments dans l\'hôpital.</p>',
                    'owner' => 'Service de pharmacie',
                    'administrator' => 'Service informatique',
                    'storage' => 'interne',
                    'security_need_c' => 3,
                    'sensitivity' => 'Donnée médicale confidentielle',
                    'constraints' => '<p>Conformité aux réglementations pharmaceutiques et de sécurité.</p>',
                    'created_at' => now(),
                    'updated_at' => now(),
                    'deleted_at' => NULL,
                    'security_need_i' => 4,
                    'security_need_a' => 3,
                    'security_need_t' => 3,
                    'retention' => '3 ans après la date de péremption ou l\'utilisation',
                    'maturity' => rand(0, 5),
                ),
        ));



    }
}