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
class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([
            'permission' => 'Can_create',
        ]);
        DB::table('permissions')->insert([
            'permission' => 'Can_read',
        ]);
        DB::table('permissions')->insert([
            'permission' => 'Can_update',
        ]);
        DB::table('permissions')->insert([
            'permission' => 'Can_delete',
        ]);
        DB::table('permissions')->insert([
            'permission' => 'Can_list',
        ]);
    }
}
