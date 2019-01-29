<?php

namespace Modules\Presse\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PresseDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('presses')->insert([
            'titre' => 'Le projet Molengeek en Italie, c’est fait !',
            'lien' => '"1548059828fHbcEvqdtAFC0wTiTjoFLHSl3wnLJJmcppUohstQ.jpeg"',
            'date' => '01/01/2001',
            'media' => 'La libre',
            'image'=>"1548059828fHbcEvqdtAFC0wTiTjoFLHSl3wnLJJmcppUohstQ.jpeg",
        ]);
        DB::table('presses')->insert([
            'titre' => 'Le projet Molengeek en Italie, c’est fait !',
            'lien' => '"1548059828fHbcEvqdtAFC0wTiTjoFLHSl3wnLJJmcppUohstQ.jpeg"',
            'date' => '01/01/2001',
            'media' => 'La libre',
            'image'=>"1548059828fHbcEvqdtAFC0wTiTjoFLHSl3wnLJJmcppUohstQ.jpeg",
        ]);
        DB::table('presses')->insert([
            'titre' => 'Le projet Molengeek en Italie, c’est fait !',
            'lien' => '"1548059828fHbcEvqdtAFC0wTiTjoFLHSl3wnLJJmcppUohstQ.jpeg"',
            'date' => '01/01/2001',
            'media' => 'La libre',
            'image'=>"1548059828fHbcEvqdtAFC0wTiTjoFLHSl3wnLJJmcppUohstQ.jpeg",
        ]);
        DB::table('presses')->insert([
            'titre' => 'Le projet Molengeek en Italie, c’est fait !',
            'lien' => '"1548059828fHbcEvqdtAFC0wTiTjoFLHSl3wnLJJmcppUohstQ.jpeg"',
            'date' => '01/01/2001',
            'media' => 'La libre',
            'image'=>"1548059828fHbcEvqdtAFC0wTiTjoFLHSl3wnLJJmcppUohstQ.jpeg",
        ]);
        DB::table('presses')->insert([
            'titre' => 'Le projet Molengeek en Italie, c’est fait !',
            'lien' => '"1548059828fHbcEvqdtAFC0wTiTjoFLHSl3wnLJJmcppUohstQ.jpeg"',
            'date' => '01/01/2001',
            'media' => 'La libre',
            'image'=>"1548059828fHbcEvqdtAFC0wTiTjoFLHSl3wnLJJmcppUohstQ.jpeg",
        ]);
    }
}
