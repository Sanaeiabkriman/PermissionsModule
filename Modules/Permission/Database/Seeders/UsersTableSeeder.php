<?php

namespace Modules\Permission\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'user1',
            'email' => 'user1@gmail.com',
            'password' => bcrypt('user1'),
        ]);
        DB::table('users')->insert([
            'name' => 'user2',
            'email' => 'user2@gmail.com',
            'password' => bcrypt('user2'),
        ]);
        DB::table('users')->insert([
            'name' => 'user3',
            'email' => 'user3@gmail.com',
            'password' => bcrypt('user3'),
        ]);
      
    }
}
