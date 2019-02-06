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
            'nom' => '1.1.1',
            'parent' => '2',
        ]);
        DB::table('chapitres')->insert([
            'nom' => '2',
            'parent' => null,
        ]);
        DB::table('chapitres')->insert([
            'nom' => '2.1',
            'parent' => '4',
        ]);
    }
}
