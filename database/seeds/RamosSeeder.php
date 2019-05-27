<?php

use Illuminate\Database\Seeder;

class RamosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ramos = [
        	'Jugetería',
        	'Piñatería',
        	'Quincalla',
        	'Tienda por DPTOS',
        	'Deportes',
        	'Sector Oficial',
        	'Librería/Papelería',
        	'Puericultura',
        	'Bazar',
        	'Educativos',
        	'Floristeria',
        	'Utilitaria'
		];

		foreach ($ramos as $ramo) {
			\App\Ramo::create([
	            'nombre' => $ramo
	        ]);
		}
    }
}
