<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\FichaTecnica;
use Storage;

class FichaTecnicaAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $malla = FichaTecnica::orderBy('id', 'desc')->get();
        $ultimo = FichaTecnica::orderBy('id', 'desc')->first();
        $metodo = 'post';
        $accion = 'store';
        return view('admin.ficha-tecnica.index', compact('malla', 'ultimo', 'metodo', 'accion'));
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
        $data = new FichaTecnica();

        if($request->tipo == 'Imagen'){
            if (!$request->file('imagen')){
                $mensaje = "Debe subir una imagen";
                return back()->with('mensaje');
            }

            $imagen = $request->file('imagen');
            $nombre_imagen = date('YmdHis').$imagen->getClientOriginalName();

            $resultado = Storage::put(
                'public/fichatecnica/'.$nombre_imagen,
                file_get_contents($request->file('imagen')->getRealPath())
            );

            if(!$resultado){
                dd('Error al guardar imagen');
            }else{
                $data->imagen = $request->imagen;
            }
        }

        $data->tipo = $request->tipo;
        $data->ancho = $request->ancho;
        $data->contenido = $request->contenido;
        
        // dd($data);

        $data->save();

        $malla = FichaTecnica::orderBy('id', 'desc')->get();
        $ultimo = FichaTecnica::orderBy('id', 'desc')->first();
        $metodo = 'post';
        $accion = 'store';
        return view('admin.ficha-tecnica.index', compact('malla', 'ultimo', 'metodo', 'accion'));
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
        $malla = FichaTecnica::orderBy('id', 'desc')->get();
        $ultimo = FichaTecnica::find($id);
        // dd($ultimo);
        $metodo = 'put';
        $accion = 'update';
        return view('admin.ficha-tecnica.index', compact('malla', 'ultimo', 'metodo', 'accion'));
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
        $data = FichaTecnica::find($id);

        if($request->file('imagen')){
            $imagen = $request->file('imagen');
            $nombre_imagen = date('YmdHis').$imagen->getClientOriginalName();

            $resultado = Storage::put(
                'public/fichatecnica/'.$nombre_imagen,
                file_get_contents($request->file('imagen')->getRealPath())
            );

            if(!$resultado){
                dd('Error al guardar imagen');
            }else{
                // Borrar imagen anterior
                Storage::delete('public/fichatecnica/'.$data->imagen);
                $data->imagen = $nombre_imagen;
            }
        }

        // Fin guardado imagen

        $data->tipo = $request->tipo;
        $data->ancho = $request->ancho;
        $data->contenido = $request->contenido;
        

        // dd($data);

        $data->save();

        $malla = FichaTecnica::orderBy('id', 'desc')->get();
        $ultimo = FichaTecnica::find($id);
        $metodo = 'put';
        $accion = 'update';
        return view('admin.ficha-tecnica.index', compact('malla', 'ultimo', 'metodo', 'accion'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = FichaTecnica::find($id);
        $data->delete();

        $malla = FichaTecnica::orderBy('id', 'desc')->get();
        $ultimo = FichaTecnica::orderBy('id', 'desc')->first();
        $metodo = 'post';
        $accion = 'update';
        return view('admin.ficha-tecnica.index', compact('malla', 'ultimo', 'metodo', 'accion'));
    }
}
