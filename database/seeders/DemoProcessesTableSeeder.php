<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DemoProcessesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('processes')->delete();

        \DB::table('processes')->insert(array (
            0 =>
                array (
                    'id' => 1,
                    'name' => 'Admission des patients',
                    'description' => '<p>Processus d\'enregistrement des nouveaux patients dans le système.</p>',
                    'owner' => 'Service d\'Admission',
                    'security_need_c' => 3,
                    'in_out' => '<ul><li>Informations patient</li><li>Dossier médical</li></ul>',
                    'created_at' => now(),
                    'updated_at' => now(),
                    'deleted_at' => NULL,
                    'macroprocess_id' => 1,
                    'security_need_i' => 2,
                    'security_need_a' => 3,
                    'security_need_t' => 1,
                    'maturity' => rand(0, 5),
                ),
            1 =>
                array (
                    'id' => 2,
                    'name' => 'Gestion des consultations',
                    'description' => '<p>Processus de prise de rendez-vous et de gestion des consultations.</p>',
                    'owner' => 'Service Médical',
                    'security_need_c' => 3,
                    'in_out' => '<ul><li>Rendez-vous</li><li>Dossiers médicaux</li></ul>',
                    'created_at' => now(),
                    'updated_at' => now(),
                    'deleted_at' => NULL,
                    'macroprocess_id' => 1,
                    'security_need_i' => 2,
                    'security_need_a' => 3,
                    'security_need_t' => 1,
                    'maturity' => rand(0, 5),
                ),
            2 =>
                array (
                    'id' => 3,
                    'name' => 'Traitement et soins',
                    'description' => '<p>Administration des soins et des traitements aux patients.</p>',
                    'owner' => 'Équipe Médicale',
                    'security_need_c' => 4,
                    'in_out' => '<ul><li>Médicaments</li><li>Rapports médicaux</li></ul>',
                    'created_at' => now(),
                    'updated_at' => now(),
                    'deleted_at' => NULL,
                    'macroprocess_id' => 2,
                    'security_need_i' => 3,
                    'security_need_a' => 4,
                    'security_need_t' => 2,
                    'maturity' => rand(0, 5),
                ),
            3 =>
                array (
                    'id' => 4,
                    'name' => 'Gestion des urgences',
                    'description' => '<p>Processus de triage et de traitement des patients en urgence.</p>',
                    'owner' => 'Service des Urgences',
                    'security_need_c' => 5,
                    'in_out' => '<ul><li>Cas d\'urgence</li><li>Rapports d\'intervention</li></ul>',
                    'created_at' => now(),
                    'updated_at' => now(),
                    'deleted_at' => NULL,
                    'macroprocess_id' => 2,
                    'security_need_i' => 3,
                    'security_need_a' => 4,
                    'security_need_t' => 2,
                    'maturity' => rand(0, 5),
                ),
            4 =>
                array (
                    'id' => 5,
                    'name' => 'Gestion des ressources humaines',
                    'description' => '<p>Processus de recrutement et de gestion du personnel.</p>',
                    'owner' => 'Ressources Humaines',
                    'security_need_c' => 3,
                    'in_out' => '<ul><li>Dossiers du personnel</li><li>Contrats</li></ul>',
                    'created_at' => now(),
                    'updated_at' => now(),
                    'deleted_at' => NULL,
                    'macroprocess_id' => 3,
                    'security_need_i' => 2,
                    'security_need_a' => 3,
                    'security_need_t' => 1,
                    'maturity' => rand(0, 5),
                ),
            5 =>
                array (
                    'id' => 6,
                    'name' => 'Gestion des finances',
                    'description' => '<p>Processus de facturation et de gestion des paiements.</p>',
                    'owner' => 'Service Financier',
                    'security_need_c' => 4,
                    'in_out' => '<ul><li>Factures</li><li>Paiements</li></ul>',
                    'created_at' => now(),
                    'updated_at' => now(),
                    'deleted_at' => NULL,
                    'macroprocess_id' => 3,
                    'security_need_i' => 3,
                    'security_need_a' => 4,
                    'security_need_t' => 2,
                    'maturity' => rand(0, 5),
                ),
            6 =>
                array (
                    'id' => 7,
                    'name' => 'Approvisionnement',
                    'description' => '<p>Processus de commande et gestion des stocks de fournitures.</p>',
                    'owner' => 'Service Logistique',
                    'security_need_c' => 3,
                    'in_out' => '<ul><li>Commandes</li><li>Inventaires</li></ul>',
                    'created_at' => now(),
                    'updated_at' => now(),
                    'deleted_at' => NULL,
                    'macroprocess_id' => 4,
                    'security_need_i' => 2,
                    'security_need_a' => 3,
                    'security_need_t' => 1,
                    'maturity' => rand(0, 5),
                ),
            7 =>
                array (
                    'id' => 8,
                    'name' => 'Gestion des opérations',
                    'description' => '<p>Planification et exécution des interventions chirurgicales.</p>',
                    'owner' => 'Service Chirurgical',
                    'security_need_c' => 4,
                    'in_out' => '<ul><li>Interventions</li><li>Rapports chirurgicaux</li></ul>',
                    'created_at' => now(),
                    'updated_at' => now(),
                    'deleted_at' => NULL,
                    'macroprocess_id' => 4,
                    'security_need_i' => 3,
                    'security_need_a' => 4,
                    'security_need_t' => 2,
                    'maturity' => rand(0, 5),
                ),
            8 =>
                array (
                    'id' => 9,
                    'name' => 'Suivi de la qualité',
                    'description' => '<p>Évaluation et amélioration des services hospitaliers.</p>',
                    'owner' => 'Qualité et Risques',
                    'security_need_c' => 2,
                    'in_out' => '<ul><li>Indicateurs de performance</li><li>Rapports d\'audit</li></ul>',
                    'created_at' => now(),
                    'updated_at' => now(),
                    'deleted_at' => NULL,
                    'macroprocess_id' => 5,
                    'security_need_i' => 2,
                    'security_need_a' => 3,
                    'security_need_t' => 1,
                    'maturity' => rand(0, 5),
                ),
            9 =>
                array (
                    'id' => 10,
                    'name' => 'Recherche et développement',
                    'description' => '<p>Gestion des projets de recherche clinique.</p>',
                    'owner' => 'Service Recherche',
                    'security_need_c' => 3,
                    'in_out' => '<ul><li>Projets de recherche</li><li>Essais cliniques</li></ul>',
                    'created_at' => now(),
                    'updated_at' => now(),
                    'deleted_at' => NULL,
                    'macroprocess_id' => 6,
                    'security_need_i' => 3,
                    'security_need_a' => 4,
                    'security_need_t' => 2,
                    'maturity' => rand(0, 5),
                ),
        ));
    }
}
