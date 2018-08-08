<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\TipoEntrega;

class TiposEntregaAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $malla = TipoEntrega::orderBy('id', 'desc')->get();
        $ultimo = TipoEntrega::orderBy('id', 'desc')->first();
        $metodo = 'post';
        $accion = 'store';
        return view('admin.tipos-entrega.index', compact('malla', 'ultimo', 'metodo', 'accion'));
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
        $data = new TipoEntrega();
        $data->titulo = $request->titulo;
        $data->parrafo = $request->parrafo;

        // dd($data);

        $data->save();

        $malla = TipoEntrega::orderBy('id', 'desc')->get();
        $ultimo = TipoEntrega::orderBy('id', 'desc')->first();
        $metodo = 'post';
        $accion = 'store';
        return view('admin.tipos-entrega.index', compact('malla', 'ultimo', 'metodo', 'accion'));
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
        $malla = TipoEntrega::orderBy('id', 'desc')->get();
        $ultimo = TipoEntrega::find($id);
        $metodo = 'put';
        $accion = 'update';
        return view('admin.tipos-entrega.index', compact('malla', 'ultimo', 'metodo', 'accion'));
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
        $data = TipoEntrega::find($id);
        $data->titulo = $request->titulo;
        $data->parrafo = $request->parrafo;

        // dd($data);

        $data->save();

        $malla = TipoEntrega::orderBy('id', 'desc')->get();
        $ultimo = TipoEntrega::find($id);
        $metodo = 'put';
        $accion = 'update';
        return view('admin.tipos-entrega.index', compact('malla', 'ultimo', 'metodo', 'accion'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
