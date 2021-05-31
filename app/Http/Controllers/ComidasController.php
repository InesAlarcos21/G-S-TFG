<?php

namespace App\Http\Controllers;

use App\Models\Comidas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class ComidasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $comidas = Comidas::all(); 

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('comidas.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nombre' => 'required|min:6',
            'tipo' => 'required',
            'ingredientes' =>'required',
            'preparacion' =>'required',
            'tiempo' =>'required',
           'imagen'=> 'required'

        ]);


    //Obtener la ruta de la imagen. 
        $ruta_imagen = $request['imagen']->store('upload-comidas', 'public');

    //Resize de la imagen: 
        $img = Image::make(public_path("storage/{$ruta_imagen}"))->fit(1000, 550);
        $img->save();

        
       DB::table('comidas')->insert([
      
        'nombre'=>$data['nombre'],
        'tipo'=>$data['tipo'],
        'ingredientes'=>$data['ingredientes'],
        'preparacion'=>$data['preparacion'],
        'tiempo' =>$data['tiempo'],
        'imagen'=>$ruta_imagen
    
      
    ]);
     
    return redirect()->action([ListadoController::class, 'index']); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comidas  $comidas
     * @return \Illuminate\Http\Response
     */
    public function show(Comidas $comidas)
    {
        $comidas = Comidas::all(); 
        return view('comidas.show', compact('comidas')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comidas  $comidas
     * @return \Illuminate\Http\Response
     */
    public function edit(Comidas $comidas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comidas  $comidas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comidas $comida)
    {
        //
        //Ejecutar el Policy: 
        $this->authorize('update', $comida); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comidas  $comidas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comidas $comidas)
    {
        //
    }
}
