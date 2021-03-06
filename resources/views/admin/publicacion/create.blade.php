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
                <div class="row justify-content-between p-3">
                    <div class="form-group col-md-5 p-0">
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
                    <div class="form-group col-md-5 p-0">
                        <label for="id">Categoría</label>
                        <select id="inputState" class="custom-select" name="id" required>
                            <option selected disabled value="">Elegir una categoria</option>
                            @foreach ($categorias as $categoria)
                            <option value="{{ $categoria->id }}">{{$categoria->nombre_categoria}}</option>
                            @endforeach
                        </select>
                        <div class="invalid-feedback">
                            Por favor seleccione una categoría.
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Resumen</label>
                    <!--<textarea id="editor" class="form-control" name="descripcion" rows="6" required></textarea>-->
                    <textarea class="form-control" name="resumen" rows="3" require></textarea>
                    <div class="valid-feedback">
                        ¡Luce bien!
                    </div>
                    <div class="invalid-feedback">
                        Ingrese un resumen válido
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Descripción</label>
                    <!--<textarea id="editor" class="form-control" name="descripcion" rows="6" required></textarea>-->
                    <textarea id="my-editor" name="descripcion" class="form-control my-editor" rows="6" required></textarea>
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
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script>
    var editor_config = {
        path_absolute: "/",
        selector: "textarea.my-editor",
        plugins: [
            "advlist autolink lists link image charmap print preview hr anchor pagebreak",
            "searchreplace wordcount visualblocks visualchars code fullscreen",
            "insertdatetime media nonbreaking save table contextmenu directionality",
            "emoticons template paste textcolor colorpicker textpattern"
        ],
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
        relative_urls: false,
        file_browser_callback: function(field_name, url, type, win) {
            var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
            var y = window.innerHeight || document.documentElement.clientHeight || document.getElementsByTagName('body')[0].clientHeight;

            var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
            if (type == 'image') {
                cmsURL = cmsURL + "&type=Images";
            } else {
                cmsURL = cmsURL + "&type=Files";
            }

            tinyMCE.activeEditor.windowManager.open({
                file: cmsURL,
                title: 'Filemanager',
                width: x * 0.8,
                height: y * 0.8,
                resizable: "yes",
                close_previous: "yes",
                image_dimensions: false
            });
        },
        setup: function (editor) {
            editor.on('init', function(args) {
                editor = args.target;

                editor.on('NodeChange', function(e) {
                    if (e && e.element.nodeName.toLowerCase() == 'img') {
                        width = e.element.width;
                        height = e.element.height;
                        console.log("ancho: "+width);
                        console.log("altura: "+height);
                        if(width !== 0 && height !==0) {
                            tinyMCE.DOM.setAttribs(e.element, {'width': null, 'height': null});
                            tinyMCE.DOM.setAttribs(e.element, 
                                {'style': 'width:' + width + 'px; height:' + height + 'px;'});
                        }
                    }
                });
            });
        }  
    };

    tinymce.init(editor_config);
</script>
@stop