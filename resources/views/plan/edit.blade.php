@extends('adminlte::page')

@section('title',)

@section('content_header')

@stop

@section('content')
<div class="row mt-2">
    <h4 class="text-center border-bottom">Modificando Plan de Formación número {{ $plan->id }}</h4>
</div>
<div class="row ml-4 mr-4 pl-4 pr-4">
    <form action="{{ url('/plan/'.$plan->id) }}" method="POST">
        @csrf
        {{ method_field('PATCH') }}
        <div class="row mt-1">
            <div class="col">
                <label for="estudiantes">Estudiantes</label>
                <select class="form-control" name="estudiantes_id" id="estudiantes_id" value="{{ $plan->estudiantes->nombre}} {{ $plan->estudiantes->apellido}}">
                    @foreach ($estudiantes as $e)
                    <option value="{{ $e->id }}">{{ $e->nombre }} {{ $e->apellido }}</option>
                    @endforeach
                </select>
                @error('estudiantes_id')
                <strong class="error-message text-danger">{{ "Seleccione una opción" }}</strong>
                @enderror
            </div>
            <div class="col">
                <label for="estudiantes">SET</label>
                <select class="form-control" name="set_id" id="set_id" value="{{ $plan->set->nombre}} {{ $plan->set->apellido}}">
                    @foreach ($set as $s)
                    <option value="{{ $s->id }}">{{ $s->nombre }} {{ $s->apellido }}</option>
                    @endforeach
                </select>
                @error('set_id')
                <strong class="error-message text-danger"> {{ "Seleccione una opción" }} </strong>
                @enderror
            </div>
        </div>
        <div class="row mt-2">
            <div class="col">
                <label for="estudiantes">Responsable</label>
                <select class="form-control" name="responsable_id" id="responsable_id" value="{{ $plan->responsable->nombre}} {{ $plan->responsable->apellido}}">

                    @foreach ($responsable as $r)
                    <option value="{{ $r->id }}">{{ $r->nombre }} {{ $r->apellido }}</option>
                    @endforeach
                </select>
                @error('responsable_id')
                <strong class="error-message text-danger"> {{ "Seleccione una opción" }} </strong>
                @enderror
            </div>
            <div class="col">
                <label for="estudiantes">Profesor</label>
                <select class="form-control" name="profesor_id" id="profesor_id" value="{{ $plan->profesor->nombre}} {{ $plan->profesor->apellido}}">

                    @foreach ($profesor as $p)
                    <option value="{{ $p->id }}">{{ $p->nombre }} {{ $p->apellido }}</option>
                    @endforeach
                    @error('profesor_id')
                    <strong class="error-message text-danger"> {{ "Seleccione una opción" }} </strong>
                    @enderror
                </select>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col">
                <div class="form-group">
                {!! Form::label('actividades', 'Tareas:') !!}
                {!! Form::select('tareas_id[]', $tareas, null, ['class' => 'form-control selectpicker','multiple' => 'multiple', 'id' => '$plan->tareas_id', 'title' => '--Seleccione--']) !!}

            </div>
        </div>
            {{-- <div class="form-group">
            {!! Form::label('name', 'Tareas:') !!}
            {!! Form::select('tareas[]', $tareas, null, ['class' => 'form-control selectpicker','multiple' => 'multiple', 'id' => 'tareas', 'title' => '--Seleccione--']) !!}

        </div>
        --}}
            <div class="col">
                <label for="disciplina">Disciplina</label>
                <input type="text" class="form-control" id="disciplina" name="disciplina" value="{{ $plan->disciplina }}">
                @error('disciplina')
                <strong class="error-message text-danger"> {{ $message }} </strong>
                @enderror
            </div>
        </div>
        <div class="row mt-2">
            <div class="col">
                <label for="asignatura">Asignatura</label>
                <select class="form-control" name="asignatura" id="asignatura" value="{{ $plan->asignatura }}">
                    <option value="PID III">PID III</option>
                    <option value="PID IV">PID IV</option>
                    <option value="PID V">PID V</option>
                    <option value="PID VI">PID VI</option>
                    <option value="PID VII">PID VII</option>
                </select>
                @error('asignatura')
                <strong class="error-message text-danger"> {{ 'Seleccione una opción' }} </strong>
                @enderror
            </div>
            <div class="col">
                <label for="cant_horas">Cantidad de Horas</label>
                <input type="number" class="form-control" id="cant_horas" name="cant_horas" value="{{ $plan->cant_horas }}">
                @error('cant_horas')
                <strong class="error-message text-danger"> {{ $message }} </strong>
                @enderror
            </div>
        </div>
        <div class="row mt-2">
            <div class="col">
                <label for="cant_horas_semanal">Cantidad de Horas Semanal</label>
                <input type="number" class="form-control" id="cant_horas_semanal" name="cant_horas_semanal" value="{{ $plan->cant_horas_semanal }}">
                @error('cant_horas_semanal')
                <strong class="error-message text-danger"> {{ $message }} </strong>
                @enderror
            </div>
            <div class="col">
                <label for="centro_desarrollo">Centro de Desarrollo</label>
                <select class="form-control" name="centro_desarrollo" id="centro_desarrollo" value="{{ $plan->centro_desarrollo }}">
                    <option value="CESOL">CESOL</option>
                </select>
                @error('centro_desarrollo')
                <strong class="error-message text-danger"> {{ "Seleccione una opción" }} </strong>
                @enderror
            </div>
        </div>
        <div class="row mt-2">
            <div class="col">
                <label for="grupo_investigacion">Grupo de Investigación</label>
                <input type="text" class="form-control" id="grupo_investigacion" name="grupo_investigacion" value="{{ $plan->grupo_investigacion }}">
                @error('grupo_investigacion')
                <strong class="error-message text-danger"> {{ $message }} </strong>
                @enderror
            </div>
            <div class="col">
                <label for="nombre_proyecto">Nombre de Proyecto</label>
                <input type="text" class="form-control" id="nombre_proyecto" name="nombre_proyecto" value="{{ $plan->nombre_proyecto }}">
                @error('nombre_proyecto')
                <strong class="error-message text-danger"> {{ $message }} </strong>
                @enderror
            </div>
        </div>
        <div class="row mt-2">
                <div class="col">
                    <label for="tipo_proyecto">Tipo de Proyecto</label>
                    <input type="text" class="form-control" id="tipo_proyecto" name="tipo_proyecto" value="{{ $plan->tipo_proyecto }}">
                    @error('tipo_proyecto')
                    <strong class="error-message text-danger"> {{ $message }} </strong>
                    @enderror
                </div>
                <div class="col">
                    <label for="rol_desempena">Rol</label>
                    <select class="form-control" name="rol_desempena" id="rol_desempena" value="{{ $plan->rol_desempena }}">

                        <option value="Programador">Programador</option>
                        <option value="Probador">Probador</option>
                        <option value="Analista">Analista</option>
                        <option value="Diseñador">Diseñador</option>
                    </select>
                    @error('rol_desempena')
                    <strong class="error-message text-danger"> {{ "Seleccione una opción" }} </strong>
                    @enderror
                </div>
            </div>
        <div class="row mt-4">
            <div class="col-md-4"></div>
            <div class="col-md-4 text-center">
                <button type="submit" class="btn btn-primary mb-2">Registrar Plan de Formación</button>
            </div>
            <div class="col-md-4"></div>
        </div>
    </form>
</div>
@stop


@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-select.min.css') }}">
@stop

@section('js')
<script src="{{ asset('js/bootstrap-select.min.js') }}"></script>
@stop
