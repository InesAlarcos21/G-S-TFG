<?php

namespace App\Http\Controllers;

use App\Models\Comidas;
use App\Models\User;
use App\Models\Receta;
use App\Models\Listado;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ListadoController extends Controller
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
        $listados = auth()->user(); 
        $usuarios = User::all();
        return view('listado.index', compact('usuarios','listados','comidas')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        return view('listado.create');
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
     * @param  \App\Models\Listado  $listado
     * @return \Illuminate\Http\Response
     */
    public function show(Listado $listado)
    {
        //
        
        //$usuarios = User::all();
        //return view('listados.index', compact('listados','usuarios')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Listado  $listado
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $listado = User::find($id);
        return view("listado/edit",[
          "usuario" => $listado
        ]);



       // return view('listados.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Listado  $listado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Listado $listado)
    {
         //Validacion de nuevo para comprobar que todos los campos estan rellenos
         $data = request()->validate([
            'nombre'=>'required|min:6',
            'ingredientes' => 'required', 
            'preparacion' => 'required', 

        ]); 
        //Asignar los valores: 
        $listado->nombre = $data['nombre']; 
        $listado->ingredientes = $data['ingredientes']; 
        $listado->preparacion = $data['preparacion']; 
       
      
        if(request('imagen')){
            //Obtener la ruta de la imagen. 
            $ruta_imagen= $request['imagen']->store('upload-recetas', 'public'); 
            //Resize de la imagen: 
            $img = Image::make(public_path("storage/{$ruta_imagen}"))->fit(1000,550); 
            $img->save(); 
            //Asignamos al objeto 
            $listado->imagen= $ruta_imagen; 

        }
        $listado->save();
    
        //Redireccionar 
        return redirect()->action([EventController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Listado  $listado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Listado $listado)
    {
   //Eliminar receta: 
     $listado->delete(); 
      
   //Redireccionar 
   return redirect()->action([EventController::class, 'index']);
    }
}
