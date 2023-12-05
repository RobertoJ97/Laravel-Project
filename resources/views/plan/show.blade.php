@extends('adminlte::page')

@section('title',)

@section('content_header')

@stop

@section('content')
<div class="row mt-2">
    <div class="col-md-6">
    <h4 class="text-left">Detalles del Plan de Formación</h4>
    </div>
    <div class="col-md-6">
        <div class="btn-group float-right">
            <a href="{{ route('plan.create') }}" class="btn btn-primary">Registrar Plan de Formación</a>
           
        </div>
    </div>
</div>
<div class="row mt-2">
    <div class="col-md-12 border-bottom"></div>
</div>
<div class="card text-center">
    <div class="card-header">
      Detalles del plan de formación {{ $plan->id }}
    </div>
    <div class="card-body">
        <div class="text-center">
            <img src="{{ asset('/vendor/adminlte/dist/img/download.png') }}" class="rounded-circle img-thumbnail" alt="20px">
        </div>
            <div class="row mt-2">
                <div class="col-md-4">
                    <p class="text-center ml-3 pl-3"><b>Nombre del Proyecto:</b>{{ $plan->nombre_proyecto }}</p>
                </div>
                <div class="col-md-4 text-center">
                    <p class="text-center"><b>Centro de Desarrollo:</b>{{ $plan->centro_desarrollo }}</p>
                </div>
                <div class="col-md-4 text-center">
                    <p class="text-center mr-3 pr-3"><b>Grupo Investigativo:</b>{{ $plan->grupo_investigacion }}</p>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-4">
                    <p class="text-center ml-3 pl-3"><b>Disciplina:</b>{{ $plan->disciplina }}</p>
                </div>
                <div class="col-md-4 text-center">
                    <p class="text-center"><b>Asignatura:</b>{{ $plan->asignatura }}</p>
                </div>
                <div class="col-md-4 text-center">
                    <p class="text-center mr-3 pr-3"><b>Cantidad de Horas total:</b>{{ $plan->cant_horas }} horas</p>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-4">
                    <p class="text-center ml-3 pl-3"><b>Cantidad de Horas Semanal:</b>{{ $plan->cant_horas_semanal }} horas</p>
                </div>
                <div class="col-md-4 text-center">
                    <p class="text-center"><b>Tipo de Proyecto:</b>{{ $plan->tipo_proyecto }}</p>
                </div>
                <div class="col-md-4 text-center">
                    <p class="text-center mr-3 pr-3"><b>Estudiante:</b>{{ $plan->estudiantes->nombre }} {{ $plan->estudiantes->apellido }}</p>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-4">
                    <p class="text-center ml-3 pl-3"><b>Solapin del Estudiante:</b>{{ $plan->estudiantes->solapin }}</p>
                </div>
                <div class="col-md-4 text-center">
                    <p class="text-center"><b>Rol:</b>{{ $plan->rol_desempena }}</p>
                </div>
                <div class="col-md-4 text-center">
                    <p class="text-center mr-3 pr-3"><b>Profesor PID:</b>{{ $plan->profesor->nombre }} {{ $plan->profesor->apellido }}</p>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-4">
                    <p class="text-center ml-3 pl-3"><b>SET:</b>{{ $plan->set->nombre }} {{ $plan->set->apellido }}</p>
                </div>
                <div class="col-md-4">
                    <p class="text-center ml-3 pl-3"><b>Responsable de PID:</b>{{ $plan->responsable->nombre }} {{ $plan->responsable->apellido }}</p>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <h5 class="text-center border-bottom">Tareas del Plan de Formación</h5>
                </div>
            </div>

                <div class="row mt-2">
                    @foreach($plan->tareas as $tarea)
                    <div class="col-md-4">
                        <p class="text-center"><b>Actividades de la Tarea:</b>{{ $tarea->actividades }}
                        </br>
                            <b>Evaluación:</b>
                           @if($tarea->evaluacion==null)
                             {{ 'Sin Nota Aún' }}
                           @endif
                           {{ $tarea->evaluacion }}
                        </p>
                    </div>
                    @endforeach

                </div>

            <div class="btn-group mt-2">
            <a href="{{ route("plan.index") }}" type="button" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Regresar Estudiante"><i class="fa fa-reply"></i></a>
            &nbsp;
            <a href="{{ url('/plan/'.$plan->id.'/edit') }}" type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Editar Estudiante"><i class="fa fa-edit"></i></a>
        </div>
    </div>
</div>
@stop


@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/ionicons/css/ionicons.min.css') }}">
@stop

@section('js')

@stop
