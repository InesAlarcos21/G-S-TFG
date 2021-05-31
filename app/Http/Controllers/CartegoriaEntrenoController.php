<?php

namespace App\Http\Controllers;

use App\Models\Receta;
use Illuminate\Http\Request;
use App\Models\CartegoriaEntreno;

class CartegoriaEntrenoController extends Controller
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
     * @param  \App\Models\CartegoriaEntreno  $cartegoriaEntreno
     * @return \Illuminate\Http\Response
     */
    public function show(CartegoriaEntreno $categoriaEntreno)
    {
        
      $recetas=Receta::where('categoria_id',$categoriaEntreno->id)->simplePaginate(2);
      return view('categorias.show', compact('recetas','cartegoriaEntreno')); 
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CartegoriaEntreno  $cartegoriaEntreno
     * @return \Illuminate\Http\Response
     */
    public function edit(CartegoriaEntreno $cartegoriaEntreno)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CartegoriaEntreno  $cartegoriaEntreno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CartegoriaEntreno $cartegoriaEntreno)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CartegoriaEntreno  $cartegoriaEntreno
     * @return \Illuminate\Http\Response
     */
    public function destroy(CartegoriaEntreno $cartegoriaEntreno)
    {
        //
    }
}
