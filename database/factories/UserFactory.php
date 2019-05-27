<?php

use App\Ramo;
use App\Empresa;
use App\Contacto;
use App\EmpresaRamo;
use App\EmpresaContacto;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

/*$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});*/

$factory->define(Contacto::class, function (Faker $faker) {
    return [
        'contacto' => $faker->name,
		'identificacion_persona' => $faker->creditCardNumber,
		'tipo_de_identificacion_persona' =>  $faker->randomElement( ['V', 'E' ] ),
		'cargo' => $faker->word,
		'celular' => $faker->tollFreePhoneNumber,
		'telefono' => $faker->tollFreePhoneNumber,
		'email' => $faker->unique()->safeEmail,
		'visitante' => $faker->numberBetween(1, 10)
    ];
});

$factory->define(Empresa::class, function (Faker $faker) {
    return [
        'nombre' => $faker->name,
		'tipo_empresa' => $faker->randomElement( ['Comprador', 'Expositor' ] ),
		'tipo_persona' => $faker->randomElement( ['Jurídico', 'Natural', 'Gubernamental', 'Extranjero' ] ),
		'edicion_feria' => 'test',
		'sede' => 'test',
		'tipo_de_identificacion' => $faker->randomElement( ['Rif', 'CI' ] ),
		'identificacion' => $faker->creditCardNumber,
		'ubicacion' => $faker->streetAddress,
		'ciudad' => $faker->city,
		'estado' => $faker->state,
		'facebook' => $faker->unique()->safeEmail,
		'twitter' => $faker->unique()->safeEmail,
		'instagram' => $faker->unique()->safeEmail,
		'observacion' => $faker->word
    ];
});

$factory->define(EmpresaRamo::class, function (Faker $faker) {    
    return [
        'empresa_id' =>  Empresa::all()->random()->id,
		'ramo_id' => Ramo::all()->random()->id,
    ];
});

$factory->define(EmpresaContacto::class, function (Faker $faker) {    
    return [
        'empresa_id' =>  Empresa::all()->random()->id,
		'contacto_id' => Contacto::all()->random()->id,
    ];
});








