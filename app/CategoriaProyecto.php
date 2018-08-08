<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriaProyecto extends Model
{
    protected $table = 'categorias_proyectos';

    public function categoria(){
        return $this->belongsTo('App\Categoria', 'categoria_id');
    }

    public function proyecto(){
        return $this->belongsTo('App\Proyecto', 'proyecto_id');
    }
}
