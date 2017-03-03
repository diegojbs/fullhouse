<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleProyecto extends Model
{
    protected $table = "detalle_casas";
    protected $fillable = ['proyecto_id', 'descripcion'];
}
