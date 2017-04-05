<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FichaTecnica extends Model
{
    protected $table = 'fichatecnica';

    protected $fillable = ['tipo', 'ancho', 'contenido', 'enlace_archivo'];
}
