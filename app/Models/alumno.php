<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alumno extends Model
{
    use HasFactory;
    //Indicamos las columnas sobre las que podemos actuar a través de operaciones de actualización, inserción o borrado.
    protected $fillable = ['nombre', 'grupo'];
}
