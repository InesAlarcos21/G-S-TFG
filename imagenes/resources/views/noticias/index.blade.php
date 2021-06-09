@extends('layouts.app')

@section('botonesRecetas')
    <a href="{{route('inicio.index')}}" class="btn">
        <svg class="icono" className="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M11 15l-3-3m0 0l3-3m-3 3h8M3 12a9 9 0 1118 0 9 9 0 01-18 0z" /></svg>
        Atrás
    </a>
@endsection

@section('content')
<h2 class="text-center font-weight-bold mb-3">Noticias</h2>
    @foreach($noticias as $noticia)
    
      <div class="card-columns ml-4 mr-4 mb-5 shadow">
        <img class="card-img-top rounded-circle img-fluid mx-auto d-block mb-4" src="/storage/{{$noticia->imagen}}" style="width: 300px;" alt="imagen">
        <div class="card-body mb-5">
          <h3 class="card-title mt-4 text-center mb-4 ">{{$noticia->titulo}}</h3>
          <p class="mb-4 mt-5"style="text-align: justify">{{(strip_tags($noticia->descripcion))}}</p>
          <p><strong>Fuente:</strong>{{$noticia->fuente}}</p>
        </div>
      </div>
      <br>
    @endforeach

@endsection