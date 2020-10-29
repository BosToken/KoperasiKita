<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CoaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('coas')->insert([
            'id' => '1',
            'num_approximate' => '100000000000000',
            'parent_id' => '000000000000000',
            'title' => 'AKTIVA',
            'code' => '0',
            'headdet' => 'H',
            'dk' => '0',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('coas')->insert([
            'id' => '2',
            'num_approximate' => '101000000000000',
            'parent_id' => '100000000000000',
            'title' => 'AKTIVA LANCAR',
            'code' => '0',
            'headdet' => 'H',
            'dk' => 'D',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('coas')->insert([
            'id' => '3',
            'num_approximate' => '101010000000000',
            'parent_id' => '101000000000000',
            'title' => 'KAS',
            'code' => '0',
            'headdet' => 'H',
            'dk' => 'D',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('coas')->insert([
            'id' => '4',
            'num_approximate' => '101010100000000',
            'parent_id' => '101010000000000',
            'title' => 'KAS BESAR',
            'code' => '0',
            'headdet' => 'D',
            'dk' => 'D',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('coas')->insert([
            'id' => '5',
            'num_approximate' => '101010200000000',
            'parent_id' => '101010000000000',
            'title' => 'KAS KECIL',
            'code' => '0',
            'headdet' => 'D',
            'dk' => 'D',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('coas')->insert([
            'id' => '6',
            'num_approximate' => '101020000000000',
            'parent_id' => '101000000000000',
            'title' => 'BANK',
            'code' => '0',
            'headdet' => 'H',
            'dk' => 'D',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
