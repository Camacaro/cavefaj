<?php

use App\Empresa;
use App\Contacto;
use App\EmpresaRamo;
use App\EmpresaContacto;
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
        \App\Ramo::truncate(); 
        \App\Permission::truncate(); 
        $this->call(PermissionsSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(RamosSeeder::class);


        /*$cantidadContactos = 1000;
        $cantidadEmpresas = 1000;
        $cantidadRamoEmpresa =  1000;
        $cantidadEmpresaContacto = 1000;

        // Llamando los factories
        factory( Contacto::class, $cantidadContactos)->create() ;
        factory( Empresa::class, $cantidadEmpresas)->create() ;
        factory( EmpresaRamo::class, $cantidadRamoEmpresa)->create() ;
        factory( EmpresaContacto::class, $cantidadEmpresaContacto)->create() ;*/
        
        
        

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

    	#Si es local se ejecutara esto
        /*if (\Illuminate\Support\Facades\App::environment('local')) {

        }*/
    }
}
