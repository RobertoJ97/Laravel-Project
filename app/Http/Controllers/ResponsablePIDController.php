<?php

namespace App\Http\Controllers;

use App\Models\ResponsablePID;
use Illuminate\Http\Request;

class ResponsablePIDController extends Controller
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
        $responsable=ResponsablePID::all();
        return view('responsable.index')->with('responsable',$responsable);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('responsable.create');
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
            'apellido'=>'required',
            'solapin'=>'required|unique:responsable_p_i_d_s',
            'ano_responsable'=>'required|unique:responsable_p_i_d_s',
            'usuario'=>'required|unique:responsable_p_i_d_s',
            'correo'=>'required|email|unique:responsable_p_i_d_s',
            ];
           $message=[
            'nombre.required'=>'Este campo es obligatorio',
            'apellido.required'=>'Este campo es obligatorio',
            'solapin.required'=>'Este campo es obligatorio',
            'solapin.unique'=>'El solapin ya esta en uso',
            'ano_responsable.required'=>'Este campo es obligatorio',
            'ano_responsable.unique'=>'Ya existe un responsable de PID para este año',
            'usuario.required'=>'Este campo es obligatorio',
            'usuario.unique'=>'El usuario ya esta en uso',
            'correo.required'=>'Este campo es obligatorio',
            'correo.unique'=>'El correo ya esta en uso',
            'correo.email'=>'No es un correo electrónico',
            ];
          $this->validate($request,$rules,$message);
          $estudiantes=ResponsablePID::create($request->all());
        return redirect('/responsable')->with('info','adicionar-responsable');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ResponsablePID  $responsablePID
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $responsable=ResponsablePID::find($id);
        return view('responsable.show',compact('responsable'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ResponsablePID  $responsablePID
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $responsable=ResponsablePID::find($id);
        return view('responsable.edit',compact('responsable'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ResponsablePID  $responsablePID
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $responsable=ResponsablePID::find($id);
        $rules=[
            'nombre'=>'required',
            'apellido'=>'required',
            'solapin'=>'required|',
            'ano_responsable'=>'required',
            'usuario'=>'required',
            'correo'=>'required|email',
            ];
           $message=[
            'nombre.required'=>'Este campo es obligatorio',
            'apellido.required'=>'Este campo es obligatorio',
            'solapin.required'=>'Este campo es obligatorio',
            
            'ano_responsable.required'=>'Este campo es obligatorio',
            
            'usuario.required'=>'Este campo es obligatorio',
            
            'correo.required'=>'Este campo es obligatorio',
            
            'correo.email'=>'No es un correo electrónico',
            ];
          $this->validate($request,$rules,$message);
          $responsable->update($request->all());
        return redirect('/responsable')->with('info','modificar-responsable');
         
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ResponsablePID  $responsablePID
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $responsable=ResponsablePID::find($id);
        $responsable->delete();
        return redirect('/responsable')->with('info','eliminar-responsable');
    }
}
