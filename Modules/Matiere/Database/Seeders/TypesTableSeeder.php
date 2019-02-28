<?php

namespace Modules\Matiere\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        DB::table('types')->insert([
            'nom' => 'WEBDEV',
        ]);
        DB::table('types')->insert([
            'nom' => 'DESIGN',
        ]);
        DB::table('types')->insert([
            'nom' => 'MARKETING',
        ]);
        DB::table('types')->insert([
            'nom' => 'SOFT SKILLS',
        ]);
        DB::table('types')->insert([
            'nom' => 'PING PONG',
        ]);
        DB::table('types')->insert([
            'nom' => 'PIANO',
        ]);    }
}
