@extends('layouts.app')

@section('estilos')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.css" integrity="sha512-CWdvnJD7uGtuypLLe5rLU3eUAkbzBR3Bm1SFPEaRfvXXI2v2H5Y0057EMTzNuGGRIznt8+128QIDQ8RqmHbAdg==" crossorigin="anonymous" />
    
@endsection
@section('botonesRecetas')
<a href="{{route('inicio.index')}}" class="btn">
    <svg class="icono" className="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M11 15l-3-3m0 0l3-3m-3 3h8M3 12a9 9 0 1118 0 9 9 0 01-18 0z" /></svg>
    Atrás
</a>

@section('content')
<div class="row justify-content-center mt-5 shadow">
    <div class="col-md-8">
      <h1><strong>Correo electronico por: </strong>{{$contacto['email']}}</h1>
      <p><strong>Titulo de la duda: </strong>{{strip_tags($contacto['duda']  )}}</p>
      <p><strong>Descripción de la duda: </strong>{{$contacto['descripcion']}}</p>
     
    </div>

@endsection

