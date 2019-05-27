<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    protected $table = "ciudades";

    protected $fillable = ['estado_id', 'ciudad', 'capital'];
}
