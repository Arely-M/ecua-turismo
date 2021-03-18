@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content')
<div class="p-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="p-4">
                <div class="w-100 mb-4 row justify-content-md-between">
                    <label class="h4">Lista de publicaciones</label>
                    <a type="button" class="btn btn-success" href="publicacion/create">Publicar</a>
                </div>
                <!--Contenedor de listado de publicaciones-->
                <div>
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th scope="col text-center">Titulo</th>
                                <th scope="col">Ubicación</th>
                                <th scope="col text-center">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($publicaciones as $publicacion)
                            <tr>
                                <td>{{$publicacion->titulo}}</td>
                                <td>{{$publicacion->ubicacion}}</td>
                                <!--
                                <td>
                                    <img src="{{$publicacion->imagen}}" class="img-thumbnail" style="width: 180px; height: 180px" alt="">
                                </td>-->
                                <td>
                                    <div class="w-100 row justify-content-center">
                                        <button type="button" class="btn btn-success mr-2" data-toggle="modal" data-target="#exampleModal">Ver</button>
                                        <button type="button" class="btn btn-primary mr-2">Editar</button>
                                        <button type="button" class="btn btn-danger">Eliminar</button>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!--Moda para visualizar las publicaciones-->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="titlePublication">Título de la publicación</label>
                                <label for="titlePublication">Ubicación</label>
                                <label for="titlePublication">Imagen</label>
                                <img src="" alt="Aquí va la imagen">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                    </div>
                </div>
                </div>
            </div>
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