<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categorias';

    public function proyectos(){
        return $this->hasMany('App\CategoriaProyecto', 'categoria_id', 'id');
    }
}
