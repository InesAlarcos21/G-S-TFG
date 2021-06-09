<?php

namespace App\Http\Controllers;

use App\Models\Receta;
use Illuminate\Http\Request;
use App\Models\Testimoniales;
use App\Models\CategoriaReceta;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use App\Http\Controllers\RecetaController;

class TestimonialesController extends Controller
{
    public function __construct(){
        //Except => hace que tengamos algunas de las secciones publicas a usuarios no registrados en la app
      //  $this->middleware('auth',['except'=>['show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       // $usuario = auth()->user();
        $testimonios = Testimoniales::all(); 
        //return view('recetas.index')->with('usuario', $usuario); 
        return view('testimonios.index',compact('testimonios')); 
    }
    public function create()
    {
        

        //Devolver: 
      return view('testimonios.create'); 

    }
    public function store(Request $request)
    {
        //Validación
            $data = $request->validate([
                'titulo' => 'required|min:6',
                'descripcion' => 'required',
                'imagen' =>'required|image'

            ]);


        //Obtener la ruta de la imagen. 
        $ruta_imagen= $request['imagen']->store('upload-testimonios', 'public'); 

        //Resize de la imagen: 
        $img = Image::make(public_path("storage/{$ruta_imagen}"))->fit(1000,550); 
        $img->save(); 

       DB::table('testimoniales')->insert([
            'titulo'=>$data['titulo'],
            'descripcion'=>$data['descripcion'],
            'imagen'=>$ruta_imagen,
            'user_id'=>Auth::user()->id
        ]);
        //Redireccionar
      
        return redirect()->action([RecetaController::class, 'index']);
       
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testimoniales  $testimoniales
     * @return \Illuminate\Http\Response
     */
    public function show(Testimoniales $testimoniales)
    {
        $idTesti = $testimoniales->id; 
       
        $testimonios = Testimoniales::all(); 
       //  return "desde el metodo show de testimoniales"; 
      //  $testimonios = Testimoniales::where('id',$testimoniales->id);  

        return view('testimonios.show', compact('testimonios'));
    }
}
