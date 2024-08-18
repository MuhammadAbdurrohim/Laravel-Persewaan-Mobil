<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = ['HUBUNGI SAYA, SAYA SIAP '];

        for($i=0;$i<count($name);$i++){
            $role = App\Role::create([
                'name'=> $name[$i],
                'slug'=> str_slug($name[$i])
            ]);

            }
    }
}
