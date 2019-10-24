<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Formularios;
use App\Sexos;
use App\Http\Requests\FormularioRequest;

class FormularioController extends Controller
{ 
    public function index()//VIEW CREATE FORMULARIOS
    {
        return view('formularios.index', [

            'title' => 'registro nuevo'
        ]);
    }

    public function store(FormularioRequest $request) //CREATE FORMULARIOS
    {
        $form = new Formularios($request->all());
        $form->pnombre = $request->pnombre;
        $form->snombre = $request->snombre;
        $form->nom_usuario = $request->nom_usuario;
        $form->ciudad = $request->ciudad;
        $form->estado = $request->estado;
        $form->sexo = $request->sexo;
        $form->status = $request->status;
        $form->save();
        
            $request->session()->flash('alert-success', 'Registro Exitoso!'); 

            return redirect()->route('formulario.index');

    }

    public function show()//SHOW FORMULARIOS
    {
          $formsid = Formularios::all();
          $formsid = Formularios::where('status', '=', 'S')->get(); 

          $forms = Formularios::
          join('sexos','sexos.id','formularios.sexo')
          ->select('formularios.*','sexos.*')
          ->where('formularios.status', '=', 'S', 'AND', 'formularios.sexo', '!=', 'sexos.id')
          ->get();

          // dd ($forms);

            $title = 'todos los registros';
             
            return view('formularios.show', compact('title', 'forms', 'formsid'));
    }

    public function edit($id)//VIEW UPDATE FORMULARIO
    {

        $form = Formularios::find($id);
        // dd ($form);

        $title = 'editando formulario';
        
        return view('formularios.edit', compact('title', 'form', $form));
       
    }

    public function update(FormularioRequest $request, $id)//UPDATE FORMULARIO
    {
          // dd($request);

        $form = Formularios::find($id);
        $form->pnombre = $request->get('pnombre');
        $form->snombre = $request->get('snombre');
        $form->nom_usuario = $request->get('nom_usuario');
        $form->ciudad = $request->get('ciudad');
        $form->estado = $request->get('estado');
        $form->sexo = $request->get('sexo');
        $form->status = $request->get('status');
        $form->save();
        
        $request->session()->flash('alert-success', 'La Edicion Fue Exitosa!'); 

        return redirect()->route('formulario.index'); 
    }

}