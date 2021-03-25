@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content')
<div class="p-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <form class="p-4 needs-validation" action="{{route('publicacion.store')}}" method="POST" enctype="multipart/form-data" novalidate>
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Título</label>
                    <input id="validationCustom01" type="text" class="form-control" name="titulo" aria-describedby="emailHelp" required>
                    <div class="valid-feedback">
                        ¡Luce bien!
                    </div>
                    <div class="invalid-feedback">
                        Ingrese un título válido
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Dirección</label>
                    <input type="text" class="form-control" name="ubicacion" required>
                    <div class="valid-feedback">
                        ¡Luce bien!
                    </div>
                    <div class="invalid-feedback">
                        Ingrese una dirección válida
                    </div>
                </div>
                <div class="form-group col-md-4 p-0">
                    <label for="provincia_id">Provincia</label>
                    <select id="inputState" class="custom-select" name="provincia_id" required>
                        <option selected disabled value="">Elegir una provincia</option>
                        @foreach ($provincias as $provincia)
                        <option value="{{ $provincia->id }}">{{$provincia->nombre}}</option>
                        @endforeach
                    </select>
                    <div class="invalid-feedback">
                        Por favor seleccione una provincia.
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Descripción</label>
                    <textarea class="form-control" name="descripcion" rows="3" required></textarea>
                    <div class="valid-feedback">
                        ¡Luce bien!
                    </div>
                    <div class="invalid-feedback">
                        Ingrese una descripción válida
                    </div>
                </div>
                <div class="mb-3" style="">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img id="picture" class="img-fluid" src="https://cdn.pixabay.com/photo/2013/02/20/11/30/llamas-83780_960_720.jpg" alt="Imagen para la publicación">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Cargar imagen</label>
                                    <p class="card-text">La imagen que ingresara se mostrara como principal dentro de la publicación</p>
                                    <input id="imagen-file" type="file" class="form-control-file" name="imagen" accept="image/*" required>
                                    <div class="valid-feedback">
                                        ¡Luce bien!
                                    </div>
                                    <div class="invalid-feedback">
                                        Ingrese una imagen para la publicación
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    <input type="submit" class="btn btn-primary">
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

    function cambiarImagen(event) {
        var file = event.target.files[0];

        var reader = new FileReader();
        reader.onload = (event) => {
            document.getElementById("picture").setAttribute('src', event.target.result);
        };

        reader.readAsDataURL(file);
    }
</script>

<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>
@stop