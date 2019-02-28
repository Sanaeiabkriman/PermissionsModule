<?php

namespace Modules\Matiere\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ChapitreTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        DB::table('chapitre_type')->insert([
            'chapitre_id' => '2',
            'type_id' => '2'
        ]);

        DB::table('chapitre_type')->insert([
            'chapitre_id' => '2',
            'type_id' => '5'
        ]);

        DB::table('chapitre_type')->insert([
            'chapitre_id' => '3',
            'type_id' => '2'
        ]);

        DB::table('chapitre_type')->insert([
            'chapitre_id' => '4',
            'type_id' => '2'
        ]);

        DB::table('chapitre_type')->insert([
            'chapitre_id' => '5',
            'type_id' => '2'
        ]);

        DB::table('chapitre_type')->insert([
            'chapitre_id' => '6',
            'type_id' => '2'
        ]);

        DB::table('chapitre_type')->insert([
            'chapitre_id' => '7',
            'type_id' => '2'
        ]);

        DB::table('chapitre_type')->insert([
            'chapitre_id' => '8',
            'type_id' => '2'
        ]);

        DB::table('chapitre_type')->insert([
            'chapitre_id' => '9',
            'type_id' => '2'
        ]);

        DB::table('chapitre_type')->insert([
            'chapitre_id' => '10',
            'type_id' => '2'
        ]);

        DB::table('chapitre_type')->insert([
            'chapitre_id' => '11',
            'type_id' => '2'
        ]);

    }
}
