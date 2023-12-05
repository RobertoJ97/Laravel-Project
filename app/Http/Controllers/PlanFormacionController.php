<?php

namespace App\Http\Controllers;

use App\Models\PlanFormacion;
use App\Models\Estudiantes;
use App\Models\SET;
use App\Models\Profesor;
use App\Models\PlanTareas;
use App\Models\ResponsablePID;
use App\Models\Tareas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PlanFormacionController extends Controller
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
        $plan=PlanFormacion::all();
        return view('plan.index')->with('plan',$plan);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tareas=Tareas::pluck('actividades','id')->toArray();
        $estudiantes= Estudiantes::all();
        $profesor= Profesor::all();
        $set= SET::all();
        $responsable= ResponsablePID::all();
        $plan=PlanFormacion::all();
        return view('plan.create',compact('estudiantes','set','profesor','responsable','tareas','plan'));
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
        'estudiantes_id'=>'required|unique:plan_formacions',
         'set_id'=>'required',
         'responsable_id'=>'required',
         'profesor_id'=>'required',
         'tareas_id'=>'required',
         'disciplina'=>'required',
         'asignatura'=>'required',
         'cant_horas'=>'required',
         'cant_horas_semanal'=>'required',
         'centro_desarrollo'=>'required',
         'grupo_investigacion'=>'required',
         'nombre_proyecto'=>'required|unique:plan_formacions',
         'tipo_proyecto'=>'required',
         'rol_desempena'=>'required',
        ];
        $message=[

         'estudiantes_id.required'=>'Este campo es obligatorio',
         'estudiantes_id.unique'=>'El estudiante ya tiene plan de formación asignado',
         'set_id.required'=>'Este campo es obligatorio',
         'responsable_id.required'=>'Este campo es obligatorio',
         'profesor_id.required'=>'Este campo es obligatorio',
         'tareas_id.required'=>'Este campo es obligatorio',
         'disciplina.required'=>'Este campo es obligatorio',
         'asignatura.required'=>'Este campo es obligatorio',
         'cant_horas.required'=>'Este campo es obligatorio',
         'cant_horas_semanal.required'=>'Este campo es obligatorio',
         'centro_desarrollo.required'=>'Este campo es obligatorio',
         'grupo_investigacion.required'=>'Este campo es obligatorio',
         'nombre_proyecto.required'=>'Este campo es obligatorio',
         'nombre_proyecto.unique'=>'El nombre del proyecto ya esta en uso',
         'tipo_proyecto.required'=>'Este campo es obligatorio',
         'rol_desempena.required'=>'Este campo es obligatorio',
        ];
       $this->validate($request,$rules,$message);
       $plan=PlanFormacion::create($request->all());
      $plan->tareas()->sync($request->get('tareas_id'));
        return redirect('/plan')->with('info','adicionar-plan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PlanFormacion  $planFormacion
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $plantarea=PlanTareas::all();
        $plan=PlanFormacion::find($id);
        $profesor=DB::table('profesors')->join('plan_formacions','profesors.id','=','plan_formacions.profesor_id')->select('profesors.*')->get();
        $estudiantes=DB::table('estudiantes')->join('plan_formacions','estudiantes.id','=','plan_formacions.estudiantes_id')->select('estudiantes.*')->get();
        $set=SET::all();
        $responsable= ResponsablePID::all();
        $tareas=Tareas::all();
        //$tareas=DB::table('tareas')->join('plan_formacions','plan_formacions.id','=','tareas.plan_formacions_id')->select('tareas.*')->get();

        return view('plan.show',compact('plantarea','plan','profesor','estudiantes','set','responsable','tareas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PlanFormacion  $planFormacion
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $plan=PlanFormacion::find($id);
        $estudiantes= Estudiantes::all();
        $profesor= Profesor::all();
        $tareas=Tareas::pluck('actividades','id')->toArray();
        $set= SET::all();
        $responsable= ResponsablePID::all();
        return view('plan.edit',compact('plan','estudiantes','profesor','set','responsable','tareas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PlanFormacion  $planFormacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $plan=PlanFormacion::find($id);
        $rules=[
            'estudiantes_id'=>'required',
             'set_id'=>'required',
             'responsable_id'=>'required',
             'profesor_id'=>'required',
             'tareas_id'=>'required',
             'disciplina'=>'required',
             'asignatura'=>'required',
             'cant_horas'=>'required',
             'cant_horas_semanal'=>'required',
             'centro_desarrollo'=>'required',
             'grupo_investigacion'=>'required',
             'nombre_proyecto'=>'required',
             'tipo_proyecto'=>'required',
             'rol_desempena'=>'required',
        ];
            $message=[
    
             'estudiantes_id.required'=>'Este campo es obligatorio',
             
             'set_id.required'=>'Este campo es obligatorio',
             'responsable_id.required'=>'Este campo es obligatorio',
             'profesor_id.required'=>'Este campo es obligatorio',
             'tareas_id.required'=>'Este campo es obligatorio',
             'disciplina.required'=>'Este campo es obligatorio',
             'asignatura.required'=>'Este campo es obligatorio',
             'cant_horas.required'=>'Este campo es obligatorio',
             'cant_horas_semanal.required'=>'Este campo es obligatorio',
             'centro_desarrollo.required'=>'Este campo es obligatorio',
             'grupo_investigacion.required'=>'Este campo es obligatorio',
             'nombre_proyecto.required'=>'Este campo es obligatorio',
             
             'tipo_proyecto.required'=>'Este campo es obligatorio',
             'rol_desempena.required'=>'Este campo es obligatorio',
            ];
           $this->validate($request,$rules,$message);
           $plan->update($request->all());
          $plan->tareas()->sync($request->get('tareas_id'));
            return redirect('/plan')->with('info','modificar-plan');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PlanFormacion  $planFormacion
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $plan=PlanFormacion::findOrFail($id);
        $plan->delete();
        return redirect('/plan')->with('info','eliminar-plan');
    }
}
