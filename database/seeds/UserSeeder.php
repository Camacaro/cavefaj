<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $user = \App\User::create([
            'name' => 'admin',
            'email' => 'admin@mail.com',
            'password' => bcrypt('admin'),
            'remember_token' => str_random(10)
        ]);
       $admin = \App\Role::where('name', 'admin')->first();
       $user->attachRole($admin);

       $user = \App\User::create([
            'name' => 'user',
            'email' => 'user@mail.com',
            'password' => bcrypt('user'),
            'remember_token' => str_random(10)
        ]);
       $admin = \App\Role::where('name', 'user')->first();
       $user->attachRole($admin);


    }
}
