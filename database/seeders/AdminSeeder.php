<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insertion des enregistrements dans la table 'admin'
        DB::table('admin')->insert([
            'name'=> 'philippe',
            'email' => 'philippe@admin.com',
            'password' => bcrypt('password'),

        ]);
    }
}
