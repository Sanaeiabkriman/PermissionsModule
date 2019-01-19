<?php

namespace Modules\Permission\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        DB::table('roles')->insert([
            'nom' => 'Manager',
            'categorie_role_id' => '1'
        ]);
        DB::table('roles')->insert([
            'nom' => 'It-ceo',
            'categorie_role_id' => '2'
        ]);
        DB::table('roles')->insert([
            'nom' => 'Directeur',
            'categorie_role_id' => '3'
        ]);
    }
}
