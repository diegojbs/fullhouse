<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Contacto;

class ContactosAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $malla = Contacto::orderBy('id', 'desc')->get();
        $ultimo = Contacto::orderBy('id', 'desc')->first();
        // dd($ultimo);
        return view('admin.contactos.index', compact('malla', 'ultimo'));
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
        $malla = Contacto::orderBy('id', 'desc')->get();
        $ultimo = Contacto::find($id);
        // dd($ultimo);
        return view('admin.contactos.index', compact('malla', 'ultimo'));
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
        $data = Contacto::find($id);
        $data->nombre = $request->nombre;
        $data->email = $request->email;
        $data->telefonos = $request->telefonos;
        $data->ciudad = $request->ciudad;
        $data->mensaje = $request->mensaje;

        // dd($data);

        $data->save();

        $malla = Contacto::orderBy('id', 'desc')->get();
        $ultimo = Contacto::find($id);
        // dd($ultimo);
        return view('admin.contactos.index', compact('malla', 'ultimo'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Contacto::find($id);
        $data->delete();

        $malla = Contacto::orderBy('id', 'desc')->get();
        $ultimo = Contacto::orderBy('id', 'desc')->first();
        // dd($ultimo);
        return view('admin.contactos.index', compact('malla', 'ultimo'));
    }
}
