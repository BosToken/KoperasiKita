<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DictionarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dictionarys')->insert([
            'id' => '1',
            'title' => 'Briar Chicken',
            'body' => 'Briar Chicken Is a high quality chicken from Germany commonly used in 5 star restaurants',
            'formula' => 'test',
            'type' => 'test',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('dictionarys')->insert([
            'id' => '2',
            'title' => 'Pencil Case',
            'body' => 'The pencil case is a place to store pencils. A pencil case can also contain other writing tools such as erasers, pens, tipp-Ex, colored pencils, and calculators.',
            'formula' => 'test',
            'type' => 'test',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('dictionarys')->insert([
            'id' => '3',
            'title' => 'Colosseum',
            'body' => 'is a historical heritage in the form of gladiator arena, built by Vespasian.',
            'formula' => 'test',
            'type' => 'test',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('dictionarys')->insert([
            'id' => '4',
            'title' => 'Traffic Light',
            'body' => 'Traffic lights have been adopted in almost all cities in the world. This lamp uses a color that is universally recognized; to indicate stop is red, caution which is marked in yellow, and green which means it can run.',
            'formula' => 'test',
            'type' => 'test',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
