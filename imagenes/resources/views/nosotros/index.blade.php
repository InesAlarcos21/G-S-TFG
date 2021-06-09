
@extends('layouts.app')

@section('botonesRecetas')
    <a href="{{route('inicio.index')}}" class="btn">
        <svg class="icono" className="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M11 15l-3-3m0 0l3-3m-3 3h8M3 12a9 9 0 1118 0 9 9 0 01-18 0z" /></svg>
        Atrás
    </a>
@endsection

@section('content')
<div class="card shadow">

  <h2 class="text-center font-weight-bold mb-5 mt-4 mr-5 ml-5 ">¿Quienes somos? </h2>
    <div class="container">
      <h4 class="ml-4">Nuestros entrenadores</h4>
      <br>
      @foreach($usuarios as $usuario)
        @if($usuario->tipoUser ==='Licenciado en Ciencias de la Actividad Física y el Deporte')
          <div class="card-columns mr-5 ml-5 mb-5 ">
            <img class="card-img-top rounded-circle img-fluid mx-auto d-block" src="/storage/{{$usuario->imagen}}" style="width: 300px;" alt="imagen">
            <div class="card-body">
              <h3 class="card-title mt-4 text-center ">{{$usuario->name}}</h3>
              <p>{{(strip_tags($usuario->formacion))}}</p>
              <a href="{{route('perfiles.show', ['perfil' => $usuario->id])}}" class="btn btn-dark"> Ver perfil del usuario</a>
            </div>
          </div>
        @endif
      @endforeach
    </div>
<br><br><br>
    <div class="container">
      <h4 class="ml-4">Nuestros nutricinistas</h4>
      <br>
      @foreach($usuarios as $usuario)
        @if($usuario->tipoUser ==='Licenciado en Nutricion y Dietetica')
          <div class="card-columns mr-5 ml-5 mb-5  ">
           
            <div class="card-body">
              <h3 class="card-title mt-4 text-center ">{{$usuario->name}}</h3>
              <p>{{(strip_tags($usuario->formacion))}}</p>
              <a href="{{route('perfiles.show', ['perfil' => $usuario->id])}}" class="btn btn-dark"> Ver perfil del usuario</a>
              <img class="card-img-top rounded-circle img-fluid"style=" position: relative;
              left: 355px;"  src="/storage/{{$usuario->imagen}}" style="width: 300px;" alt="imagen">
            </div>
          </div>
        @endif
      @endforeach
    </div>

         
     
@endsection


