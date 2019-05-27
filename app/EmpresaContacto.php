<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmpresaContacto extends Model
{
    protected $table = "empresas_contactos";

    protected $fillable = ['empresa_id', 'contacto_id'];
}
