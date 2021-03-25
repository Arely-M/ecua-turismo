<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\provincias;
use Illuminate\Http\Request;

class provinciasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $provincia = provincias::all();
        return view ('admin/provincias/index', ['provincias' => $provincia]);
    }

    public function showDestinos()
    {
        $provincia = provincias::all();
        return view ('mainPage/destinos', ['provincias'=> $provincia]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin/provincias/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre'=> "required|unique:provincias",
            'descripcion'=>'required'
        ]);
        $provincia = new  provincias();
        $provincia->nombre = $request->get('nombre');
        $provincia->descripcion = $request->get('descripcion');
        $provincia->save();

        return redirect('provincias');
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
    public function edit(provincias $provincia)
    {
        return view ('admin/provincias/edit', ['provincia'=> $provincia]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, provincias $provincia)
    {
        $datos = request()->except(['_token','_method']);
        $request->validate([
            'nombre'=> "required|unique:provincias,nombre,$provincia->id",
            //'nombre'=> 'required',
            'descripcion'=>'required'
        ]);
        $provincia -> update($datos);
        return redirect()->route('provincias.index')->with('info','¡Datos actualizados exitosamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(provincias $provincia)
    {
        $provincia->delete();
        return redirect()->route('provincias.index', $provincia)->with('info','¡Dato eliminado exitosamente!');
    }
}
