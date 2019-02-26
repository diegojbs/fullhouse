<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Parametro;

class ParametroAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $malla = Parametro::orderBy('id', 'desc')->get();
        // $ultimo = Parametro::orderBy('id', 'desc')->first();
        $metodo = 'put';
        $accion = 'update';
        // dd($malla[0]->campo1);
        // return view('admin.parametros.index', compact('malla', 'ultimo', 'metodo', 'accion'));
        return view('admin.parametros.index', compact('malla', 'metodo', 'accion'));
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
        dd('Guardar');
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
        //
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
        $data = Parametro::find($id);
        $data->campo1 = $request->campo1;
        $data->campo2 = $request->campo2;

        // dd($data);

        $data->save();

        $malla = Parametro::orderBy('id', 'desc')->get();
        // $ultimo = Parametro::find($id);
        $metodo = 'put';
        $accion = 'update';
        // return view('admin.parametros.index', compact('malla', 'ultimo', 'metodo', 'accion'));
        return view('admin.parametros.index', compact('malla', 'metodo', 'accion'));
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
