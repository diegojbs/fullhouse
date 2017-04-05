<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoEntrega extends Model
{
    protected $table = 'tipos_entrega';

    protected $fillable = ['titulo', 'parrafo'];
}