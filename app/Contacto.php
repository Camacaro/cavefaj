<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    protected $table = "contactos";

    protected $fillable = ['contacto', 'cargo', 'celular', 'telefono', 'email', 'visitante', 'identificacion_persona', 'tipo_de_identificacion_persona', 'prefijo'];
}
