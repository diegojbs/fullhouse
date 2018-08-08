<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Categoria;

class CategoriasAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $malla = Categoria::orderBy('id', 'desc')->get();
        $ultimo = Categoria::orderBy('id', 'desc')->first();
        $metodo = 'post';
        $accion = 'store';
        return view('admin.categorias.index', compact('malla', 'ultimo', 'metodo', 'accion'));
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
        $data = new Categoria();
        $data->nombre = $request->nombre;

        // dd($data);

        $data->save();

        $malla = Categoria::orderBy('id', 'desc')->get();
        $ultimo = Categoria::orderBy('id', 'desc')->first();
        $metodo = 'post';
        $accion = 'store';
        return view('admin.categorias.index', compact('malla', 'ultimo', 'metodo', 'accion'));
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
        $malla = Categoria::orderBy('id', 'desc')->get();
        $ultimo = Categoria::find($id);
        // dd($ultimo);
        $metodo = 'put';
        $accion = 'update';
        return view('admin.categorias.index', compact('malla', 'ultimo', 'metodo', 'accion'));
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
        $data = Categoria::find($id);
        $data->nombre = $request->nombre;

        // dd($data);

        $data->save();

        $malla = Categoria::orderBy('id', 'desc')->get();
        $ultimo = Categoria::find($id);
        $metodo = 'put';
        $accion = 'update';
        return view('admin.categorias.index', compact('malla', 'ultimo', 'metodo', 'accion'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Categoria::find($id);
        $data->delete();

        $malla = Categoria::orderBy('id', 'desc')->get();
        $ultimo = Categoria::orderBy('id', 'desc')->first();
        $metodo = 'post';
        $accion = 'update';
        return view('admin.categorias.index', compact('malla', 'ultimo', 'metodo', 'accion'));
    }
}
