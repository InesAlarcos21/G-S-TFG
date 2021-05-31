<?php

namespace App\Http\Controllers;

use App\Models\Entrenadores;
use App\Models\User;
use Illuminate\Http\Request;

class EntrenadoresController extends Controller
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
     * @param  \App\Models\Entrenadores  $entrenadores
     * @return \Illuminate\Http\Response
     */
    public function show(Entrenadores $entrenadores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Entrenadores  $entrenadores
     * @return \Illuminate\Http\Response
     */
    public function edit(Entrenadores $entrenadores)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Entrenadores  $entrenadores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $usuario)
    {
        //
        $data = $request->all(); 
        $usuario->experto = $data['experto']; 
        $usuario->save(); 
        
        return redirect()->action([RecetaController::class, 'index']); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Entrenadores  $entrenadores
     * @return \Illuminate\Http\Response
     */
    public function destroy(Entrenadores $entrenadores)
    {
        //
    }
}
