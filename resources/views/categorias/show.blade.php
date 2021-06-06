@extends('layouts.app')

@section('botonesRecetas')
    <a href="{{route('recetas.index')}}" class="btn">
        <svg class="icono" className="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M11 15l-3-3m0 0l3-3m-3 3h8M3 12a9 9 0 1118 0 9 9 0 01-18 0z" /></svg>
        Atrás
    </a>
@endsection

@section('content')

    <article class="contenido-receta bg-white p-5 shadow">
        <h1 class="text-center mb-4">{{$recetas->nombre}}</h1>
        <div class="imagen-receta">
            <img src="/storage/{{$receta->imagen}}" class="w-100" alt="">
        </div>
        <div class="receta-meta mt-3">
            <p>
                <span class="font-weight-bold text-primary">Escrito en:</span>
                <a class="text-dark" href="{{route('categorias.show', ['categoriaReceta' => $receta->categoria->id])}}">
                    {{$receta->categoria->nombre_categoria}}
                </a>
            </p>
            <p>
                <span class="font-weight-bold text-primary">Autor: </span>
                <a class="text-dark" href="{{route('perfiles.show', ['perfil' => $receta->autor->id])}}">
                    {{$receta->autor->name}}
                </a>
            </p>
            <p>
                <span class="font-weight-bold text-primary">Fecha de creacion:</span>
                @php
                    $fecha = $receta->created_at; 
                @endphp
                <fecha-receta fecha="{{$fecha}}"></fecha-receta>
             
            </p>
           
            <div class="ingredientes">
                <h2 class="my-3 text-primary">Ingredientes</h2>
                {!!$receta->ingredientes!!}
            </div>
            <div class="preparacion">
                <h2 class="my-3 text-primary">Preparacion</h2>
                {!!$receta->preparacion!!}
            </div>

            
        </div>
        <div class="justify-content-center row text-center">
            <like-button receta-id="{{$receta->id}}" like="{{$like}}" likes="{{$likes}}"></like-button>
        </div>
    </article>
@endsection