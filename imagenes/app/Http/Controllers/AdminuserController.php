<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Planes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Intervention\Image\Facades\Image;

class AdminuserController extends Controller
{
    protected $paginationTheme ="boostrap"; 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function index()
    {
        $usuario = auth()->user();
        
        if (auth()->user()->tipoUser === 'Normal'){
            $planes = Planes::all(); 
            return view ('basicos.index', compact('usuario', 'planes')); 
        }elseif(auth()->user()->tipoUser === 'Enetrenador' || 'Nutricionista'){
            return view ('nutricionista.index', compact('usuario')); 
        }
    }

    public function updatingSearch()
    {
        $this->resetPage(); 
    }
    public function search(Request $request)
    {
        $busqueda = $request->get('buscar'); 
        $usuarios = User::where('tipoUser', 'like', '%'.$busqueda.'%')
                            ->simplePaginate();
        return view ('seleccionar.index', compact('usuarios', 'busqueda'));
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
    public function edit(User $usuario)
    {
      
        

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
        $usuario->telefono = $data['telefono']; 
        $usuario->interes = $data['interes']; 
        $usuario->plan = $data['plan']; 
        $seleccion = User::all(); 

        $usuario->save();
        //Redireccionar 
        return view('seleccionar.index', compact('usuario', 'seleccion'));
       
       
        
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
