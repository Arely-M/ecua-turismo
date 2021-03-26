@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content')
@if(session('info'))
<div class="bg-success">
    <strong>{{session('info')}}</strong>
</div>
@endif
<div class="p-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <form class="p-4" action="{{route('permiso.update', $permiso)}}" method="POST" enctype="multipart/form-data">
                @csrf
                
                @method('put')
                <div class="form-group">
                    <label for="exampleInputEmail1">Nombre del permiso</label>
                    <input type="text" id="nombre" class="form-control" name="nombre_permiso" value="{{$permiso->nombre_permiso}}">
                    @error('nombre')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Ruta del permiso</label>
                    <input type="text" id="ruta" class="form-control" name="ruta_permiso" value="{{$permiso->ruta_permiso}}">
                    @error('rura')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Estado</label>
                    <input type="text" id="ruta" class="form-control" name="estado_permiso" value="{{$permiso->estado_permiso}}">
                    @error('estado')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="d-flex justify-content-between">
                <input type="submit" class="btn btn-primary">
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