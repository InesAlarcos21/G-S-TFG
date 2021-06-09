<?php

namespace App\Http\Controllers;

use App\Models\Entrenos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;

class EntrenosController extends Controller
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
        return view('entrenos.create'); 
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
            'ejercicio' =>'required',
            'repeticion' =>'required',
            'tiempo' =>'required',
           'imagen'=> 'required'

        ]);


    //Obtener la ruta de la imagen. 
        $ruta_imagen = $request['imagen']->store('upload-comidas', 'public');

    //Resize de la imagen: 
        $img = Image::make(public_path("storage/{$ruta_imagen}"))->fit(1000, 550);
        $img->save();

        
       DB::table('entrenos')->insert([
      
        'nombre'=>$data['nombre'],
        'tipo'=>$data['tipo'],
        'ejercicio'=>$data['ejercicio'],
        'repeticion'=>$data['repeticion'],
        'tiempo' =>$data['tiempo'],
        'imagen'=>$ruta_imagen
    
      
    ]);
     
    return redirect()->action([ListadoController::class, 'index']); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Entrenos  $entrenos
     * @return \Illuminate\Http\Response
     */
    public function show(Entrenos $entrenos)
    {
        //
        $entrenos = Entrenos::all();
        return view('entrenos.show', compact('entrenos')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Entrenos  $entrenos
     * @return \Illuminate\Http\Response
     */
    public function edit(Entrenos $entrenos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Entrenos  $entrenos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Entrenos $entrenos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Entrenos  $entrenos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Entrenos $entrenos)
    {
        //
    }
}
