@extends('layouts.app')

@section('botonesRecetas')
@if(auth()->user())
    <a href="{{route('recetas.index')}}" class="btn ">
        <svg class="icono" className="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M11 15l-3-3m0 0l3-3m-3 3h8M3 12a9 9 0 1118 0 9 9 0 01-18 0z" /></svg>
        Atrás
    </a>
    @endif
    @if(!auth()->user())
  <a href="{{route('inicio.index')}}" class="btn">
    <svg class="icono" className="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M11 15l-3-3m0 0l3-3m-3 3h8M3 12a9 9 0 1118 0 9 9 0 01-18 0z" /></svg>
    Atrás
  </a>
@endif
@endsection

@section('content')
    @if($perfil->usuario->tipoUser ==='Normal')
    <div class="container">
        <div class="row">
            <div class="col-md-5 shadow">
                    <img src="/storage/{{$perfil->usuario->imagen}}" alt="imagen noticia" class="card-img-top">
                </div>
            <div class="col-md-7 mt-5 mt-md-0">
                <h2 class="text-center mb-2 text-primary" style="font-size: 40px">{{$perfil->usuario->name}}</h2>
                    <div class="biografia ml-5" >
                        <p style="font-size: 20px"><strong>Datos de inter&eacute;s</strong></p>
                        <p>{!! $perfil->usuario->interes!!}</p>
                    </div>
            </div>
        </div>
    </div>
            <h2 class="text-center mt-5 mb-4">Testimonios creados por:  {{$perfil->usuario->name}}</h2>
        <div class="container">
            <div class="row mx-auto bg-white shadow p-4">
                @if(count($testimon)>0)
                    @foreach($testimon as $testi)
                        <div class="col-md-4 mb-4">
                            <div class="card shadow">
                                <img src="/storage/{{$testi->imagen}}" alt="imagen testimonial" class="card-img-top">
                                <div class="card-body">
                                    <h3>{{$testi->titulo}}</h3>
                                    <a href="{{route('testimonios.show', ['testimonial' =>$testi->id])}}" class="btn btn-primary d-block mt-4 text-uppercase font-weight-bold">Ver testimonio</a>
                                </div>
                            </div>
                        </div>             
                    @endforeach
                @else
                    <p class="text-center w-100">No hay testimonios aun....</p>
                @endif
            </div>
            
        </div>
    @endif

    @if($perfil->usuario->tipoUser === 'Licenciado en Ciencias de la Actividad Física y el Deporte' || $perfil->usuario->tipoUser === 'Licenciado en Nutricion y Dietetica')
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                    <img src="/storage/{{$perfil->usuario->imagen}}" alt="imagen noticia" class="card-img-top">
                </div>
            <div class="col-md-7 mt-5 mt-md-0">
                <h2 class="text-center mb-2 text-primary mb-5">{{$perfil->usuario->name}}</h2>
                    <div class="biografia">
                        <h5 class="mt-3 mb-3">Mi formación</h5>
                        {!! $perfil->usuario->formacion!!}

                        <h5 class="mt-3 mb-3">Datos interesantes sobre mi</h5>
                       {!!$perfil->usuario->interes!!}
                    </div>
            </div>
        </div>
    </div>
    @endif
@endsection