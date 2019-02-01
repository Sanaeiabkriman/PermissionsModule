<?php

namespace Modules\Coding\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class EtatTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        DB::table('etats')->insert([
            'nom'=> 'Non validé',
        ]);
        DB::table('etats')->insert([
            'nom'=> 'Validé',
        ]);
    }
}
