<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'id' => '1',
            'period' => 'AAP502',
            'beginning_balance' => '100.000',
            'debit_mutation' => '100.000',
            'credit_mutation' => '50.000',
            'ending_balance' => '50.000',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('posts')->insert([
            'id' => '2',
            'period' => 'AAP515',
            'beginning_balance' => '80.000',
            'debit_mutation' => '90.000',
            'credit_mutation' => '20.000',
            'ending_balance' => '80.000',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('posts')->insert([
            'id' => '3',
            'period' => 'AAP592',
            'beginning_balance' => '90.000',
            'debit_mutation' => '40.000',
            'credit_mutation' => '60.000',
            'ending_balance' => '10.000',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
