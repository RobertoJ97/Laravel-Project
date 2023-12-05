<?php

namespace App\Http\Controllers;

use App\Models\SET;
use Illuminate\Http\Request;

class SETController extends Controller
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
        $set=SET::all();
        return view('set.index')->with('set',$set);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('set.create');
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
            'solapin'=>'required|unique:sets',
            'categoria_docente'=>'required',
            'grado_cientifico'=>'required',
            'correo'=>'required|email|unique:sets',
            ];
           $message=[
            'nombre.required'=>'Este campo es obligatorio',
            'apellido.required'=>'Este campo es obligatorio',
            'solapin.required'=>'Este campo es obligatorio',
            'solapin.unique'=>'El solapin ya esta en uso',
            'categoria_docente.required'=>'Este campo es obligatorio',
            'grado_cientifico.required'=>'Este campo es obligatorio',
            'correo.required'=>'Este campo es obligatorio',
            'correo.unique'=>'El correo ya esta en uso',
            'correo.email'=>'No es un correo electrónico',
            ];
          $this->validate($request,$rules,$message);
          $set=SET::create($request->all());
        return redirect('/set')->with('info','adicionar-set');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SET  $sET
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $set=SET::find($id);
        return view('set.show',compact('set'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SET  $sET
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $set=SET::find($id);
        return view('set.edit')->with('set',$set);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SET  $sET
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
       $set=SET::find($id);
        $rules=[
            'nombre'=>'required',
            'apellido'=>'required',
            'solapin'=>'required',
            'categoria_docente'=>'required',
            'grado_cientifico'=>'required',
            'correo'=>'required|email',
            ];
           $message=[
            'nombre.required'=>'Este campo es obligatorio',
            'apellido.required'=>'Este campo es obligatorio',
            'solapin.required'=>'Este campo es obligatorio',
            
            'categoria_docente.required'=>'Este campo es obligatorio',
            'grado_cientifico.required'=>'Este campo es obligatorio',
            'correo.required'=>'Este campo es obligatorio',
            
            'correo.email'=>'No es un correo electrónico',
            ];
          $this->validate($request,$rules,$message);
          $set->update($request->all());
        return redirect('/set')->with('info','modificar-set');
       }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SET  $sET
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $set=SET::find($id);
        $set->delete();
        return redirect('/set')->with('info','eliminar-set');
    }
}
