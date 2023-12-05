@extends('adminlte::page')

@section('title',)

@section('content_header')

@stop

@section('content')
    <div class="row mt-2">
        <div class="col-md-6">
        <h4 class="text-left">Listado de Plan de Formación</h4>
        </div>
        <div class="col-md-6">
            <div class="btn-group float-right">
                <a href="{{ route('plan.create') }}" class="btn btn-primary ">Registrar Plan de Formación</a>
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
                <th scope="col">Nombre Proyecto</th>
                <th scope="col">Centro Desarrollo</th>
                <th scope="col">Grupo Investigativo</th>
                <th scope="col">Disciplina</th>
                <th scope="col">Rol</th>
                <th scope="col">Opciones</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($plan as $pla)
                    <tr>
                        <td>{{$pla->nombre_proyecto}}</td>
                        <td>{{$pla->centro_desarrollo}}</td>
                        <td>{{$pla->grupo_investigacion}}</td>
                        <td>{{$pla->disciplina}}</td>
                        <td>{{$pla->rol_desempena}}</td>
                        <td class="text-center">
                            <form class="plan_eliminar" action="{{route('plan.destroy',$pla->id)}}" method="POST">
                                <a href="{{route('plan.show',$pla->id)}}" type="button" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Consultar Plan de Formación"><i class="fa fa-eye"></i></a>
                                <a href="{{ url('/plan/'.$pla->id.'/edit') }}" type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Editar Plan de Formación"><i class="fa fa-edit"></i></a>
                                <button class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Eliminar Plan de Formación"><i class="fas fa-trash-alt"></i></button>
                                @csrf
                                @method('DELETE')
                            </form>
                        </td>
                    </tr>
                    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLab" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLab">Eliminar Plan de Formación</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
            Desea eleminar el plan de formación seleccionado?
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

            </div>
        </div>
        </div>
    </div>
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
    @if(session('info')=='adicionar-plan')
    <script>
        Swal.fire(
        'Registrado',
        'El plan de formación se registró con exito',
        'success'
        )
    </script>
    @endif
    @if(session('info')=='modificar-plan')
    <script>
        Swal.fire(
        'Actualizado',
        'El plan de formación se actualizó con exito',
        'success'
        )
    </script>
    @endif
    @if(session('info')=='eliminar-plan')
    <script>
        Swal.fire(
        'Eliminado',
        'El plan de formación se eliminó con exito',
        'success'
        )
    </script>
    @endif
    <script>
        $('.plan_eliminar').submit(function(e) {
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
