<?php

use Illuminate\Database\Seeder;

class AdminSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('adminsettings')->insert([
            'id' => '1',
            'app_title' => 'App Title',
            'email' => 'app@gmail.com',
            'lang' => 'en',
            'img_url' => 'https://code.visualstudio.com/assets/favicon.ico',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
