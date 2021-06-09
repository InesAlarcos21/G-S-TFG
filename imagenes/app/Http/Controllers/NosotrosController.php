<?php

namespace App\Http\Controllers;

use App\Models\Nosotros;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;

class NosotrosController extends Controller
{
    public function __construct(){
        //Except => hace que tengamos algunas de las secciones publicas a usuarios no registrados en la app
       // $this->middleware('auth',['except'=>['show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = User::all();
        $nosotros = Nosotros::all(); 
        return view('nosotros.index', compact('nosotros', 'usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('nosotros.create'); 
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
            'imagen'=> 'required'
        ]);


    //Obtener la ruta de la imagen. 
        $ruta_imagen = $request['imagen']->store('upload-nosotros', 'public');

    //Resize de la imagen: 
        $img = Image::make(public_path("storage/{$ruta_imagen}"))->fit(1000, 550);
        $img->save();

        
       DB::table('nosotros')->insert([
        'titulo'=>$data['titulo'],
        'descripcion'=>$data['descripcion'],
        'imagen'=>$ruta_imagen
      
    ]);
     
    return redirect()->action([NosotrosController::class, 'index']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Nosotros  $nosotros
     * @return \Illuminate\Http\Response
     */
    public function show(Nosotros $nosotros)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Nosotros  $nosotros
     * @return \Illuminate\Http\Response
     */
    public function edit(Nosotros $nosotros)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Nosotros  $nosotros
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nosotros $nosotros)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Nosotros  $nosotros
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nosotros $nosotros)
    {
        //
    }
}
