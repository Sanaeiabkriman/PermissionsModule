<?php

namespace Modules\Permission\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PermissionRolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permission_roles')->insert([
            'permission_id' => '1',
            'role_id' => '1'
        ]);
        DB::table('permission_roles')->insert([
            'permission_id' => '2',
            'role_id' => '2'
        ]);
        DB::table('permission_roles')->insert([
            'permission_id' => '3',
            'role_id' => '3'
        ]);
    }
}
