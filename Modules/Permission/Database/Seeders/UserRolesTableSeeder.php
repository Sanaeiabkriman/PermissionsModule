<?php

namespace Modules\Permission\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class UserRolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_roles')->insert([
            'user_id' => '1',
            'role_id' => '1'
        ]);
        DB::table('user_roles')->insert([
            'user_id' => '2',
            'role_id' => '2'
        ]);
        DB::table('user_roles')->insert([
            'user_id' => '3',
            'role_id' => '3'
        ]);
    }
}
