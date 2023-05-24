<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class PairsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insertion des enregistrements dans la table 'pairs'
        DB::table('pairs')->insert([
            'currency_from' => 'EUR',
            'currency_to'=> 'USD',
            'conversion_rate'=> 1.08

        ]);
        DB::table('pairs')->insert([
            'currency_from' => 'USD',
            'currency_to'=> 'EUR',
            'conversion_rate'=> 0.93

        ]);
        DB::table('pairs')->insert([
            'currency_from' => 'EUR',
            'currency_to'=> 'GBP',
            'conversion_rate'=> 0.87

        ]);
        DB::table('pairs')->insert([
            'currency_from' => 'GBP',
            'currency_to'=> 'EUR',
            'conversion_rate'=> 1.13

        ]);
        DB::table('pairs')->insert([
            'currency_from' => 'EUR',
            'currency_to'=> 'BTC',
            'conversion_rate'=> 0.000040

        ]);
        DB::table('pairs')->insert([
            'currency_from' => 'BTC',
            'currency_to'=> 'EUR',
            'conversion_rate'=> 24753.57

        ]);
        DB::table('pairs')->insert([
            'currency_from' => 'GBP',
            'currency_to'=> 'JPY',
            'conversion_rate'=> 171.79

        ]);
        DB::table('pairs')->insert([
            'currency_from' => 'JPY',
            'currency_to'=> 'GBP',
            'conversion_rate'=> 0.0058

        ]);
    }
}
