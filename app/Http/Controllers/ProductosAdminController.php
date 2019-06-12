<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\ProductoPrefabricado;
use Storage;

class ProductosAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $malla = ProductoPrefabricado::orderBy('id', 'desc')->get();
        $ultimo = ProductoPrefabricado::orderBy('id', 'desc')->first();
        // dd($malla);
        $metodo = 'post';
        $accion = 'store';
        return view('admin.productos-prefabricados.index', compact('malla', 'ultimo', 'metodo', 'accion'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new ProductoPrefabricado();

            if (!$request->file('imagen')){
                $mensaje = "Debe subir una imagen";
                return back()->with('mensaje');
            }

            $imagen = $request->file('imagen');
            $nombre_imagen = date('YmdHis').$imagen->getClientOriginalName();

            $resultado = Storage::put(
                'public/productos/'.$nombre_imagen,
                file_get_contents($request->file('imagen')->getRealPath())
            );

            if(!$resultado){
                dd('Error al guardar imagen');
            }else{
                $data->imagen = $request->imagen;
            }

        $data->nombre = $request->nombre;
        $data->descripcion = $request->descripcion;
        
        // dd($data);

        $data->save();

        $malla = ProductoPrefabricado::orderBy('id', 'desc')->get();
        $ultimo = ProductoPrefabricado::orderBy('id', 'desc')->first();
        $metodo = 'post';
        $accion = 'store';
        return view('admin.productos-prefabricados.index', compact('malla', 'ultimo', 'metodo', 'accion'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $malla = ProductoPrefabricado::orderBy('id', 'desc')->get();
        $ultimo = ProductoPrefabricado::find($id);
        // dd($ultimo);
        $metodo = 'put';
        $accion = 'update';
        return view('admin.productos-prefabricados.index', compact('malla', 'ultimo', 'metodo', 'accion'));
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
        $data = ProductoPrefabricado::find($id);

        if($request->file('imagen')){
            $imagen = $request->file('imagen');
            $nombre_imagen = date('YmdHis').$imagen->getClientOriginalName();

            $resultado = Storage::put(
                'public/productos/'.$nombre_imagen,
                file_get_contents($request->file('imagen')->getRealPath())
            );

            if(!$resultado){
                dd('Error al guardar imagen');
            }else{
                // Borrar imagen anterior
                Storage::delete('public/productos/'.$data->imagen);
                $data->imagen = $nombre_imagen;
            }
        }

        // Fin guardado imagen

        $data->nombre = $request->nombre;
        $data->descripcion = $request->descripcion;
        

        // dd($data);

        $data->save();

        $malla = ProductoPrefabricado::orderBy('id', 'desc')->get();
        $ultimo = ProductoPrefabricado::find($id);
        $metodo = 'put';
        $accion = 'update';
        return view('admin.productos-prefabricados.index', compact('malla', 'ultimo', 'metodo', 'accion'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = ProductoPrefabricado::find($id);
        $data->delete();

        $malla = ProductoPrefabricado::orderBy('id', 'desc')->get();
        $ultimo = ProductoPrefabricado::orderBy('id', 'desc')->first();
        $metodo = 'post';
        $accion = 'update';
        return view('admin.productos-prefabricados.index', compact('malla', 'ultimo', 'metodo', 'accion'));
    }
}
