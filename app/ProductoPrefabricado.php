<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductoPrefabricado extends Model
{
    protected $table = 'productos';

    protected $fillable = ['nombre', 'descripcion', 'imagen'];
}
