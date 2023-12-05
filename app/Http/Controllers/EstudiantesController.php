<?php

namespace App\Http\Controllers;

use App\Models\Estudiantes;
use Illuminate\Http\Request;

class EstudiantesController extends Controller
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
        $estudiantes=Estudiantes::all();
        return view('estudiantes.index',compact('estudiantes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('estudiantes.create');
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
            'nombre'=>'required',
            'apellidos'=>'required',
            'solapin'=>'required|unique:estudiantes',
            'carrera'=>'required',
            'ano_academico'=>'required',
            'grupo'=>'required',
            'correo'=>'required|email|unique:estudiantes',
            ];
           $message=[
            'nombre.required'=>'Este campo es obligatorio',
            'apellido.required'=>'Este campo es obligatorio',
            'solapin.required'=>'Este campo es obligatorio',
            'solapin.unique'=>'El solapin ya esta en uso',
            'carrera.required'=>'El campo es obligatorio'
            'ano_academico'=>'El campo es obligatorio'
            'grupo.required'=>'Este campo es obligatorio',
            'correo.required'=>'Este campo es obligatorio',
            'correo.email'=>'No es un correo electrónico',
            'correo.unique'=>'El correo ya esta en uso',
            ];
          $this->validate($request,$rules,$message);
          $estudiantes=Estudiantes::create($request->all());
          $plan=PlanFormacion::create($request->all());
        return redirect('/estudiantes')->with('info','adicionar-estudiante');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Esrudiantes  $esrudiantes
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $estudiantes=Estudiantes::find($id);
        return view('estudiantes.show')->with('estudiantes',$estudiantes);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Esrudiantes  $esrudiantes
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $estudiantes=Estudiantes::find($id);
        return view('estudiantes.edit')->with('estudiantes',$estudiantes);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Esrudiantes  $esrudiantes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $estudiantes = Estudiantes::findOrFail($id);
        $rules=[
            'nombre'=>'required',
            'apellido'=>'required',
            'solapin'=>'required',
            'grupo'=>'required',
            'correo'=>'required|email',
            ];
           $message=[
            'nombre.required'=>'Este campo es obligatorio',
            'apellido.required'=>'Este campo es obligatorio',
            'solapin.required'=>'Este campo es obligatorio',
            'grupo.required'=>'Este campo es obligatorio',
            'correo.required'=>'Este campo es obligatorio',
            'correo.email'=>'No es un correo electrónico',
            
            ];
          $this->validate($request,$rules,$message);
          $estudiantes->update($request->all());
        return redirect('/estudiantes')->with('info','modificar-estudiante');
        
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Esrudiantes  $esrudiantes
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $estudiantes=Estudiantes::find($id);
        $estudiantes->delete();
        return redirect('/estudiantes')->with('info','eliminar-estudiante');
    }
}
