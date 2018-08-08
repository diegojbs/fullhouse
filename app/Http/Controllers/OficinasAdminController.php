<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Oficina;

class OficinasAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $malla = Oficina::orderBy('id', 'desc')->get();
        $ultimo = Oficina::orderBy('id', 'desc')->first();
        $metodo = 'post';
        $accion = 'store';
        return view('admin.oficinas.index', compact('malla', 'ultimo', 'metodo', 'accion'));
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
        $data = new Oficina();
        $data->nombre = $request->nombre;
        $data->direccion = $request->direccion;
        $data->telefono = $request->telefono;

        // dd($data);

        $data->save();

        $malla = Oficina::orderBy('id', 'desc')->get();
        $ultimo = Oficina::orderBy('id', 'desc')->first();
        $metodo = 'post';
        $accion = 'store';
        return view('admin.oficinas.index', compact('malla', 'ultimo', 'metodo', 'accion'));
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
        $malla = Oficina::orderBy('id', 'desc')->get();
        $ultimo = Oficina::find($id);
        // dd($ultimo);
        $metodo = 'put';
        $accion = 'update';
        return view('admin.oficinas.index', compact('malla', 'ultimo', 'metodo', 'accion'));
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
        $data = Oficina::find($id);
        $data->nombre = $request->nombre;
        $data->direccion = $request->direccion;
        $data->telefono = $request->telefono;

        // dd($data);

        $data->save();

        $malla = Oficina::orderBy('id', 'desc')->get();
        $ultimo = Oficina::find($id);
        $metodo = 'put';
        $accion = 'update';
        return view('admin.oficinas.index', compact('malla', 'ultimo', 'metodo', 'accion'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Oficina::find($id);
        $data->delete();

        $malla = Oficina::orderBy('id', 'desc')->get();
        $ultimo = Oficina::orderBy('id', 'desc')->first();
        $metodo = 'post';
        $accion = 'update';
        return view('admin.oficinas.index', compact('malla', 'ultimo', 'metodo', 'accion'));
    }
}
