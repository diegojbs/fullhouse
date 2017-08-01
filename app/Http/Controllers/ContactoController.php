<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Contacto;

use Mail;

class ContactoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('crm.gracias');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       if (!$request->has('nombre') || !$request->has('email') || !$request->has('telefonos') || !$request->has('ciudad') || !$request->has('mensaje')){
          return back();
        }

        // dd($request->email);
        if (!$request->has('nombre') || !$request->has('email') || !$request->has('telefonos') || !$request->has('ciudad') || !$request->has('mensaje')){
          return back();
        }

        $contacto = new Contacto();


        $contacto->nombre = $request->nombre;
        $contacto->email = $request->email;
        $contacto->telefonos = $request->telefonos;
        $contacto->ciudad = $request->ciudad;
        $contacto->mensaje = $request->mensaje;
        $contacto->t_datos = $request->t_datos;

        $respuesta = $contacto->save();

        $contacto->enviarEmail($request);
        // dd($respuesta);

        return view('crm.gracias', ['datos' => $request]);
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
        //
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
