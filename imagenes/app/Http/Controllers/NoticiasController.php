<?php

namespace App\Http\Controllers;

use App\Models\Receta;
use App\Models\Noticias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class NoticiasController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth',['except'=>['show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
        $noticias = Noticias::all(); 
        return view('noticias.index', compact('noticias')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('noticias.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        //Validación
        $data = $request->validate([
            'titulo' => 'required|min:6',
            'descripcion' => 'required',
            'fuente' => 'required',
            'imagen'=> 'required'
        ]);


    //Obtener la ruta de la imagen. 
        $ruta_imagen = $request['imagen']->store('upload-noticias', 'public');

    //Resize de la imagen: 
        $img = Image::make(public_path("storage/{$ruta_imagen}"))->fit(1000, 550);
        $img->save();

        
       DB::table('noticias')->insert([
        'titulo'=>$data['titulo'],
        'descripcion'=>$data['descripcion'],
        'fuente' =>$data['fuente'],
        'imagen'=>$ruta_imagen
      
    ]);
   
    //Redireccionar
  
    return redirect()->action([RecetaController::class, 'index']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Noticias  $receta
     * @return \Illuminate\Http\Response
     */
    public function show(Noticias $receta)
    {
        $noticias=Noticias::all();
        return view('noticias.show', compact('noticias', 'receta')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Receta  $receta
     * @return \Illuminate\Http\Response
     */
    public function edit(Noticias $receta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Receta  $receta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Noticias $receta)
    {
        //Almacena los like de un usuario a una receta: 
      //  return auth()->user()->meGusta()->toggle($receta);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Receta  $receta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Receta $receta)
    {
        //
    }


   
}
