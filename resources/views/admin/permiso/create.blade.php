@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content')
<div class="p-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <form class="p-4" action="{{route('permiso.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Nombre de la permiso</label>
                    <input type="text" class="form-control" name="nombre_permiso" aria-describedby="emailHelp" required>
                    @error('nombre')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Ruta de la permiso</label>
                    <input type="text" class="form-control" name="ruta_permiso" aria-describedby="emailHelp">
                    @error('ruta')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="d-flex justify-content-between">
                <input type="submit" class="btn btn-primary" value="Guardar">
                    <a type="button" class="btn btn-success" href="/permiso">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
</div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
console.log('Hi!');
</script>
@stop