<?php

namespace App\Http\Controllers;

use App\Models\Profesor;
use Illuminate\Http\Request;

class ProfesorController extends Controller
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
        $profesor=Profesor::all();
        return view('profesor.index')->with('profesor',$profesor);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profesor.create');
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
            'solapin'=>'required|unique:profesors',
            'usuario'=>'required|unique:profesors',
            'correo'=>'required|email|unique:profesors',
            ];
           $message=[
            'nombre.required'=>'Este campo es obligatorio',
            'apellido.required'=>'Este campo es obligatorio',
            'solapin.required'=>'Este campo es obligatorio',
            'solapin.unique'=>'El solapin ya esta en uso',
            'usuario.required'=>'Este campo es obligatorio',
            'usuario.unique'=>'El usuario ya esta en uso',
            'correo.required'=>'Este campo es obligatorio',
            'correo.unique'=>'El correo ya esta en uso',
            'correo.email'=>'No es un correo electrónico',
            ];
          $this->validate($request,$rules,$message);
          $profesor=Profesor::create($request->all());
        return redirect('/profesor')->with('info','adicionar-profesor');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profesor  $profesor
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $profesor=Profesor::find($id);
        return view('profesor.show',compact('profesor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profesor  $profesor
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profesor=Profesor::find($id);
        return view('profesor.edit')->with('profesor',$profesor);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profesor  $profesor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $profesor=Profesor::find($id);
        $rules=[
            'nombre'=>'required',
            'apellido'=>'required',
            'solapin'=>'required',
            'usuario'=>'required',
            'correo'=>'required|email',
            ];
           $message=[
            'nombre.required'=>'Este campo es obligatorio',
            'apellido.required'=>'Este campo es obligatorio',
            'solapin.required'=>'Este campo es obligatorio',
            
            'usuario.required'=>'Este campo es obligatorio',
            
            'correo.required'=>'Este campo es obligatorio',
            
            'correo.email'=>'No es un correo electrónico',
            ];
          $this->validate($request,$rules,$message);
          $profesor->update($request->all());
        return redirect('/profesor')->with('info','modificar-profesor');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profesor  $profesor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $profesor=Profesor::find($id);
        $profesor->delete();
        return redirect('/profesor')->with('info','eliminar-profesor');
    }
}
