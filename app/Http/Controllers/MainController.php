<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Proyecto;
use DB;

class MainController extends Controller
{
    public function index(){
    	// $proyectos = Proyecto::all()->paginate(15);
    	$proyectos = DB::table('proyectos')
                            ->orderBy('prioridad_orden', 'asc')
                            ->paginate(15);
    	$detalles = DB::table('detalle_casas')->get();

    	// dd();
    	return view('inicio', ['proyectos' => $proyectos, 'detalles' => $detalles]);
    }

    public function galerias(){
    	
        $galerias = DB::table('galerias')->paginate(4);
        $imagenes = DB::table('imagenes_galerias')->get();

    	// dd($imagenes);
    	return view('galerias.index', ['galerias' => $galerias, 'imagenes' => $imagenes]);
    }
}
