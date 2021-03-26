<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\rol;
use App\Models\permiso;
use App\Models\rol_permiso;
use Illuminate\Support\Facades\DB;

class rolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = rol::all();
        $permisos = permiso::all();
        return view('admin/rol/index', ['roles' => $roles, 'permisos' => $permisos]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permisos = permiso::all();
        return view ('admin/rol/create', ['permisos' => $permisos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rol = new rol();
        $rol->nombre_rol = $request->get('nombre_rol');
        $rol->estado_rol = 'Activo';
        $rol->save();
        $rolRegistrado = DB::table('rol')->orderBy('id', 'desc')->first();
        $permisos = permiso::all();
        foreach ($permisos as $permiso){  
            if($request->get('permiso-'.$permiso->id) == 'on'){
                $permisoRol = new rol_permiso();
                $permisoRol->id_permiso = $permiso->id;
                $permisoRol->id_rol = $rolRegistrado->id;
                $permisoRol->save();
            }
        }
        return redirect('rol');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rol = rol::all();
        return view ('rol', ['rol'=> $rol]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rol = rol::find($id);
        $permiso = permiso::all();
        return view('admin/rol/edit', ['rol' => $rol, 'permisos' => $permiso]);
    
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
        $rol = rol::find($id);
        $rol->nombre_rol = $request->get('nombre_rol');
        $rol->estado_rol = $request->get('estado_rol');
        $rol->update();
        DB::select('SELECT eliminar_rol_permiso('.$id.')');  //llama funcion de la base de datos
        $permisos = permiso::all();
        foreach ($permisos as $permiso){  
            if($request->get('permiso-'.$permiso->id) == 'on'){
                $permisoRol = new rol_permiso();
                $permisoRol->id_permiso = $permiso->id;
                $permisoRol->id_rol = $id;
                $permisoRol->save();
            }
        }
        return redirect()->route('rol.index')->with('info','¡Datos actualizados exitosamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(rol $rol)
    {
        DB::select('SELECT eliminar_rol_permiso('.$rol->id.')');  //llama funcion de la base de datos
        $rol->delete();
        return redirect()->route('rol.index', $rol)->with('info','¡Dato eliminado exitosamente!');
    }
}
