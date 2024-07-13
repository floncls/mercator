<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DemoRelationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('relations')->delete();

        \DB::table('relations')->insert(array (
            0 =>
                array (
                    'id' => 1,
                    'importance' => 5,
                    'name' => 'Fourniture de médicaments',
                    'type' => 'Fourniture de service',
                    'description' => '<p>Relation entre l’hôpital et la pharmacie centrale pour la fourniture de médicaments.</p>',
                    'created_at' => now(),
                    'updated_at' => now(),
                    'deleted_at' => NULL,
                    'source_id' => 3,  // Pharmacie Centrale
                    'destination_id' => 1,  // Hôpital
                    'maturity' => rand(0, 5),
                ),
            1 =>
                array (
                    'id' => 2,
                    'importance' => 4,
                    'name' => 'Partenaire en recherche clinique',
                    'type' => 'Collaboration',
                    'description' => '<p>Partenariat entre l’hôpital et le centre de recherche clinique pour les essais médicaux.</p>',
                    'created_at' => now(),
                    'updated_at' => now(),
                    'deleted_at' => NULL,
                    'source_id' => 16,  // Centre de Recherche Clinique
                    'destination_id' => 1,  // Hôpital
                    'maturity' => rand(0, 5),
                ),
            2 =>
                array (
                    'id' => 3,
                    'importance' => 5,
                    'name' => 'Gestion des déchets médicaux',
                    'type' => 'Fourniture de service',
                    'description' => '<p>Relation entre l’hôpital et la société de gestion des déchets médicaux pour l’évacuation et le traitement des déchets.</p>',
                    'created_at' => now(),
                    'updated_at' => now(),
                    'deleted_at' => NULL,
                    'source_id' => 5,  // Société de Gestion des Déchets Médicaux
                    'destination_id' => 1,  // Hôpital
                    'maturity' => rand(0, 5),
                ),
            3 =>
                array (
                    'id' => 4,
                    'importance' => 3,
                    'name' => 'Maintenance des équipements informatiques',
                    'type' => 'Service de maintenance',
                    'description' => '<p>Relation entre l’hôpital et l’entreprise de maintenance informatique pour le support technique et la réparation des équipements.</p>',
                    'created_at' => now(),
                    'updated_at' => now(),
                    'deleted_at' => NULL,
                    'source_id' => 7,  // Entreprise de Maintenance Informatique
                    'destination_id' => 1,  // Hôpital
                    'maturity' => rand(0, 5),
                ),
            4 =>
                array (
                    'id' => 5,
                    'importance' => 4,
                    'name' => 'Consultation en sécurité',
                    'type' => 'Consultation',
                    'description' => '<p>Consultation externe pour les aspects de sécurité des systèmes d’information.</p>',
                    'created_at' => now(),
                    'updated_at' => now(),
                    'deleted_at' => NULL,
                    'source_id' => 6,  // Consultant en Sécurité
                    'destination_id' => 1,  // Hôpital
                    'maturity' => rand(0, 5),
                ),
            5 =>
                array (
                    'id' => 6,
                    'importance' => 3,
                    'name' => 'Formation médicale continue',
                    'type' => 'Formation',
                    'description' => '<p>Relation entre l’hôpital et l’organisme de formation médicale pour les programmes de formation continue des professionnels de santé.</p>',
                    'created_at' => now(),
                    'updated_at' => now(),
                    'deleted_at' => NULL,
                    'source_id' => 8,  // Organisme de Formation Médicale
                    'destination_id' => 1,  // Hôpital
                    'maturity' => rand(0, 5),
                ),
            6 =>
                array (
                    'id' => 7,
                    'importance' => 4,
                    'name' => 'Audit de sécurité',
                    'type' => 'Audit',
                    'description' => '<p>Relation entre l’hôpital et le service d’audit externe pour la vérification des pratiques de sécurité.</p>',
                    'created_at' => now(),
                    'updated_at' => now(),
                    'deleted_at' => NULL,
                    'source_id' => 18,  // Service d’Audit Externe
                    'destination_id' => 1,  // Hôpital
                    'maturity' => rand(0, 5),
                ),
            7 =>
                array (
                    'id' => 8,
                    'importance' => 3,
                    'name' => 'Fourniture de services cloud',
                    'type' => 'Fourniture de service',
                    'description' => '<p>Relation entre l’hôpital et le fournisseur de services cloud pour le stockage et les applications.</p>',
                    'created_at' => now(),
                    'updated_at' => now(),
                    'deleted_at' => NULL,
                    'source_id' => 12,  // Fournisseur de Services Cloud
                    'destination_id' => 1,  // Hôpital
                    'maturity' => rand(0, 5),
                ),
            8 =>
                array (
                    'id' => 9,
                    'importance' => 2,
                    'name' => 'Services d’urgence locaux',
                    'type' => 'Service',
                    'description' => '<p>Relation entre l’hôpital et les services d’urgence locaux pour les interventions rapides.</p>',
                    'created_at' => now(),
                    'updated_at' => now(),
                    'deleted_at' => NULL,
                    'source_id' => 10,  // Services d’Urgence Locaux
                    'destination_id' => 1,  // Hôpital
                    'maturity' => rand(0, 5),
                ),
            9 =>
                array (
                    'id' => 10,
                    'importance' => 4,
                    'name' => 'Télécommunications',
                    'type' => 'Fourniture de service',
                    'description' => '<p>Relation entre l’hôpital et la société de télécommunications pour la gestion des communications internes et externes.</p>',
                    'created_at' => now(),
                    'updated_at' => now(),
                    'deleted_at' => NULL,
                    'source_id' => 15,  // Société de Télécommunications
                    'destination_id' => 1,  // Hôpital
                    'maturity' => rand(0, 5),
                ),
            10 =>
                array (
                    'id' => 11,
                    'importance' => 3,
                    'name' => 'Gestion des risques',
                    'type' => 'Consultation',
                    'description' => '<p>Relation entre l’hôpital et la société de gestion des risques pour les conseils en matière de risques et de conformité.</p>',
                    'created_at' => now(),
                    'updated_at' => now(),
                    'deleted_at' => NULL,
                    'source_id' => 19,  // Société de Gestion des Risques
                    'destination_id' => 1,  // Hôpital
                    'maturity' => rand(0, 5),
                ),
            11 =>
                array (
                    'id' => 12,
                    'importance' => 2,
                    'name' => 'Association des Médecins',
                    'type' => 'Association',
                    'description' => '<p>Relation entre l’hôpital et l’association des médecins pour les discussions professionnelles et les partenariats.</p>',
                    'created_at' => now(),
                    'updated_at' => now(),
                    'deleted_at' => NULL,
                    'source_id' => 20,  // Association des Médecins
                    'destination_id' => 1,  // Hôpital
                    'maturity' => rand(0, 5),
                ),
        ));


    }
}