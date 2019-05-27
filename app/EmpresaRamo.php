<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmpresaRamo extends Model
{
    protected $table = "empresas_ramos";

    protected $fillable = ['empresa_id', 'ramo_id'];
}
