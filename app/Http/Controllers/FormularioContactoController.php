<?php

namespace App\Http\Controllers;

use App\Models\FormularioContacto;
use App\Models\articulos;
/* use App\Http\Requests\StoreFormularioContactoRequest;
use App\Http\Requests\UpdateFormularioContactoRequest; */
use Illuminate\Http\Request;

class FormularioContactoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFormularioContactoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $objeto = $request->all();


        $request->validate([
    		'correo' => 'required',
    		'nombre_cliente'  => 'required',
            'mensaje' => 'required'
    	]); 


        FormularioContacto::create([
            'nombre_cliente' => $request->nombre_cliente,
            'mensaje'  => $request->mensaje,
            'correo' => $request->correo,
        ]); 
        
        
        return redirect()->route('inicio');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FormularioContacto  $formularioContacto
     * @return \Illuminate\Http\Response
     */
    public function show(FormularioContacto $formularioContacto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FormularioContacto  $formularioContacto
     * @return \Illuminate\Http\Response
     */
    public function edit(FormularioContacto $formularioContacto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFormularioContactoRequest  $request
     * @param  \App\Models\FormularioContacto  $formularioContacto
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFormularioContactoRequest $request, FormularioContacto $formularioContacto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FormularioContacto  $formularioContacto
     * @return \Illuminate\Http\Response
     */
    public function destroy(FormularioContacto $formularioContacto)
    {
        //
    }
}
