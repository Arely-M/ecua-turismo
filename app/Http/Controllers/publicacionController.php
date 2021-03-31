<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\publicacion;
use App\Models\provincias;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StorePublicacionRequest;

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
        //$publicacion = publicacion::orderBy('id', 'desc')->limit(2)->get();
        $publicacion = publicacion::paginate(6);
        return view ('mainPage/Blog', ['publicaciones' => $publicacion]);
    }

    public function galeria()
    {
        return view ('mainPage/Galeria');
    }

    public function filtrar(provincias $provincia)
    {
        $publicacion = publicacion::where('id_provincia', $provincia->id)->get();
        //return $publicacion;
        return view ('mainPage/lugares', ['publicaciones' => $publicacion], ['provincias' => $provincia]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $provincia = provincias::all();
        return view ('admin/publicacion/create',  ['provincias' => $provincia]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        //$publicacion = new  publicacion();
        $publicacion = new  publicacion();
        $publicacion->titulo = $request->get('titulo');
        $publicacion->ubicacion = $request->get('ubicacion');
        $publicacion->descripcion = $request->get('descripcion');
        //$imagen = $request->file('imagen')->store('public/imagenes');
        //$publicacion->imagen = Storage::url($imagen);
        if($request->hasFile('imagen')){
            $publicacion['imagen'] = $request->file('imagen')->store('imagenes','public');
        }
        $publicacion->id_provincia = $request->get("provincia_id");
        $publicacion->save();
        return redirect('publicacion')->with("info","¡Se ha creado la publicación exitosamente!");
    }

    /*
    public function store(StorePublicacionRequest $request)
    {
        //$publicacion = new  publicacion();
        $publicacion = publicacion::create($request->except('_token'));
        $publicacion->titulo = $request->get('titulo');
        $publicacion->ubicacion = $request->get('ubicacion');
        $publicacion->descripcion = $request->get('descripcion');
        //$imagen = $request->file('imagen')->store('public/imagenes');
        //$publicacion->imagen = Storage::url($imagen);
        if($request->hasFile('imagen')){
            $publicacion['imagen'] = $request->file('imagen')->store('imagenes','public');
        }
        $publicacion->id_provincia = $request->get("provincia_id");
        $publicacion->save();
        return redirect('publicacion')->with("info","¡Se ha creado la publicación exitosamente!");
    }
    */

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(publicacion $publicacion)
    {
        //return view ('mainPage/post', ['publicaciones' => $publicacion]);
    }

    public function post(publicacion $publicacion)
    {
        return view ('mainPage/post', ['publicaciones' => $publicacion]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(publicacion $publicacion)
    {
        $provincia = provincias::all();
        return view ('admin/publicacion/edit', ['publicacion' => $publicacion], ['provincias' => $provincia]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StorePublicacionRequest $request, publicacion $publicacion)
    {
        $datos = request()->except(['_token','_method']);
        if($request->hasFile('imagen')){
            Storage::delete('public/'.$publicacion->imagen);
            $datos['imagen'] = $request->file('imagen')->store('imagenes','public');
        }
        $publicacion -> update($datos);
        return redirect()->route('publicacion.index')->with('info','¡La publicacion se actualizo exitosamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(publicacion $publicacion)
    {
        $publicacion->delete();
        if($publicacion->imagen){
            Storage::delete('public/'.$publicacion->imagen);
        }
        return redirect()->route('publicacion.index')->with('info','¡Dato eliminado exitosamente!');;
    }
}
