<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TrasactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transactions')->insert([
            'id' => '1',
            'num_evidence' => 'BCD5241',
            'type_transaction' => 'Cash',
            'dictionary_id' => '2',
            'body' => 'Bayu (Emir Mahira), who is now a member of the U-15 national team soccer, wants to prove himself capable of leading his team to win.',
            'amount' => '50',
            'operator' => '636',
            'status' => 'Actived',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('transactions')->insert([
            'id' => '2',
            'num_evidence' => 'BCD0953',
            'type_transaction' => 'Credit',
            'dictionary_id' => '1',
            'body' => 'Through explanatory text, every event that occurs around us is not only observed and felt, but also used as learning.',
            'amount' => '10',
            'operator' => '294',
            'status' => 'Inactived',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('transactions')->insert([
            'id' => '3',
            'num_evidence' => 'BCD7357',
            'type_transaction' => 'Cash',
            'dictionary_id' => '1',
            'body' => 'Etymologically, expalansi comes from the English word, Eksplanation, which means explanation or explanation.',
            'amount' => '12',
            'operator' => '753',
            'status' => 'Actived',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
