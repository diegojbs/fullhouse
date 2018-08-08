<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Proyecto;
use App\DetalleCasa;

class DetallesCasasAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $data = new DetalleCasa();
        $data->proyecto_id = $request->proyecto_id;
        $data->descripcion = $request->descripcion;
        $data->save();

        $ultimo = DetalleCasa::where('proyecto_id', $data->proyecto_id)->first();
        // dd($ultimo);
        $padre = Proyecto::find($ultimo->proyecto_id);
        $malla = DetalleCasa::where('proyecto_id', $padre->id)->orderBy('id', 'desc')->get();
        $metodo = 'post';
        $accion = 'store';
        return view('admin.proyectos.show', compact('malla', 'ultimo', 'metodo', 'accion', 'padre'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ultimo = DetalleCasa::find($id);
        // dd($ultimo);
        $padre = Proyecto::find($ultimo->proyecto_id);
        $malla = DetalleCasa::where('proyecto_id', $padre->id)->orderBy('id', 'desc')->get();
        $metodo = 'put';
        $accion = 'update';
        return view('admin.proyectos.show', compact('malla', 'ultimo', 'metodo', 'accion', 'padre'));
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
        $data = DetalleCasa::find($id);
        $data->descripcion = $request->descripcion;
        $data->save();
        $ultimo = $data;
        // dd($ultimo);
        $padre = Proyecto::find($ultimo->proyecto_id);
        $malla = DetalleCasa::where('proyecto_id', $padre->id)->orderBy('id', 'desc')->get();
        $metodo = 'put';
        $accion = 'update';
        return view('admin.proyectos.show', compact('malla', 'ultimo', 'metodo', 'accion', 'padre'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = DetalleCasa::find($id);
        $data->delete();

        $padre = Proyecto::find($data->proyecto_id);
        $malla = DetalleCasa::where('proyecto_id', $padre->id)->orderBy('id', 'desc')->get();
        $ultimo = DetalleCasa::where('proyecto_id', $padre->id)->first();
        $metodo = 'post';
        $accion = 'store';
        return view('admin.proyectos.show', compact('malla', 'ultimo', 'metodo', 'accion', 'padre'));
    }
}
