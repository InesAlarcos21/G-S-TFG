<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Event;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ExpertosController extends Controller
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $usuario)
    {
        $data = $request;
        if(request('imagen')){
            //Obtener la ruta de la imagen. 
            $ruta_imagen= $request['imagen']->store('upload-perfiles', 'public'); 
             //Resize de la imagen: 
            $img = Image::make(public_path("storage/{$ruta_imagen}"))->fit(600,550); 
            $img->save(); 
            //Asignamos al objeto 
            $usuario->imagen= $ruta_imagen; 

        }
        $usuario->formacion = $data['formacion']; 
        $usuario->interes = $data['interes']; 
        

        $usuario->save();
        return redirect()->action([EventController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
