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
            <form class="p-4" action="{{route('rol.update', $rol)}}" method="POST" enctype="multipart/form-data">
                @csrf
                
                @method('put')
                <div class="form-group">
                    <label for="exampleInputEmail1">Nombre del rol</label>
                    <input type="text" id="nombre" class="form-control" name="nombre_rol" value="{{$rol->nombre_rol}}">
                    @error('nombre')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Permisos</label>
                    @foreach ($permisos as $permiso)
                    <div class="form-group">
                        <label class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" name="{{ 'permiso-'.$permiso->id }}"><span class="custom-control-label">{{ $permiso->nombre_permiso}}</span>
                        </label>
                    </div>
                    @endforeach
                    @error('permiso')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Estado</label>
                    <input type="text" id="nombre" class="form-control" name="estado_rol" value="{{$rol->estado_rol}}">
                    @error('estado')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="d-flex justify-content-between">
                <input type="submit" class="btn btn-primary">
                    <a type="button" class="btn btn-success" href="/rol">Cancelar</a>
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