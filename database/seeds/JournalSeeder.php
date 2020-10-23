<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JournalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('journals')->insert([
            'id' => '1',
            'title' => 'Recipes Book',
            'body' => 'Recipes Book For Begginer, lets cooking',
            'credit' => '100.000',
            'discharge' => '50.000',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('journals')->insert([
            'id' => '2',
            'title' => 'Dictionary English',
            'body' => '5milion word english to indonesia',
            'credit' => '40.000',
            'discharge' => '30.000',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('journals')->insert([
            'id' => '3',
            'title' => 'Novel Dilan 1998',
            'body' => 'the love story of Dilan the Chringe',
            'credit' => '100.000',
            'discharge' => '150.000',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('journals')->insert([
            'id' => '4',
            'title' => 'Coffe with Milk',
            'body' => 'delicious coffee mixed with creamy milk, is an unbeatable combination',
            'credit' => '5.000',
            'discharge' => '6.000',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
