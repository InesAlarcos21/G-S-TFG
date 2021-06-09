@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />

@endsection

@section('hero')
    <div class="hero-categorias ">
        <form  class="container h-100 aling-right" action="{{route('buscar.search')}}">
            <div class="row h-100 align-items-right">
                <div class="col-md-4 texto-buscar">
                    <input type="search" name="buscar" class="form-control" placeholder="Buscador" id=""/>
                </div>
            </div>
        </form>
    </div>
@endsection

@section('content')
    <div class="eslogan">
        <img class="card-img-top rounded-lg" style ="width:700px; align: center; margin-left: 225px;"src="/storage/upload-eslogan/cabeceraEslogan.png" alt="imagen">
    </div>
    <div class="container">
        <h2 class="titulo-categoria text-uppercase mt-5 mb-4">Noticias destacadas</h2>
        <div class="row ">       
                @foreach($noticias as $noticia)
                    @include('ui.noticias')   
                @endforeach
        </div>
    </div>
    <div class="container">
        <h2 class="titulo-categoria text-uppercase mt-5 mb-4">Nuestros planes de trabajo</h2>
        <div class="row">       
                @foreach($planes as $plan)
                    @include('ui.planes')   
                @endforeach
        </div>
    </div>
    <div class="container">
        <h2 class="titulo-categoria text-uppercase mt-5 mb-4">Tesimoios de nuestra comunidad</h2>
        <div class="row">       
                @foreach($testimonios as $testimonio)
                    @include('ui.testimoniales')   
                @endforeach
        </div>
    </div>

   
@endsection