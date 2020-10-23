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
            'parent_id' => '0',
            'title' => 'AKTIVA',
            'code' => 'H',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('coas')->insert([
            'id' => '2',
            'parent_id' => '1',
            'title' => 'AKTIVA LANCAR',
            'code' => 'H',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('coas')->insert([
            'id' => '3',
            'parent_id' => '3',
            'title' => 'KAS',
            'code' => 'H',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('coas')->insert([
            'id' => '4',
            'parent_id' => '3',
            'title' => 'KAS BESAR',
            'code' => 'H',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('coas')->insert([
            'id' => '5',
            'parent_id' => '3',
            'title' => 'KAS KECIL',
            'code' => 'H',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
