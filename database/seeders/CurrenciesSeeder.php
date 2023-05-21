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
    }
}
