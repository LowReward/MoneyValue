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
        DB::table('pairs')->insert([
            'currency_from' => 'EUR',
            'currency_to'=> 'USD',
            'conversion_rate'=> 1.1

        ]);
        DB::table('pairs')->insert([
            'currency_from' => 'USD',
            'currency_to'=> 'EUR',
            'conversion_rate'=> 0.9

        ]);
        DB::table('pairs')->insert([
            'currency_from' => 'EUR',
            'currency_to'=> 'GBP',
            'conversion_rate'=> 0.87

        ]);
    }
}
