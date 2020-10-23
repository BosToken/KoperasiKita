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
            'password' => 'admin',
            'img_url' => 'https://www.generasia.com/w/images/c/c5/Sayuri_-_Koukai_no_Uta_promo.jpg',
            'role_id' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('users')->insert([
            'id' => '2',
            'username' => '美波',
            'contact' => '+6181232857501',
            'email' => 'user@gmail.com',
            'password' => 'user',
            'img_url' => 'https://owldb.net/wp-content/uploads/2019/02/Minami-300x300.jpg',
            'role_id' => '2',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
