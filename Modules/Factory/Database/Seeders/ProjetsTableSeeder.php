<?php

namespace Modules\Factory\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ProjetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projets')->insert([
            'nom' => 'projet 1',
            'description' => 'Un chèque TIC est un document créé pour les chercheurs d’emploi qui habitent à Bruxelles. En pratique, à quoi ça sert ? Si jamais tu cherches un emploi mais que tu n’es pas certain d’être suffisamment calé en informatique (bureautique ou internet)',
            'date' => '01/01/2001',
            'client_id' => '1',
            'statut_id' => '1',
            'user_id'=>'1',
        ]);
        DB::table('projets')->insert([
            'nom' => 'projet 2',
            'description' => 'Un chèque TIC est un document créé pour les chercheurs d’emploi qui habitent à Bruxelles. En pratique, à quoi ça sert ? Si jamais tu cherches un emploi mais que tu n’es pas certain d’être suffisamment calé en informatique (bureautique ou internet)',
            'date' => '01/01/2001',
            'client_id' => '2',
            'statut_id' => '2',
            'user_id'=>'1',
        ]);
        DB::table('projets')->insert([
            'nom' => 'projet 3',
            'description' => 'Un chèque TIC est un document créé pour les chercheurs d’emploi qui habitent à Bruxelles. En pratique, à quoi ça sert ? Si jamais tu cherches un emploi mais que tu n’es pas certain d’être suffisamment calé en informatique (bureautique ou internet)',
            'date' => '01/01/2001',
            'client_id' => '3',
            'statut_id' => '3',
            'user_id'=>'1',
        ]);
        
    }
}
