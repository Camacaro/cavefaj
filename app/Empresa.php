<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
	protected $table = "empresas";

    protected $fillable = ['nombre', 'tipo_empresa', 'tipo_persona', 'edicion_feria', 'sede', 'tipo_de_identificacion', 'identificacion', 'ubicacion', 'ciudad', 'estado', 'facebook', 'twitter', 'instagram', 'observacion', 'fecha_registro'];
    
}
