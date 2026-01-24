<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class solicitud extends Model
{
    //Indicamos las columnas sobre las que podemos actuar a través de operaciones de actualización, inserción o borrado.
    protected $fillable = ['alumno_id', 'aseo_id', 'user_id', 'fecha_hora', 'llave_devuelta'];
}
