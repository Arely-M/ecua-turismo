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
            <form class="p-4" action="{{route('provincias.update', $provincia)}}" method="POST" enctype="multipart/form-data">
                @csrf
                
                @method('put')
                <div class="form-group">
                    <label for="exampleInputEmail1">Nombre de la provincia</label>
                    <input type="text" id="nombre" class="form-control" name="nombre" value="{{$provincia->nombre}}">
                    @error('nombre')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Descripción</label>
                    <textarea class="form-control" name="descripcion" rows="3">{{$provincia->descripcion}}</textarea>
                    @error('descripcion')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="d-flex justify-content-between">
                <input type="submit" class="btn btn-primary">
                    <a type="button" class="btn btn-success" href="/provincias">Cancelar</a>
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