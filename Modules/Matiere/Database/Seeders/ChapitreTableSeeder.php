<?php

namespace Modules\Matiere\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ChapitreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        DB::table('chapitres')->insert([
            'nom' => 'HTML',
            'parent' => null,
             
            'image'=>'1551690639HV67eZIK0rV6ZQLaCxB5ccQT9WwX47O2hgdpCQxp.jpeg',
            'description'=>"Et surtout MySQL, qui est un Système de Gestion de Bases de Données Relationnelles (abrégé SGBDR), c'est-à-dire un logiciel qui permet de gérer des bases de données, et donc de gérer de grosses quantités d'informations. Il utilise pour cela le langage SQL. Il s'agit d'un des SGBDR les plus connus et les plus utilisés (YouTube et Wordpress utilisent MySQL, par exemple).",
            'competences'=>'À la fin de ce cours, vous serez capable de Créer une base de données
                Créer et modifier des tables
                Insérer, modifier, supprimer et sélectionner des données dans la base
                Réaliser une requête portant sur plusieurs tables avec les jointures
                Accélérer les requêtes avec les index
                Identifier une ligne de manière unique et garantir la cohérence des données avec les clés',
            'prerequis'=>'aucun !',

        ]);
        DB::table('chapitres')->insert([
            'nom' => 'Les balises',
            'parent' => '1',
            'image'=>'15516910929En5vm1OebwghHElu9wjI6GbKAMqWFVjBe9PoE9N.jpeg',
            'description'=>"Et surtout MySQL, qui est un Système de Gestion de Bases de Données Relationnelles (abrégé SGBDR), c'est-à-dire un logiciel qui permet de gérer des bases de données, et donc de gérer de grosses quantités d'informations. Il utilise pour cela le langage SQL. Il s'agit d'un des SGBDR les plus connus et les plus utilisés (YouTube et Wordpress utilisent MySQL, par exemple).",
            'competences'=>'À la fin de ce cours, vous serez capable de Créer une base de données
                Créer et modifier des tables
                Insérer, modifier, supprimer et sélectionner des données dans la base
                Réaliser une requête portant sur plusieurs tables avec les jointures
                Accélérer les requêtes avec les index
                Identifier une ligne de manière unique et garantir la cohérence des données avec les clés',
            'prerequis'=>'aucun !',


        ]);
        DB::table('chapitres')->insert([
            'nom' => 'les elements',
            'parent' => '1',
            'image'=>'1551690639HV67eZIK0rV6ZQLaCxB5ccQT9WwX47O2hgdpCQxp.jpeg',
            'description'=>"Et surtout MySQL, qui est un Système de Gestion de Bases de Données Relationnelles (abrégé SGBDR), c'est-à-dire un logiciel qui permet de gérer des bases de données, et donc de gérer de grosses quantités d'informations. Il utilise pour cela le langage SQL. Il s'agit d'un des SGBDR les plus connus et les plus utilisés (YouTube et Wordpress utilisent MySQL, par exemple).",
            'competences'=>'À la fin de ce cours, vous serez capable de Créer une base de données
                Créer et modifier des tables
                Insérer, modifier, supprimer et sélectionner des données dans la base
                Réaliser une requête portant sur plusieurs tables avec les jointures
                Accélérer les requêtes avec les index
                Identifier une ligne de manière unique et garantir la cohérence des données avec les clés',
            'prerequis'=>'aucun !',


        ]);
        DB::table('chapitres')->insert([
            'nom' => 'les headings',
            'parent' => '2',
            'image'=>'1551690639HV67eZIK0rV6ZQLaCxB5ccQT9WwX47O2hgdpCQxp.jpeg',
            'description'=>"Et surtout MySQL, qui est un Système de Gestion de Bases de Données Relationnelles (abrégé SGBDR), c'est-à-dire un logiciel qui permet de gérer des bases de données, et donc de gérer de grosses quantités d'informations. Il utilise pour cela le langage SQL. Il s'agit d'un des SGBDR les plus connus et les plus utilisés (YouTube et Wordpress utilisent MySQL, par exemple).",
            'competences'=>'À la fin de ce cours, vous serez capable de Créer une base de données
                Créer et modifier des tables
                Insérer, modifier, supprimer et sélectionner des données dans la base
                Réaliser une requête portant sur plusieurs tables avec les jointures
                Accélérer les requêtes avec les index
                Identifier une ligne de manière unique et garantir la cohérence des données avec les clés',
            'prerequis'=>'aucun !',


        ]);
        DB::table('chapitres')->insert([
            'nom' => 'CSS',
            'parent' => null,
            'image'=>'1551690639HV67eZIK0rV6ZQLaCxB5ccQT9WwX47O2hgdpCQxp.jpeg',
            'description'=>"Et surtout MySQL, qui est un Système de Gestion de Bases de Données Relationnelles (abrégé SGBDR), c'est-à-dire un logiciel qui permet de gérer des bases de données, et donc de gérer de grosses quantités d'informations. Il utilise pour cela le langage SQL. Il s'agit d'un des SGBDR les plus connus et les plus utilisés (YouTube et Wordpress utilisent MySQL, par exemple).",
            'competences'=>'À la fin de ce cours, vous serez capable de Créer une base de données
                Créer et modifier des tables
                Insérer, modifier, supprimer et sélectionner des données dans la base
                Réaliser une requête portant sur plusieurs tables avec les jointures
                Accélérer les requêtes avec les index
                Identifier une ligne de manière unique et garantir la cohérence des données avec les clés',
            'prerequis'=>'aucun !',

        ]);
        DB::table('chapitres')->insert([
            'nom' => 'les links',
            'parent' => '5',
            'image'=>'1551690639HV67eZIK0rV6ZQLaCxB5ccQT9WwX47O2hgdpCQxp.jpeg',
            'description'=>"Et surtout MySQL, qui est un Système de Gestion de Bases de Données Relationnelles (abrégé SGBDR), c'est-à-dire un logiciel qui permet de gérer des bases de données, et donc de gérer de grosses quantités d'informations. Il utilise pour cela le langage SQL. Il s'agit d'un des SGBDR les plus connus et les plus utilisés (YouTube et Wordpress utilisent MySQL, par exemple).",
            'competences'=>'À la fin de ce cours, vous serez capable de Créer une base de données
                Créer et modifier des tables
                Insérer, modifier, supprimer et sélectionner des données dans la base
                Réaliser une requête portant sur plusieurs tables avec les jointures
                Accélérer les requêtes avec les index
                Identifier une ligne de manière unique et garantir la cohérence des données avec les clés',
            'prerequis'=>'aucun !',


        ]);
        DB::table('chapitres')->insert([
            'nom' => 'Javascript',
            'parent' => null,
             
            'image'=>'1551690639HV67eZIK0rV6ZQLaCxB5ccQT9WwX47O2hgdpCQxp.jpeg',
            'description'=>"Et surtout MySQL, qui est un Système de Gestion de Bases de Données Relationnelles (abrégé SGBDR), c'est-à-dire un logiciel qui permet de gérer des bases de données, et donc de gérer de grosses quantités d'informations. Il utilise pour cela le langage SQL. Il s'agit d'un des SGBDR les plus connus et les plus utilisés (YouTube et Wordpress utilisent MySQL, par exemple).",
            'competences'=>'À la fin de ce cours, vous serez capable de Créer une base de données
                Créer et modifier des tables
                Insérer, modifier, supprimer et sélectionner des données dans la base
                Réaliser une requête portant sur plusieurs tables avec les jointures
                Accélérer les requêtes avec les index
                Identifier une ligne de manière unique et garantir la cohérence des données avec les clés',
            'prerequis'=>'aucun !',


        ]);
        DB::table('chapitres')->insert([
            'nom' => 'les variables',
            'parent' => '7',
             
            'image'=>'15516910929En5vm1OebwghHElu9wjI6GbKAMqWFVjBe9PoE9N.jpeg',
            'description'=>"Et surtout MySQL, qui est un Système de Gestion de Bases de Données Relationnelles (abrégé SGBDR), c'est-à-dire un logiciel qui permet de gérer des bases de données, et donc de gérer de grosses quantités d'informations. Il utilise pour cela le langage SQL. Il s'agit d'un des SGBDR les plus connus et les plus utilisés (YouTube et Wordpress utilisent MySQL, par exemple).",
            'competences'=>'À la fin de ce cours, vous serez capable de Créer une base de données
                Créer et modifier des tables
                Insérer, modifier, supprimer et sélectionner des données dans la base
                Réaliser une requête portant sur plusieurs tables avec les jointures
                Accélérer les requêtes avec les index
                Identifier une ligne de manière unique et garantir la cohérence des données avec les clés',
            'prerequis'=>'aucun !',


        ]);
        DB::table('chapitres')->insert([
            'nom' => 'les constantes',
            'parent' => '8',
             
            'image'=>'1551690639HV67eZIK0rV6ZQLaCxB5ccQT9WwX47O2hgdpCQxp.jpeg',
            'description'=>"Et surtout MySQL, qui est un Système de Gestion de Bases de Données Relationnelles (abrégé SGBDR), c'est-à-dire un logiciel qui permet de gérer des bases de données, et donc de gérer de grosses quantités d'informations. Il utilise pour cela le langage SQL. Il s'agit d'un des SGBDR les plus connus et les plus utilisés (YouTube et Wordpress utilisent MySQL, par exemple).",
            'competences'=>'À la fin de ce cours, vous serez capable de Créer une base de données
                Créer et modifier des tables
                Insérer, modifier, supprimer et sélectionner des données dans la base
                Réaliser une requête portant sur plusieurs tables avec les jointures
                Accélérer les requêtes avec les index
                Identifier une ligne de manière unique et garantir la cohérence des données avec les clés',
            'prerequis'=>'aucun !',


        ]);
        DB::table('chapitres')->insert([
            'nom' => 'les aojdoajd',
            'parent' => '9',
             
            'image'=>'1551690639HV67eZIK0rV6ZQLaCxB5ccQT9WwX47O2hgdpCQxp.jpeg',
            'description'=>"Et surtout MySQL, qui est un Système de Gestion de Bases de Données Relationnelles (abrégé SGBDR), c'est-à-dire un logiciel qui permet de gérer des bases de données, et donc de gérer de grosses quantités d'informations. Il utilise pour cela le langage SQL. Il s'agit d'un des SGBDR les plus connus et les plus utilisés (YouTube et Wordpress utilisent MySQL, par exemple).",
            'competences'=>'À la fin de ce cours, vous serez capable de Créer une base de données
                Créer et modifier des tables
                Insérer, modifier, supprimer et sélectionner des données dans la base
                Réaliser une requête portant sur plusieurs tables avec les jointures
                Accélérer les requêtes avec les index
                Identifier une ligne de manière unique et garantir la cohérence des données avec les clés',
            'prerequis'=>'aucun !',


        ]);
        DB::table('chapitres')->insert([
            'nom' => 'Laravel',
            'parent' => null,
            'image'=>'15516910929En5vm1OebwghHElu9wjI6GbKAMqWFVjBe9PoE9N.jpeg',
            'description'=>"Et surtout MySQL, qui est un Système de Gestion de Bases de Données Relationnelles (abrégé SGBDR), c'est-à-dire un logiciel qui permet de gérer des bases de données, et donc de gérer de grosses quantités d'informations. Il utilise pour cela le langage SQL. Il s'agit d'un des SGBDR les plus connus et les plus utilisés (YouTube et Wordpress utilisent MySQL, par exemple).",
            'competences'=>'À la fin de ce cours, vous serez capable de Créer une base de données
                Créer et modifier des tables
                Insérer, modifier, supprimer et sélectionner des données dans la base
                Réaliser une requête portant sur plusieurs tables avec les jointures
                Accélérer les requêtes avec les index
                Identifier une ligne de manière unique et garantir la cohérence des données avec les clés',
            'prerequis'=>'aucun !',
        ]);
    
    }
}
