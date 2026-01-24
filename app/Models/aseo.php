<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class aseo extends Model
{
    //Indicamos las columnas sobre las que podemos actuar a través de operaciones de actualización, inserción o borrado.
    protected $fillable = ['descripcion'];
}
