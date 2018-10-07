<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	DB::statement('SET FOREIGN_KEY_CHECKS=0;');

    	DB::table('role_user')->truncate();
        DB::table('permission_role')->truncate();
        \App\Role::truncate();
        \App\User::truncate();
        \App\Permission::truncate(); 
        $this->call(PermissionsSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

    	#Si es local se ejecutara esto
        /*if (\Illuminate\Support\Facades\App::environment('local')) {

        }*/
    }
}
