<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Galeria;
use App\ImagenGaleria;

class GaleriasAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $malla = Galeria::orderBy('id', 'desc')->get();
        // dd($malla);
        $ultimo = Galeria::orderBy('id', 'desc')->first();
        $metodo = 'post';
        $accion = 'store';
        return view('admin.galerias.index', compact('malla', 'ultimo', 'metodo', 'accion'));
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
        $data = new Galeria();
        $data->titulo = $request->titulo;
        $data->orden = $request->orden;

        // dd($data);

        $data->save();

        $malla = Galeria::orderBy('id', 'desc')->get();
        $ultimo = Galeria::orderBy('id', 'desc')->first();
        $metodo = 'post';
        $accion = 'store';
        return view('admin.galerias.index', compact('malla', 'ultimo', 'metodo', 'accion'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $padre = Galeria::find($id);
        $malla = ImagenGaleria::where('galeria_id', $padre->id)->orderBy('id', 'desc')->get();
        $ultimo = ImagenGaleria::orderBy('id', 'desc')->first();
        $metodo = 'post';
        $accion = 'store';
        return view('admin.galerias.show', compact('malla', 'ultimo', 'metodo', 'accion', 'padre'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // dd('Edit');
        $malla = Galeria::orderBy('id', 'desc')->get();
        $ultimo = Galeria::find($id);
        $metodo = 'put';
        $accion = 'update';
        return view('admin.galerias.index', compact('malla', 'ultimo', 'metodo', 'accion'));
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
        $data = Galeria::find($id);
        $data->titulo = $request->titulo;
        $data->orden = $request->orden;

        // dd($data);

        $data->save();

        $malla = Galeria::orderBy('id', 'desc')->get();
        $ultimo = Galeria::find($id);
        $metodo = 'put';
        $accion = 'update';
        return view('admin.galerias.index', compact('malla', 'ultimo', 'metodo', 'accion'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Galeria::find($id);
        $data->delete();

        $malla = Galeria::orderBy('id', 'desc')->get();
        $ultimo = Galeria::orderBy('id', 'desc')->first();
        $metodo = 'post';
        $accion = 'store';
        return view('admin.galerias.index', compact('malla', 'ultimo', 'metodo', 'accion'));
    }
}
