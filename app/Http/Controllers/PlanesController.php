<?php

namespace App\Http\Controllers;

use App\Models\Planes;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class PlanesController extends Controller
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
        
        $planes = Planes::all(); 
        return view('planes.index', compact('planes')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('planes.create'); 
    }
    public function store(Request $request)
    {
        
        $usuario = auth()->user();
        //Validación
            $data = $request->validate([
                'nombre' => 'required|min:6',
                'descripcion' => 'required',
                'precio'=>'required',
                'imagen' =>'required|image'

            ]);


        //Obtener la ruta de la imagen. 
        $ruta_imagen= $request['imagen']->store('upload-planes', 'public'); 

        //Resize de la imagen: 
        $img = Image::make(public_path("storage/{$ruta_imagen}"))->fit(500,500); 
        $img->save(); 

       DB::table('planes')->insert([
            'nombre'=>$data['nombre'],
            'descripcion'=>$data['descripcion'],
            'precio' =>$data['precio'],
            'imagen'=>$ruta_imagen,
            'user_id'=>Auth::user()->id
        ]);
        //Redireccionar
      
        return redirect()->action([RecetaController::class, 'index']);
       
    }

    public function show(Planes $planes)
    {
    $planT = Planes::all();  
        $plane=Planes::where('id', $planes->id)->get();
        return view('planes.show', compact('plane','planT')); 
    }

    
  
}
