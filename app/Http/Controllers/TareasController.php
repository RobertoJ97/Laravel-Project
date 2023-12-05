<?php

namespace App\Http\Controllers;

use App\Models\Tareas;
use Illuminate\Http\Request;
use App\Models\Estudiantes;
use App\Models\PlanFormacion;

class TareasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tarea=Tareas::all();
        return view('tarea.index',compact('tarea'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $estudiantes= Estudiantes::all();
        $plan=PlanFormacion::all();
        return view('tarea.create',compact('estudiantes','plan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules=[
            'fecha'=>'required',
            'semana'=>'required',
            'actividades'=>'required',
            'habiliadades'=>'required',
            'cant_horas'=>'required',
            //'resultado_esperado'=>'required',
            'tipo_resultado'=>'required',
            
           ];
           $message=[
               'fecha.required'=>'Este campo es obligatorio',
               'semana.required'=>'Este campo es obligatorio',
               'actividades.required'=>'Este campo es obligatorio',
               'habiliadades.required'=>'Este campo es obligatorio',
               'cant_horas.required'=>'Este campo es obligatorio',
               //'resultado_esperado.required'=>'Este campo es obligatorio',
               'tipo_resultado.required'=>'Este campo es obligatorio',
               
           ];
          $this->validate($request,$rules,$message);
          $tareas=Tareas::create($request->all());
        return redirect('/tarea')->with('info','adicionar-tarea');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tareas  $tareas
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tareas=Tareas::find($id);
        return view('tarea.show',compact('tareas'));
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tareas  $tareas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tareas=Tareas::find($id);
        $estudiantes= Estudiantes::all();
        $plan=PlanFormacion::all();
       return view('tarea.edit',compact('tareas','estudiantes','plan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tareas  $tareas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tareas=Tareas::find($id);
        $rules=[
            'fecha'=>'required',
            'semana'=>'required',
            'actividades'=>'required',
            'habiliadades'=>'required',
            'cant_horas'=>'required',
            //'resultado_esperado'=>'required',
            'tipo_resultado'=>'required',
            
           ];
           $message=[
               'fecha.required'=>'Este campo es obligatorio',
               'semana.required'=>'Este campo es obligatorio',
               'actividades.required'=>'Este campo es obligatorio',
               'habiliadades.required'=>'Este campo es obligatorio',
               'cant_horas.required'=>'Este campo es obligatorio',
               //'resultado_esperado.required'=>'Este campo es obligatorio',
               'tipo_resultado.required'=>'Este campo es obligatorio',
               
           ];
          $this->validate($request,$rules,$message);
          $tareas->update($request->all());
        return redirect('/tarea')->with('info','modificar-tarea');
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tareas  $tareas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tareas=Tareas::find($id);
        $tareas->delete();
        return redirect('/tarea')->with('info','eliminar-tarea');
    }
}
