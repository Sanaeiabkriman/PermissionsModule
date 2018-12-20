<?php

namespace Modules\Permission\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorie_roles')->insert([
            'nom' => 'Start-up',
        ]);
        DB::table('categorie_roles')->insert([
            'nom' => 'Incubés',
        ]);
        DB::table('categorie_roles')->insert([
            'nom' => 'Student',
        ]);
        DB::table('categorie_roles')->insert([
            'nom' => 'Admin',
        ]);
        DB::table('categorie_roles')->insert([
            'nom' => 'Visiteur',
        ]);
    }
}
