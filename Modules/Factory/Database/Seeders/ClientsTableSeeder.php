<?php

namespace Modules\Factory\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        DB::table('clients')->insert([
            'nom' => 'Charlotte',
            'email' => 'chacha@mail.com',
            'numero' => '059862148',
        ]);
        DB::table('clients')->insert([
            'nom' => 'Chouhou',
            'email' => 'chouhou@mail.com',
            'numero' => '118218',
        ]);
        DB::table('clients')->insert([
            'nom' => 'Sebastien',
            'email' => 'seb@mail.com',
            'numero' => '0474610799',
        ]);
    }
}
