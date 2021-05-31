@extends('layouts.app')

@section('botonesRecetas')
    <a href="{{route('inicio.index')}}" class="btn btn-outline-primary mr-2 text-uppercase font-weight-bold">
        <svg class="icono" className="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M11 15l-3-3m0 0l3-3m-3 3h8M3 12a9 9 0 1118 0 9 9 0 01-18 0z" /></svg>
        Atrás
    </a>
@endsection

@section('content')
    <h2 class="text-center my-5">Plan de trabajo</h2>
    @foreach($planT as $plan)
        <h1 class="text-center mb-4">{{$plan->titulo}}</h1>
        <div class="imagen-receta">
            <img src="/storage/{{$plan->imagen}}" class="w-100" alt="">
        </div>
        <div class="receta-meta mt-3">
            <p>
                <span class="font-weight-bold text-primary">Fecha de creacion:</span>
                @php
                    $fecha = $plan->created_at; 
                @endphp
                <fecha-receta fecha="{{$fecha}}"></fecha-receta>
            </p>
            <div class="preparacion">
                <h2 class="my-3 text-primary">Descripcion</h2>
                {!!$plan->descripcion!!}
            </div>
        </div>
        <div class="col-md-8 offset-md-4 mt-4">
            <button type="submit" class="btn btn-dark text-white">
                <a href="{{ route('planes.index') }}" class="text-white text-uppercase"> {{ __('COMPRAR PLAN') }}</a> 
            </button>
        </div>
    @endforeach
@endsection