<?php

namespace Modules\Coding\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MatiereTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        DB::table('matieres')->insert([
            'nom' => 'HTML',
  
        ]);
        DB::table('matieres')->insert([
            'nom' => 'CSS',

        ]);
        DB::table('matieres')->insert([
            'nom' => 'JS',
        ]);   
        DB::table('matieres')->insert([
            'nom' => 'VUEJS',
  
        ]);
        DB::table('matieres')->insert([
            'nom' => 'LARAVEL',

        ]);
        DB::table('matieres')->insert([
            'nom' => 'WORDPRESS',
        ]);     }
}
