<?php

namespace Modules\Factory\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class StatutsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('statuts')->insert([
            'nom' => 'A faire',
        ]);
        DB::table('statuts')->insert([
            'nom' => 'En cours',
        ]);
        DB::table('statuts')->insert([
            'nom' => 'Fait',
        ]);    
    }
}
