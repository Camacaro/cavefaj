<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VzlaEstado extends Model
{
    protected $table = "vzla_estados";

    protected $fillable = ['estado'];
}
