<?php

use App\Journal;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(DictionarySeeder::class);
        $this->call(JournalSeeder::class);
        $this->call(CoaSeeder::class);
        $this->call(AdminSettingSeeder::class);
    }
}
