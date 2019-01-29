<?php
/*-----------------------------------------------
* @package Module Permissions
* @author  Sanae
* @copyright   Copyright (c) 2018 - MolenGeek (https://molengeek.com/)
* @license http://opensource.org/licenses/MIT  MIT License
* @since   Version 1.0.0
* @TODO (??)
* @param type
* @param2 type
* @return TypeObjet
-----------------------------------------------*/
namespace Modules\Permission\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
// ajouter la ligne suivante pour pour effectuer le seeder
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
