<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Receta;
use App\Models\Listado;
use Illuminate\Http\Request;
use App\Models\CategoriaReceta;
use App\Models\CartegoriaEntreno;
use App\Models\Comidas;
use App\Models\Entrenos;
use App\Models\Event;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;


class RecetaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __invoke(){
        //
    }

    public function __construct(){
        //Except => hace que tengamos algunas de las secciones publicas a usuarios no registrados en la app
        $this->middleware('auth',['except'=>['show','search']]);
    }
        
    public function index()
    {
     
        $clientes = User::all(); 
        $comidas = Comidas::all();
        $entrenos = Entrenos::all();
        $usuario = auth()->user();
        $listados = auth()->user(); 
        $calendario = Event::all();

        $id = $usuario->id; 
        //Recetas con paginación: 
        $recetas = Receta::where('user_id', $usuario->id )->simplePaginate(3); 

       
 

        //$recetas = auth()->user()->recetas; 
        return view('recetas.index', compact('recetas','usuario','listados','clientes','comidas', 'entrenos')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Forma de obtener las categorias sin modelo
        //$categorias = DB::table('categoria_recetas')->get()->pluck('nombre_categoria','id'); 

        //Forma de obtener las categorias con modelo: ~
        $clientes = User::all(); 
        $categorias = CategoriaReceta::all(['nombre_categoria', 'id']); 
        $entrenos = CartegoriaEntreno::all(['nombre_categoria', 'id']); 
        //Devolver: 
        return view('recetas.create', compact('categorias', 'entrenos','clientes')); 
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
        $data = request()->validate([
            'nombre'=>'required|min:6',
            'preparacion'=>'required', 
            'ingredientes' =>'required',
            'imagen' =>'required|image'
        ]); 

      
        //Obtener la ruta de la imagen. 
        $ruta_imagen= $request['imagen']->store('upload-recetas', 'public'); 

          //Resize de la imagen: 
          $img = Image::make(public_path("storage/{$ruta_imagen}"))->fit(1000,550); 
          $img->save(); 
        
        //Almacenar en la base de datos sin modelo
     
        DB::table('recetas')->insert([
            'nombre'=>$data['nombre'],
            'ingredientes'=>$data['ingredientes'],
            'preparacion' =>$data['preparacion'],
            'imagen'=>$ruta_imagen,
            'user_id'=>Auth::user()->id,
            'cliente_id' =>$data['cliente_id'],
        ]);   

        //Redireccionar 
        return redirect()->action([RecetaController::class, 'index']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Receta  $receta
     * @return \Illuminate\Http\Response
     */
    public function show(Receta $receta)
    {
        //Obtener si al usario actual le gusta la receta y ademas esta autenticado: 
        $like = (auth()->user()) ? auth()->user()->meGusta->contains($receta->id) : false; 
        //Pasar la cantidad de likes a la vista: 

        $likes = $receta->likes->count();
        
        return view('recetas.show', compact('receta', 'like', 'likes')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Receta  $receta
     * @return \Illuminate\Http\Response
     */
    public function edit(Receta $receta)
    {
        //Revisar el policy: 
        $this->authorize('view',$receta); 
        $categorias = CategoriaReceta::all(['nombre_categoria', 'id']); 
        return view('recetas.edit', compact('categorias', 'receta')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Receta  $receta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Receta $receta)
    {
        //Revisar el policy: 
        $this->authorize('update',$receta); 

        //Validacion de nuevo para comprobar que todos los campos estan rellenos
        $data = request()->validate([
            'nombre'=>'required|min:6',
            'categoria' => 'required', 
            'preparacion'=>'required', 
            'ingredientes' =>'required',
        ]); 
        //Asignar los valores: 
        $receta->nombre = $data['nombre']; 
        $receta->categoria_id = $data['categoria']; 
        $receta->preparacion = $data['preparacion']; 
        $receta->ingredientes = $data['ingredientes']; 

        //Comprobar que el usuario sube una nueva imagen: 
        if(request('imagen')){
                   //Obtener la ruta de la imagen. 
            $ruta_imagen= $request['imagen']->store('upload-recetas', 'public'); 
            //Resize de la imagen: 
            $img = Image::make(public_path("storage/{$ruta_imagen}"))->fit(1000,550); 
            $img->save(); 
            //Asignamos al objeto 
            $receta->imagen= $ruta_imagen; 

        }
        $receta->save();
        //Redireccionar 
        return redirect()->action([RecetaController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Receta  $receta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Receta $receta)
    {
        //Ejecutar el policy: 
       // $this->authorize('delete', $receta); 

        //Eliminar receta: 
        $receta->delete(); 

        //Redireccionar 
        return redirect()->action([RecetaController::class, 'index']);
    }

    public function search(Request $request)
    {
        $busqueda = $request->get('buscar'); 
        $recetas = Receta::where('nombre', 'like', '%'.$busqueda.'%')->simplePaginate(2);
        return view ('busquedas.show', compact('recetas', 'busqueda'));
    }
}
