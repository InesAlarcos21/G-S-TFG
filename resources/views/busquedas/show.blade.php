@extends('layouts.app')

@section('content')
   ç
        <h2 class="titulo-categoria">Resultado de la busqueda: {{$busqueda}}</h2>
        <div class="row">
            @foreach($recetas as $receta)
                @include('ui.receta')              
            @endforeach
        </div>
        <div class="col-12 mt-4 justify-content-center d-flex">
            {{$recetas->links()}}
        </div>


@endsection