<?php

namespace Modules\Matiere\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ChapitreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        DB::table('chapitres')->insert([
            'nom' => '1',
            'parent' => null,
        ]);
        DB::table('chapitres')->insert([
            'nom' => '1.1',
            'parent' => '1',
        ]);
        DB::table('chapitres')->insert([
            'nom' => '1.2',
            'parent' => '1',
        ]);
        DB::table('chapitres')->insert([
            'nom' => '1.1.1',
            'parent' => '2',
        ]);
        DB::table('chapitres')->insert([
            'nom' => '2',
            'parent' => null,
        ]);
        DB::table('chapitres')->insert([
            'nom' => '2.1',
            'parent' => '5',
        ]);
        DB::table('chapitres')->insert([
            'nom' => '3',
            'parent' => null,
        ]);
        DB::table('chapitres')->insert([
            'nom' => '3.1',
            'parent' => '7',
        ]);
        DB::table('chapitres')->insert([
            'nom' => '3.1.1',
            'parent' => '8',
        ]);
        DB::table('chapitres')->insert([
            'nom' => '3.1.1.1',
            'parent' => '9',
        ]);
        DB::table('chapitres')->insert([
            'nom' => '4',
            'parent' => null,
        ]);
    }
}
