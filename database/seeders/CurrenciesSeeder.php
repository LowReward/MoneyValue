<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CurrenciesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insertion des enregistrements dans la table 'currencies'
        DB::table('currencies')->insert([
            'code' => 'EUR',
            'name'=> 'Euros',

        ]);
        DB::table('currencies')->insert([
            'code' => 'USD',
            'name'=> 'Dollars Americain',

        ]);
        DB::table('currencies')->insert([
            'code' => 'GBP',
            'name'=> 'Sterling',

        ]);
        DB::table('currencies')->insert([
            'code' => 'YEN',
            'name'=> 'Yen Japonais',

        ]);
        DB::table('currencies')->insert([
            'code' => 'BTC',
            'name'=> 'Bitcoin',

        ]);
        DB::table('currencies')->insert([
            'code' => 'LTC',
            'name'=> 'Litecoin',

        ]);
    }
}
