<?php

namespace App\Http\Controllers;

use App\Models\Perfil;
use App\Models\Receta;
use App\Models\Testimoniales;
use App\Models\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PerfilController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth',['except'=>'show']);
    }
   
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
     * @param  \App\Models\Perfil  $perfil
     * @return \Illuminate\Http\Response
     */
    public function show(Perfil $perfil)
    {
        //Obtener los testimonios con paginación: 
        $usuarios =User::all(); 
        $testimon = Testimoniales::where('user_id',$perfil->user_id)->simplePaginate(3); 
        //Obtener las recetas con paginacion: 
        $recetas = Receta::where('user_id',$perfil->user_id)->simplePaginate(3); 
        return view('perfiles.show', compact('perfil','recetas','testimon','usuarios'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Perfil  $perfil
     * @return \Illuminate\Http\Response
     */
    public function edit(Perfil $perfil)
    {
        //
        //Ejecutar el Policy: 
        $this->authorize('view', $perfil); 
        return view('perfiles.edit', compact('perfil')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Perfil  $perfil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Perfil $perfil)
    {
        //Ejecutar el Policy: 
        $this->authorize('update', $perfil); 

        //Validar los datos: 
        $data = request()->validate([
            'nombre' => ['required', 'string', 'max:255'],
            'apellido' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
           // 'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]); 

        //Verificar la imagen en el caso de que la suba: 
        if ($request['imagen']){
            $ruta_imagen= $request['imagen']->store('upload-perfiles', 'public'); 

            //Resize de la imagen: 
            $img = Image::make(public_path("storage/{$ruta_imagen}"))->fit(600,600); 
            $img->save(); 
            //Creamos un vector de imagen: 
            $array_imagen = ['imagen'=> $ruta_imagen]; 
        }
        //Asginar nombre, apellidos, fechaN, sexo, email, password -->Esta en la tabla de usuarios
        auth()->user()->name = $data['nombre']; 
        auth()->user()->apellido = $data['apellido']; 
        auth()->user()->email = $data['email']; 
        auth()->user()->save(); 
        //Eliminar los campos que hemos insertado arriba:  
        unset($data['nombre']); 
        unset($data['apellido']); 
        unset($data['email']); 
        
        //Asignar imagen que esta en la tabla de perfil: 
        auth()->user()->perfil()->update( array_merge(
            $data, 
            $array_imagen ?? []
        ));
        //Guardar la información: 

        //Redireccionar
        return redirect()->action([Perfil::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Perfil  $perfil
     * @return \Illuminate\Http\Response
     */
    public function destroy(Perfil $perfil)
    {
        //
    }
}
