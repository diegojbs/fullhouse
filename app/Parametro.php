<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parametro extends Model
{
    protected $table = 'parametros';
    protected $fillable = ['descripcion', 'campo1', 'campo2'];
}
