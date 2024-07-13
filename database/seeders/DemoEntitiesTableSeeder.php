<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DemoEntitiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('entities')->delete();

        \DB::table('entities')->insert(array (
            0 =>
                array (
                    'id' => 1,
                    'name' => 'Centre de Santé Régional',
                    'description' => '<p>Centre de santé régional offrant des services médicaux divers.</p>',
                    'security_level' => 4,
                    'contact_point' => 'contact@centresanteregional.com',
                    'is_external' => 1,
                    'entity_type' => 'Santé',
                    'parent_entity_id' => NULL,
                    'maturity' => rand(0, 5),
                ),
            1 =>
                array (
                    'id' => 2,
                    'name' => 'Laboratoire de Biologie',
                    'description' => '<p>Laboratoire externe pour les analyses biologiques.</p>',
                    'security_level' => 3,
                    'contact_point' => 'contact@labbiologie.com',
                    'is_external' => 1,
                    'entity_type' => 'Laboratoire',
                    'parent_entity_id' => NULL,
                    'maturity' => rand(0, 5),
                ),
            2 =>
                array (
                    'id' => 3,
                    'name' => 'Pharmacie Centrale',
                    'description' => '<p>Pharmacie responsable de la fourniture de médicaments à l’hôpital.</p>',
                    'security_level' => 4,
                    'contact_point' => 'pharmacie@centrale.com',
                    'is_external' => 1,
                    'entity_type' => 'Pharmacie',
                    'parent_entity_id' => NULL,
                    'maturity' => rand(0, 5),
                ),
            3 =>
                array (
                    'id' => 4,
                    'name' => 'Fournisseur d’Équipements Médicaux',
                    'description' => '<p>Entreprise fournissant des équipements médicaux.</p>',
                    'security_level' => 3,
                    'contact_point' => 'info@equipementsmedicaux.com',
                    'is_external' => 1,
                    'entity_type' => 'Fournisseur',
                    'parent_entity_id' => NULL,
                    'maturity' => rand(0, 5),
                ),
            4 =>
                array (
                    'id' => 5,
                    'name' => 'Société de Gestion des Déchets Médicaux',
                    'description' => '<p>Société spécialisée dans la gestion des déchets médicaux.</p>',
                    'security_level' => 5,
                    'contact_point' => 'contact@gestiondechetsmedicaux.com',
                    'is_external' => 1,
                    'entity_type' => 'Gestion des Déchets',
                    'parent_entity_id' => NULL,
                    'maturity' => rand(0, 5),
                ),
            5 =>
                array (
                    'id' => 6,
                    'name' => 'Consultant en Sécurité',
                    'description' => '<p>Consultant externe pour la sécurité des systèmes d’information.</p>',
                    'security_level' => 4,
                    'contact_point' => 'consultant@securite.com',
                    'is_external' => 1,
                    'entity_type' => 'Consultant',
                    'parent_entity_id' => NULL,
                    'maturity' => rand(0, 5),
                ),
            6 =>
                array (
                    'id' => 7,
                    'name' => 'Entreprise de Maintenance Informatique',
                    'description' => '<p>Entreprise chargée de la maintenance des systèmes informatiques.</p>',
                    'security_level' => 3,
                    'contact_point' => 'maintenance@informatique.com',
                    'is_external' => 1,
                    'entity_type' => 'Maintenance',
                    'parent_entity_id' => NULL,
                    'maturity' => rand(0, 5),
                ),
            7 =>
                array (
                    'id' => 8,
                    'name' => 'Organisme de Formation Médicale',
                    'description' => '<p>Organisme fournissant des formations continues aux professionnels de santé.</p>',
                    'security_level' => 2,
                    'contact_point' => 'formation@medicale.com',
                    'is_external' => 1,
                    'entity_type' => 'Formation',
                    'parent_entity_id' => NULL,
                    'maturity' => rand(0, 5),
                ),
            8 =>
                array (
                    'id' => 9,
                    'name' => 'Bureau de Coordination des Transports',
                    'description' => '<p>Bureau pour la coordination des transports des patients.</p>',
                    'security_level' => 3,
                    'contact_point' => 'transports@coordination.com',
                    'is_external' => 1,
                    'entity_type' => 'Coordination',
                    'parent_entity_id' => NULL,
                    'maturity' => rand(0, 5),
                ),
            9 =>
                array (
                    'id' => 10,
                    'name' => 'Services d’Urgence Locaux',
                    'description' => '<p>Services d’urgence locaux pour les soins immédiats.</p>',
                    'security_level' => 5,
                    'contact_point' => 'urgence@locaux.com',
                    'is_external' => 1,
                    'entity_type' => 'Urgence',
                    'parent_entity_id' => NULL,
                    'maturity' => rand(0, 5),
                ),
            10 =>
                array (
                    'id' => 11,
                    'name' => 'Association des Patients',
                    'description' => '<p>Association représentant les intérêts des patients.</p>',
                    'security_level' => 2,
                    'contact_point' => 'contact@associationpatients.com',
                    'is_external' => 1,
                    'entity_type' => 'Association',
                    'parent_entity_id' => NULL,
                    'maturity' => rand(0, 5),
                ),
            11 =>
                array (
                    'id' => 12,
                    'name' => 'Fournisseur de Services Cloud',
                    'description' => '<p>Fournisseur de services cloud pour le stockage et les applications.</p>',
                    'security_level' => 4,
                    'contact_point' => 'support@cloudservices.com',
                    'is_external' => 1,
                    'entity_type' => 'Fournisseur de Cloud',
                    'parent_entity_id' => NULL,
                    'maturity' => rand(0, 5),
                ),
            12 =>
                array (
                    'id' => 13,
                    'name' => 'Agence de Sécurité Physique',
                    'description' => '<p>Agence assurant la sécurité physique des locaux de l’hôpital.</p>',
                    'security_level' => 5,
                    'contact_point' => 'contact@securitephysique.com',
                    'is_external' => 1,
                    'entity_type' => 'Sécurité Physique',
                    'parent_entity_id' => NULL,
                    'maturity' => rand(0, 5),
                ),
            13 =>
                array (
                    'id' => 14,
                    'name' => 'Organisme de Certification',
                    'description' => '<p>Organisme responsable des certifications des pratiques et des systèmes.</p>',
                    'security_level' => 4,
                    'contact_point' => 'certifications@organisme.com',
                    'is_external' => 1,
                    'entity_type' => 'Certification',
                    'parent_entity_id' => NULL,
                    'maturity' => rand(0, 5),
                ),
            14 =>
                array (
                    'id' => 15,
                    'name' => 'Société de Télécommunications',
                    'description' => '<p>Société fournissant des services de télécommunications.</p>',
                    'security_level' => 3,
                    'contact_point' => 'support@telecom.com',
                    'is_external' => 1,
                    'entity_type' => 'Télécommunications',
                    'parent_entity_id' => NULL,
                    'maturity' => rand(0, 5),
                ),
            15 =>
                array (
                    'id' => 16,
                    'name' => 'Centre de Recherche Clinique',
                    'description' => '<p>Centre dédié à la recherche clinique et essais médicaux.</p>',
                    'security_level' => 3,
                    'contact_point' => 'contact@rechercheclinique.com',
                    'is_external' => 1,
                    'entity_type' => 'Recherche',
                    'parent_entity_id' => NULL,
                    'maturity' => rand(0, 5),
                ),
            16 =>
                array (
                    'id' => 17,
                    'name' => 'Fournisseur de Services de Sauvegarde',
                    'description' => '<p>Fournisseur pour les services de sauvegarde des données.</p>',
                    'security_level' => 4,
                    'contact_point' => 'support@sauvegarde.com',
                    'is_external' => 1,
                    'entity_type' => 'Sauvegarde',
                    'parent_entity_id' => NULL,
                    'maturity' => rand(0, 5),
                ),
            17 =>
                array (
                    'id' => 18,
                    'name' => 'Service d’Audit Externe',
                    'description' => '<p>Service externe d’audit pour les systèmes et procédures de l’hôpital.</p>',
                    'security_level' => 4,
                    'contact_point' => 'audit@externe.com',
                    'is_external' => 1,
                    'entity_type' => 'Audit',
                    'parent_entity_id' => NULL,
                    'maturity' => rand(0, 5),
                ),
            18 =>
                array (
                    'id' => 19,
                    'name' => 'Société de Gestion des Risques',
                    'description' => '<p>Société spécialisée dans la gestion des risques et la conformité.</p>',
                    'security_level' => 4,
                    'contact_point' => 'contact@gestionrisques.com',
                    'is_external' => 1,
                    'entity_type' => 'Gestion des Risques',
                    'parent_entity_id' => NULL,
                    'maturity' => rand(0, 5),
                ),
            19 =>
                array (
                    'id' => 20,
                    'name' => 'Association des Médecins',
                    'description' => '<p>Association professionnelle regroupant les médecins de l’hôpital.</p>',
                    'security_level' => 3,
                    'contact_point' => 'contact@associationmedecins.com',
                    'is_external' => 1,
                    'entity_type' => 'Association',
                    'parent_entity_id' => NULL,
                    'maturity' => rand(0, 5),
                ),
        ));
    }
}