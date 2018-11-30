<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Video;

class VideosAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $malla = Video::orderBy('id', 'desc')->get();
        $ultimo = Video::orderBy('id', 'desc')->first();
        $metodo = 'post';
        $accion = 'store';
        return view('admin.videos.index', compact('malla', 'ultimo', 'metodo', 'accion'));
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
        $data = new Video();
        $data->titulo = $request->titulo;
        $data->descripcion = $request->descripcion;
        $data->url_video = $request->url_video;
        $data->orden = $request->orden;

        // dd($data);

        $data->save();

        $malla = Video::orderBy('id', 'desc')->get();
        $ultimo = Video::orderBy('id', 'desc')->first();
        $metodo = 'post';
        $accion = 'store';
        return view('admin.videos.index', compact('malla', 'ultimo', 'metodo', 'accion'));
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
        $malla = Video::orderBy('id', 'desc')->get();
        $ultimo = Video::find($id);
        // dd($ultimo);
        $metodo = 'put';
        $accion = 'update';
        return view('admin.videos.index', compact('malla', 'ultimo', 'metodo', 'accion'));
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
        $data = Video::find($id);
        $data->titulo = $request->titulo;
        $data->descripcion = $request->descripcion;
        $data->url_video = $request->url_video;
        $data->orden = $request->orden;

        // dd($data);

        $data->save();

        $malla = Video::orderBy('id', 'desc')->get();
        $ultimo = Video::find($id);
        $metodo = 'put';
        $accion = 'update';
        return view('admin.videos.index', compact('malla', 'ultimo', 'metodo', 'accion'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Video::find($id);
        $data->delete();

        $malla = Video::orderBy('id', 'desc')->get();
        $ultimo = Video::orderBy('id', 'desc')->first();
        $metodo = 'post';
        $accion = 'update';
        return view('admin.videos.index', compact('malla', 'ultimo', 'metodo', 'accion'));
    }
}
