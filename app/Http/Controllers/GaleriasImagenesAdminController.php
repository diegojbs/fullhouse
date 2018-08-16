<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\ImagenGaleria;
use App\Galeria;
use Storage;

class GaleriasImagenesAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $id)
    {
        dd('Index xde imagenes de galerias');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        dd('Aqui');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ultimo = ImagenGaleria::find($id);
        $padre = Galeria::where('id',$ultimo->galeria_id)->first();
        $malla = ImagenGaleria::where('galeria_id', $padre->id)->orderBy('id', 'desc')->get();
        $metodo = 'put';
        $accion = 'update';
        return view('admin.galerias.show', compact('malla', 'ultimo', 'metodo', 'accion', 'padre'));
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
        $data = ImagenGaleria::find($id);

        if($request->file('imagen')){
            
            $imagen = $request->file('imagen');
            $nombre_imagen = date('YmdHis').$imagen->getClientOriginalName();

            $resultado = Storage::put(
                'public/imagenesgalerias/'.$nombre_imagen,
                file_get_contents($request->file('imagen')->getRealPath())
            );

            if(!$resultado){
                dd('Error al guardar imagen');
            }else{
                // Borrar imagen anterior
                Storage::delete('public/imagenesgalerias/'.$data->imagen);
                $data->imagen = $nombre_imagen;
            }
        }

        // Fin guardado imagen

        $data->save();
        $ultimo = $data;

        // $ultimo = ImagenGaleria::find($id);
        $padre = Galeria::where('id',$ultimo->galeria_id)->first();
        $malla = ImagenGaleria::where('galeria_id', $padre->id)->orderBy('id', 'desc')->get();
        $metodo = 'put';
        $accion = 'update';
        return view('admin.galerias.show', compact('malla', 'ultimo', 'metodo', 'accion', 'padre'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = ImagenGaleria::find($id);
        Storage::delete('public/imagenesgalerias/'.$data->imagen);
        $data->delete();

        $padre = Galeria::where('id',$data->galeria_id)->first();
        $malla = ImagenGaleria::where('galeria_id', $padre->id)->orderBy('id', 'desc')->get();
        $metodo = 'post';
        $accion = 'store';
        return view('admin.galerias.show', compact('malla', 'ultimo', 'metodo', 'accion', 'padre'));
    }
}
