<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Edicion extends Model
{
    protected $table = "edicionferia";

    protected $fillable = ['feria', 'year', 'sede'];
}
