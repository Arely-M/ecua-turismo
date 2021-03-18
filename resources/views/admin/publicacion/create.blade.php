@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content')
<div class="p-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <form class="p-4" action="{{route('publicacion.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Título</label>
                    <input type="text" class="form-control" name="titulo" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted">Escribe el nombre del lugar o un tema relacionado</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Ubicación</label>
                    <input type="text" class="form-control" name="ubicacion">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Descripción</label>
                    <textarea class="form-control" name="descripcion" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Cargar imagen</label>
                    <input type="file" class="form-control-file" name="imagen" accept="image/*">
                </div>
                <input type="submit" class="btn btn-primary"></input>
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