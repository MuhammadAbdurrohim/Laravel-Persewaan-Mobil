<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(PagesSeeder::class);
        $this->call(SettingSeede::class);
        $this->call(UserSeeder::class);
        $this->call(ManufactureSeeder::class);
        $this->call(CustomerSeeder::class);
    }
}
