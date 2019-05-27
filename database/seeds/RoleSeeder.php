<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rol = new \App\Role();
        $rol->name='admin';
        $rol->display_name='Administrador';
        $rol->description = 'Administrador';
        $rol->save();
        $permisos = \App\Permission::all();
        $rol->attachPermissions($permisos);

        $rol = new \App\Role();
        $rol->name='user';
        $rol->display_name='Usuario';
        $rol->description = 'Usuario';
        $rol->save();
        $permisos = \App\Permission::where('name', 'user')->get();
        $rol->attachPermissions($permisos);

    }
}
