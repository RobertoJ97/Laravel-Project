@extends('adminlte::page')

@section('title',)

@section('content_header')

@stop

@section('content')
    <div class="row mt-2">
        <div class="col-md-6">
        <h4 class="text-left">Listado de Estudiantes</h4>
        </div>
        <div class="col-md-6">
            <div class="btn-group float-right">
                <a href="{{ route('estudiantes.create') }}" class="btn btn-primary">Registrar Estudiante</a>

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
                <th scope="col">Grupo</th>
                <th scope="col">Correo</th>
                <th class="text-center" scope="col">Opciones</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($estudiantes as $estudiante)
                    <tr>
                        <td>{{$estudiante->nombre}}</td>
                        <td>{{$estudiante->apellido}}</td>
                        <td>{{$estudiante->solapin}}</td>
                        <td>{{$estudiante->grupo}}</td>
                        <td>{{$estudiante->correo}}</td>
                        <td class="text-center">
                            <form class="formulario_eliminar" action="{{route('estudiantes.destroy',$estudiante->id)}}" method="POST">
                            <a href="{{ route('estudiantes.show',$estudiante->id) }}" type="button" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Consultar Estudiante"><i class="fa fa-eye"></i></a>
                            <a href="{{ url('/estudiantes/'.$estudiante->id.'/edit') }}" type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Editar Estudiante"><i class="fa fa-edit"></i></a>
                            <button class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Eliminar Estudiante"><i class="fas fa-trash-alt"></i></button>
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
@if(session('info')=='adicionar-estudiante')
<script>
    Swal.fire(
    'Registrado',
    'El estudiante se registró con exito',
    'success'
    )
</script>
@endif
@if(session('info')=='modificar-estudiante')
<script>
    Swal.fire(
    'Actualizado',
    'El estudiante se actualizó con exito',
    'success'
    )
</script>
@endif
@if(session('info')=='eliminar-estudiante')
<script>
    Swal.fire(
    'Eliminado',
    'El estudiante se eliminó con exito',
    'success'
    )
</script>
@endif
<script>
    $('.formulario_eliminar').submit(function(e) {
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
