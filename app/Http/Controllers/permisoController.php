<?php

namespace App\Http\Controllers;

use App\Models\permiso;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class permisoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permisos = permiso::all();
        return view('admin/permiso/index', ['permisos' => $permisos]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin/permiso/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $permiso = new permiso();
        $permiso->nombre_permiso = $request->get('nombre_permiso');
        $permiso->ruta_permiso = $request->get('ruta_permiso');
        $permiso->estado_permiso = 'Activo';
        $permiso->save();
        return redirect('permiso');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pemriso = permiso::all();
        return view ('permiso', ['pemriso'=> $pemriso]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $permiso = permiso::find($id);
        return view('admin/permiso/edit', ['permiso' => $permiso]);
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
        $permiso = permiso::find($id);
        $permiso->nombre_permiso = $request->get('nombre_permiso');
        $permiso->ruta_permiso = $request->get('ruta_permiso');
        $permiso->estado_permiso = $request->get('estado_permiso');
        $permiso->update();
        return redirect()->route('permiso.index')->with('info','¡Datos actualizados exitosamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(permiso $permiso)
    {
        $permiso->delete();
        return redirect()->route('permiso.index', $permiso)->with('info','¡Dato eliminado exitosamente!');
    }
}
