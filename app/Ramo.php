<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ramo extends Model
{
    protected $table = "ramos";

    protected $fillable = ['nombre'];
}
