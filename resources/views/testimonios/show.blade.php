@extends('layouts.app')

@section('botonesRecetas')
    <a href="{{route('inicio.index')}}" class="btn btn-outline-primary mr-2 text-uppercase font-weight-bold">
        <svg class="icono" className="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M11 15l-3-3m0 0l3-3m-3 3h8M3 12a9 9 0 1118 0 9 9 0 01-18 0z" /></svg>
        Atrás
    </a>
@endsection

@section('content')
<div class="card shadow">
    @foreach($testimonios as $testimonio)
    
        <h1 class="text-center  font-weight-bold mb-5 mt-3 ">{{$testimonio->titulo}}</h1>
        <div class="card-columns ml-4 mr-4 mb-5 shadow">
            <img class="card-img-top rounded img-fluid mx-auto d-block" src="/storage/{{$testimonio->imagen}}" style="width: 700px;" alt="imagen">
            <div class="card-body">
              <p>
                <span class="font-weight-bold text-primary">Autor: {{$testimonio->autor->name}}</span>        
            </p>   
            <div class="preparacion">
                <h5 class=" text-primary">Descripcion</h5>
                {!!$testimonio->descripcion!!}
            </div>
            </div>
          </div>
       
    @endforeach
</div>
@endsection