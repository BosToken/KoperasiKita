<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SystemLogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('system_logs')->insert([
            'id' => '1',
            'event' => 'Book Rent',
            'num_evidence' => 'BCD8910',
            'num_transaction' => '2',
            'body' => 'I will back the book tommorow',
            'operator' => '342',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('system_logs')->insert([
            'id' => '2',
            'event' => 'Money Rent',
            'num_evidence' => 'BCD6109',
            'num_transaction' => '1',
            'body' => 'I will back the Money tommorow',
            'operator' => '294',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('system_logs')->insert([
            'id' => '3',
            'event' => 'Charge',
            'num_evidence' => 'BCD5214',
            'num_transaction' => '2',
            'body' => 'Charge Money From BCD6109',
            'operator' => '636',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
