<?php

use Illuminate\Database\Seeder;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Permission::create([
            'name' => 'user',
            'display_name' => 'Usuario',
            'description' => 'El usuario puede acceder'
        ]);

        \App\Permission::create([
            'name' => 'admin',
            'display_name' => 'Administrador',
            'description' => 'El administrador puede acceder'
        ]);
    }
}
