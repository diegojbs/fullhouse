<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Storage;
use App\Proyecto;
use App\Categoria;
use App\CategoriaProyecto;
use App\DetalleCasa;

class ProyectosAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $malla = Proyecto::orderBy('id', 'desc')->get();
        $ultimo = Proyecto::orderBy('id', 'desc')->first();
        $categorias = Categoria::all();
        $categorias = $categorias->pluck('nombre', 'id');
        $metodo = 'post';
        $accion = 'store';
        return view('admin.proyectos.index', compact('malla', 'ultimo', 'metodo', 'accion', 'categorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        dd('Todo OK');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        if (!$request->file('imagen')){
            $mensaje = "Debe subir una imagen";
            return back()->with('mensaje');
        }

        $imagen = $request->file('imagen');
        $nombre_imagen = date('YmdHis').$imagen->getClientOriginalName();

        $resultado = Storage::put(
            'public/proyectos/'.$nombre_imagen,
            file_get_contents($request->file('imagen')->getRealPath())
        );

        if(!$resultado){
            dd('Error al guardar imagen');
        }

        $data = new Proyecto();
        $data->titulo = $request->titulo;
        $data->contenido = $request->contenido;
        $data->prioridad_orden = $request->prioridad_orden;
        $data->imagen = $nombre_imagen;
        

        if($data->save()){
            $ultimo = Proyecto::orderBy('id', 'desc')->first();
            // Guardar categorias asociadas
            if (count($request->categorias) > 0){
                foreach($request->categorias as $categoria){
                    $data_categoria = new CategoriaProyecto();
                    $data_categoria->proyecto_id = $ultimo->id;
                    $data_categoria->categoria_id = $categoria;
                    $data_categoria->save();
                }
            }
            $mensaje = "Registro guardado";
            return back()->with('mensaje');
        }else{
            
            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $padre = Proyecto::find($id);
        $malla = DetalleCasa::where('proyecto_id', $padre->id)->orderBy('id', 'desc')->get();
        $ultimo = DetalleCasa::orderBy('id', 'desc')->first();
        $metodo = 'post';
        $accion = 'store';
        return view('admin.proyectos.show', compact('malla', 'ultimo', 'metodo', 'accion', 'padre'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // dd($id);
        $malla = Proyecto::orderBy('id', 'desc')->get();
        $ultimo = Proyecto::find($id);
        
        $categorias = Categoria::all();
        $categorias_actuales = CategoriaProyecto::where('proyecto_id', $ultimo->id)->get();
        // $categoriasNuevo = $categorias->pluck('nombre', 'id');
        
        $metodo = 'PUT';
        $accion = 'update';
        return view('admin.proyectos.index', compact('malla', 'ultimo', 'metodo', 'accion', 'categorias', 'categorias_actuales'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Proyecto::find($id);

        if ($request->file('imagen')){
        
            $imagen = $request->file('imagen');
            $nombre_imagen = date('YmdHis').$imagen->getClientOriginalName();

            $resultado = Storage::put(
                'public/proyectos/'.$nombre_imagen,
                file_get_contents($request->file('imagen')->getRealPath())
            );

            if(!$resultado){
                dd('Error al guardar imagen');
            }else{
                // Borrar imagen anterior
                Storage::delete('public/proyectos/'.$data->imagen);
                $data->imagen = $nombre_imagen;
            }
        }

        
        $data->titulo = $request->titulo;
        $data->contenido = $request->contenido;
        $data->prioridad_orden = $request->prioridad_orden;
        

        if($data->save()){
            $ultimo = $data;
            //Limpiar categorias asociadas actualmente
            $categorias_viejas = CategoriaProyecto::where('proyecto_id', $ultimo->id)->get();
            // dd($categorias_viejas);
            if($categorias_viejas != null){
                foreach($categorias_viejas as $categoria){
                    $categoria->delete();
                }
            }

            // Guardar nuevas categorias asociadas
            if (count($request->categorias) > 0){
                foreach($request->categorias as $categoria){
                $data_categoria = new CategoriaProyecto();
                $data_categoria->proyecto_id = $ultimo->id;
                $data_categoria->categoria_id = $categoria;
                $data_categoria->save();
            }
            }
            $mensaje = "Registro guardado";
            return back()->with('mensaje');
        }else{
            
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Proyecto::find($id);
        $data->delete();

        $malla = Proyecto::orderBy('id', 'desc')->get();
        $ultimo = Proyecto::orderBy('id', 'desc')->first();
        $categorias = Categoria::all();
        $categorias = $categorias->pluck('nombre', 'id');
        $metodo = 'post';
        $accion = 'store';
        return view('admin.proyectos.index', compact('malla', 'ultimo', 'metodo', 'accion', 'categorias'));
    }
}
