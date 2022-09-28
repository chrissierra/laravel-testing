<?php
/* namespace App\Http\Models; */
namespace App\Http\Controllers;
/* use Illuminate\Database\Eloquent\Model; */
use App\Models\articulos;
/* use App\Http\Requests\StorearticulosRequest;
use App\Http\Requests\UpdatearticulosRequest; */
use Illuminate\Http\Request;


class ArticulosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return redirect()->route('inicio');
        return ' index';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
        return ' create';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorearticulosRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $objeto = $request->all();


        $request->validate([
    		'titulo' => 'required',
    		'cuerpo_seccion'  => 'required',
            'nombre_seccion' => 'required'
    	]);

       
        
        articulos::create([
            'titulo' => $request->titulo,
            'nombre_seccion' => $request->nombre_seccion,
            'cuerpo_seccion'  => $request->cuerpo_seccion,
        ]); 
        
        
        return redirect()->route('inicio');
        

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\articulos  $articulos
     * @return \Illuminate\Http\Response
     */
    public function show(articulos $articulos)
    {
        //
        return ' show';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\articulos  $articulos
     * @return \Illuminate\Http\Response
     */
    public function edit(articulos $articulos)
    {
        //
        return ' edit';
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatearticulosRequest  $request
     * @param  \App\Models\articulos  $articulos
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatearticulosRequest $request, articulos $articulos)
    {
        //
        return ' update';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\articulos  $articulos
     * @return \Illuminate\Http\Response
     */
    public function destroy(articulos $articulos)
    {
        //
        return ' destroy';
    }
}
