<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => '1',
            'username' => 'さユり',
            'contact' => '+6181232857502',
            'email' => 'admin@gmail.com',
            'password' => 'test',
            'img_url' => 'https://www.generasia.com/w/images/c/c5/Sayuri_-_Koukai_no_Uta_promo.jpg'
        ]);
        DB::table('users')->insert([
            'id' => '2',
            'username' => '美波',
            'contact' => '+6181232857501',
            'email' => 'user@gmail.com',
            'password' => 'test',
            'img_url' => 'https://owldb.net/wp-content/uploads/2019/02/Minami-300x300.jpg'
        ]);
    }
}
