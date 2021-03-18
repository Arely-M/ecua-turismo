<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\publicacion;
use Illuminate\Support\Facades\Storage;

class publicacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $publicacion = publicacion::all();
        return view ('admin/publicacion/index', ['publicaciones' => $publicacion]);
    }

    public function blog()
    {
        $publicacion = publicacion::all();
        return view ('mainPage/Blog', ['publicaciones' => $publicacion]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin/publicacion/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $publicacion = new  publicacion();
        $publicacion->titulo = $request->get('titulo');
        $publicacion->ubicacion = $request->get('ubicacion');
        $publicacion->descripcion = $request->get('descripcion');
        $imagen = $request->file('imagen')->store('public/imagenes');
        $publicacion->imagen = Storage::url($imagen);
        $publicacion->save();
        
        return redirect('publicacion');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(publicacion $publicacion)
    {
        return view ('mainPage/post', ['publicaciones' => $publicacion]);
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
