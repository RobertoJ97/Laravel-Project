@extends('adminlte::page')

@section('title',)

@section('content_header')

@stop

@section('content')
    <div class="row mt-2">
        <div class="col-md-6">
        <h4 class="text-left">Listado de Profesores</h4>
        </div>
        <div class="col-md-6">
            <div class="btn-group float-right">
                <a href="{{ route('profesor.create') }}" class="btn btn-primary">Registrar Profesor</a>
                
            </div>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-md-12 border-bottom"></div>
    </div>

    <div class="row ml-2 mr-2 mt-3">
        <table class="table table-bordered w-100" id="tablaprofesor">
            <thead class="thead-light">
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Solapin</th>
                    <th scope="col">Usuario</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($profesor as $profeso)
                    <tr>
                        <td>{{$profeso->nombre}}</td>
                        <td>{{$profeso->apellido}}</td>
                        <td>{{$profeso->solapin}}</td>
                        <td>{{$profeso->usuario}}</td>
                        <td>{{$profeso->correo}}</td>
                        <td class="text-center">
                            <form class="set_profesor" action="{{route('profesor.destroy',$profeso->id)}}" method="POST">
                                <a href="{{route('profesor.show',$profeso->id)}}" type="button" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Consultar Profesor"><i class="fa fa-eye"></i></a>
                                <a href="{{ url('/profesor/'.$profeso->id.'/edit') }}" type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Editar Profesor"><i class="fa fa-edit"></i></a>
                                <button class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Eliminar Profesor"><i class="fas fa-trash-alt"></i></button>
                                @csrf
                                @method('DELETE')
                            </form>
                        </td>
                    </tr>

                @endforeach
            </tbody>
        </table>
    </div>

@stop
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="{{ asset('css/dataTables.bootstrap5.min.css') }}">
@stop

@section('js')
<script src="{{ asset('js/jquery-3.5.1.js') }}"></script>
    <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('js/sweetalert211.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#tablaprofesor').DataTable({
                "language": {
                    "search": "Buscar",
                    "lengthMenu": "Mostrar _MENU_ Registros por Página",
                    "info": "Mostrando página _PAGE_ de _PAGES_",
                    "paginate": {
                        "previous": "Anterior",
                        "next": "Siguiente",
                        "first": "Primero",
                        "last": "Último",
                    }
                }
            });
        });
    </script>
    <script>
        $('#myModal').on('shown.bs.modal', function () {
        $('#myInput').trigger('focus')});
    </script>
    <script>
        $(function () {
        $('[data-toggle="tooltip"]').tooltip()
        });
    </script>
    @if(session('info')=='adicionar-profesor')
    <script>
        Swal.fire(
        'Registrado',
        'El profesor se registró con exito',
        'success'
        )
    </script>
    @endif
    @if(session('info')=='modificar-profesor')
    <script>
        Swal.fire(
        'Actualizado',
        'El profesor se actualizó con exito',
        'success'
        )
    </script>
    @endif
    @if(session('info')=='eliminar-profesor')
    <script>
        Swal.fire(
        'Eliminado',
        'El profesor se eliminó con exito',
        'success'
        )
    </script>
    @endif 
    <script>
        $('.set_profesor').submit(function(e) {
            e.preventDefault();
            Swal.fire({
                title: '¿Estás seguro?',
                text: "Este grupo se eliminara definitivamente",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, eliminar!',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    this.submit();
                }
            })
        });
    </script>
@stop
