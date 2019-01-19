<?php

namespace Modules\Factory\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class UserProjetTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_projet')->insert([
            'projet_id' => '1',
            'user_id'=>'1',
        ]);
        DB::table('user_projet')->insert([
            'projet_id' => '2',
            'user_id'=>'1',
        ]);
        DB::table('user_projet')->insert([
            'projet_id' => '3',
            'user_id'=>'1',
        ]);
    }
}
