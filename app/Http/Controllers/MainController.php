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
    	$proyectos = DB::table('proyectos')->paginate(15);
    	$detalles = DB::table('detalle_casas')->get();

    	// dd();
    	return view('inicio', ['proyectos' => $proyectos, 'detalles' => $detalles]);
    }
}
