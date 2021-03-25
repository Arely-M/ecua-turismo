@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content')
@if(session('info'))
<div id="toast" class="alert alert-success" style="height: 10vh">
    <strong>{{session('info')}}</strong>
    <button onclick="cerrar()" type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close"><span aria-hidden="true">&times;</span></button>
</div>
@endif
<div class="p-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="p-4">
                <div class="w-100 mb-4 row justify-content-md-between">
                    <label class="h4">Lista de provincias</label>
                    <a type="button" class="btn btn-success" href="provincias/create">Ingresar</a>
                </div>
                <!--Contenedor de listado de publicaciones-->
                @if($provincias->count())
                    <div>
                        <table id="provincias" class="table table-hover">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col text-center">id</th>
                                    <th scope="col">provincia</th>
                                    <th scope="col">descripcion</th>
                                    <th scope="col text-center"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($provincias as $provincia)
                                <tr>
                                    <td>{{$provincia->id}}</td>
                                    <td>{{$provincia->nombre}}</td>
                                    <td>{{$provincia->descripcion}}</td>
                                    <td>
                                        <div class="w-100 row justify-content-center">
                                            <a class="btn btn-primary mr-2" href="{{route('provincias.edit', $provincia)}}">Editar</a>
                                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                                                Eliminar
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @else 
                    <div class="text-center">
                        <strong>No hay ningún registros</strong>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Eliminar Registro</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ¿Desea eliminar el registro?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    @if($provincias->count())
                        <form action="{{route('provincias.destroy', $provincia)}}" method="POST">
                            <!--<button type="submit" class="btn btn-danger">Eliminar</button>-->
                            <button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                                Eliminar
                            </button>
                            @csrf
                            @method('delete')
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
@stop

@section('js')
</script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.7/js/responsive.bootstrap4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script>
    $(document).ready(function() {
        $('#provincias').DataTable({
            responsive: true,
            autowidth: false
        });
    });
</script>
<script>
    function cerrar() {
        document.getElementById("toast").style.display = "none";
    }
</script>
@stop