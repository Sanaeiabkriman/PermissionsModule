<?php

namespace Modules\Permission\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
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
