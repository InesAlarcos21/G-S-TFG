@extends('layouts.app')

@section('botonesRecetas')
    <a href="{{route('recetas.index')}}" class="btn">
        <svg class="icono" className="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M11 15l-3-3m0 0l3-3m-3 3h8M3 12a9 9 0 1118 0 9 9 0 01-18 0z" /></svg>
        Atrás
    </a>
@endsection

@section('content')

    <article class="contenido-receta bg-white p-5 shadow">
        <h1 class="text-center mb-4">{{$plan->nombre}}</h1>
        <div class="imagen-receta">
            <img src="/storage/{{$plan->imagen}}" class="w-100" alt="">
           
            <div class="descripcion">
                <h2 class="my-3 text-primary">Descripcion</h2>
                {!!$plan->descripcion!!}
            </div>
            <div class="precio">
                <h2 class="my-3 text-primary">Precio</h2>
                {!!$plan->preparacion!!}
            </div>

            
        </div>
        <div class="justify-content-center row text-center">
            <like-button receta-id="{{$receta->id}}" like="{{$like}}" likes="{{$likes}}"></like-button>
        </div>
    </article>
@endsection