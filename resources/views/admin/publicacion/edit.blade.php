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
            <form class="p-4" action="{{route('publicacion.update', $publicacion)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <h2>Editar publicación</h2>
                <div class="form-group">
                    <label for="exampleInputEmail1">Título</label>
                    <input type="text" class="form-control" name="titulo" aria-describedby="emailHelp" value="{{$publicacion->titulo}}">
                    @error('titulo')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Dirección</label>
                    <input type="text" class="form-control" name="ubicacion" value="{{$publicacion->ubicacion}}">
                    @error('ubicacion')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group col-md-4 p-0">
                    <label for="provincia_id">Provincia</label>
                    <select id="inputState" class="form-control" name="provincia_id">
                        @foreach ($provincias as $provincia)
                        <option value="{{ $provincia->id }}">{{$provincia->nombre}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Descripción</label>
                    <textarea class="form-control" name="descripcion" rows="6">{{$publicacion->descripcion}}</textarea>
                    @error('descripcion')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            @if($publicacion->imagen)
                                <img id="picture" class="img-fluid" src="{{asset('storage').'/'.$publicacion->imagen}}" alt="Imagen para la publicación">
                            @else
                                <img id="picture" class="img-fluid" src="https://cdn.pixabay.com/photo/2013/02/20/11/30/llamas-83780_960_720.jpg" alt="Imagen para la publicación">
                            @endif
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Cargar imagen</label>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <input id="imagen-file" type="file" class="form-control-file" name="imagen" accept="image/*" value="{{$publicacion->imagen}}">
                                    @error('imagen')
                                    <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    <!--<button type="submit" class="btn btn-primary">Actualizar Publicación</button>-->
                    <input type="submit" class="btn btn-primary"></input>
                    <a type="button" class="btn btn-success" href="/publicacion">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
</div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
@stop

@section('js')
<script>
    console.log('Hi!');
</script>
<script>
	//Cambiar imagen
        document.getElementById("imagen-file").addEventListener('change', cambiarImagen);

        function cambiarImagen(event){
            var file = event.target.files[0];

            var reader = new FileReader();
            reader.onload = (event) => {
                document.getElementById("picture").setAttribute('src', event.target.result); 
            };

            reader.readAsDataURL(file);
        }
</script>
@stop