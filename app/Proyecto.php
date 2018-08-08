<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    protected $table = 'proyectos';

    protected $fillable = ['titulo', 'contenido', 'descripcion'];

    public function categorias(){
        return $this->hasMany('App\CategoriaProyecto', 'categoria_id', 'id');
    }
}
