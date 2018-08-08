<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Proyecto;
use DB;
use App\Categoria;

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
    	
        $galerias = DB::table('galerias')
                            ->orderBy('orden', 'acs')
                            ->paginate(2);
        $imagenes = DB::table('imagenes_galerias')->get();

    	// dd($imagenes);
    	return view('galerias.index', ['galerias' => $galerias, 'imagenes' => $imagenes]);
    }

    public function categoria($categoria_id){
        // $proyectos = Proyecto::all()->paginate(15);
        $proyectos = DB::table('proyectos')
                            ->join('categorias_proyectos', 'proyectos.id', '=', 'categorias_proyectos.proyecto_id')
                            ->where('categorias_proyectos.categoria_id', $categoria_id)
                            ->orderBy('prioridad_orden', 'asc')
                            ->paginate(15);
                            // dd($proyectos);
        $detalles = DB::table('detalle_casas')->get();
        $categoria = Categoria::find($categoria_id);

    	// dd();
    	return view('categoria', ['proyectos' => $proyectos, 'detalles' => $detalles, 'categoria_actual'=>$categoria]);
    }
}
