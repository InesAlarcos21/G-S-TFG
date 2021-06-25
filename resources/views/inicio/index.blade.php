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
        <h2 class="titulo-categoria text-uppercase mt-5 mb-4">Nuestros planes de trabajo</h2>
        <div class="row">
            <table class="table table-border table-responsive-sm ">
                <thead class="thead-dark">
                    <tr >
                        <td><img class="card-img-top rounded-lg ml-1" style="width: 300px; " src="/images/noticia2.jpg" alt="imagen"></td>
                        <td><img class="card-img-top rounded-lg ml-5" style="width: 300px; " src="/images/noticia1.jpg" alt="imagen"></td>
                        <td><img class="card-img-top rounded-lg ml-1" style="width: 250px; " src="/images/noticia3.jpg" alt="imagen"></td>
                    </tr>
                </thead>
                <tbody>
                  
                    <tr >
                        <td class="card-title mt-4 text-center text-uppercase font-weight-bold">
                            Descubren cómo el ejercicio mejora la sensibilidad a la insulina
                       </td>
                        <td class="card-title mt-4 text-center text-uppercase font-weight-bold">
                             
                            El ejercicio aeróbico protege la memoria de los mayores con alzhéimer
                       
                        </td>
                        <td class="card-title mt-4 text-center text-uppercase font-weight-bold">
                            
                            Nueva guía de alimentación saludable para mayores de 55 años
                        </td>
                    </tr>
                    <tr>
                        <td>
                           <p>El ejercicio físico mejora la sensibilidad a la insulina porque los músculos liberan microRNA que facilitan la tarea de la insulina, según los resultados de un estudio que pueden ayudar a tratar el síndrome metabólico y la diabetes.</p>
                        </td>
                        <td> 
                            <p>Un estudio piloto de la Universidad de Arizona (EE.UU.) ha descubierto que los pacientes mayores con alzhéimer de leve a moderado pueden ayudar a retrasar la pérdida de memoria si hacen ejercicio aeróbico, como pedalear en una bicicleta estática, unas tres veces a la semana.</p>
                        </td>
                        <td>
                            <p>No obstante, una gran mayoría de las personas de este rango de edad no tienen conocimientos sobre nutrición y desconocen los alimentos que necesitan para obtener los nutrientes necesarios para mantener un buen estado de salud.</p>
                        </td>
                    </tr>
                   
                    <tr >
                        <td>
                            <a href="{{route('noticias.index')}}" class="btn btn-primary d-block btn-receta">Ver noticia</a>
                        </td>
                        <td>
                            <a href="{{route('noticias.index')}}" class="btn btn-primary d-block btn-receta">Ver noticia</a> 
                        </td>
                        <td>
                            <a href="{{route('noticias.index')}}" class="btn btn-primary d-block btn-receta">Ver noticia</a>
                        </td>
                    </tr>
                </tbody>
            </table>
                @foreach($noticias as $noticia)
                    @include('ui.planes')   
                @endforeach
        </div>
    </div>
 
    
    <div class="container">
        <h2 class="titulo-categoria text-uppercase mt-5 mb-4">Nuestros planes de trabajo</h2>
        <div class="row">
            <table class="table table-border table-responsive-sm ">
                <thead class="thead-dark">
                    <tr >
                        <td class="card-title mt-4 text-center text-uppercase font-weight-bold">
                             Plan de Entrenamiento
                       </td>
                        <td class="card-title mt-4 text-center text-uppercase font-weight-bold">
                             
                         Plan de Entrenamiento y Nutrición
                       
                        </td>
                        <td class="card-title mt-4 text-center text-uppercase font-weight-bold">
                            
                            Plan de Nutrición</td>
                    </tr>
                </thead>
                <tbody>
                    <tr >
                        <td><img class="card-img-top rounded-lg ml-1" style="width: 300px; " src="/images/entrenamiento.jpg" alt="imagen"></td>
                        <td><img class="card-img-top rounded-lg ml-5" style="width: 300px; " src="/images/completo.jpg" alt="imagen"></td>
                        <td><img class="card-img-top rounded-lg ml-1" style="width: 300px; " src="/images/nutricion.jpg" alt="imagen"></td>
                    </tr>
                    <tr>
                        <td>
                            <ul>
                            <li class="mr-4"style="text-align: justify">Entrevista completa con tu nutricionista.</li>
                            <li class="mr-4"style="text-align: justify">Planes adaptados para veganos/vegetarianos, intolerancias u otro tipo de problemas</li>
                            <li class="mr-4"style="text-align: justify">Seguimiento de las sesiones vía online.</li>
                            <li class="mr-4"style="text-align: justify">Duración de las sesiones son de 60 minutos.</li>
                            <li class="mr-4"style="text-align: justify">Contacto continuo a través de nuestra aplicación y Whatsapp.</li>
                            <li class="mr-4"style="text-align: justify">Resolución de dudas.</li>
                            </ul>
                        </td>
                        <td> 
                            <ul>
                                <li class="mr-4"style="text-align: justify">Entrevista completa con tu entrenador y con tu nutricionista.</li>
                                <li class="mr-4"style="text-align: justify">Plan adaptado 100% a tus necesidades.</li>
                                <li class="mr-4"style="text-align: justify">Seguimiento de las sesiones vía online tanto para nutrición como para deporte.</li>
                                <li class="mr-4"style="text-align: justify">Duración de las sesiones de entrenamiento son 60 minutos.</li>
                                <li class="mr-4"style="text-align: justify">Contacto continuo a través de nuestra aplicación y Whatsapp.</li>
                                <li class="mr-4"style="text-align: justify">Planes adaptados a veganos/vegetarianos.</li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li class="mr-5"style="text-align: justify">Entrevista completa con tu entrenador.</li>
                                <li class="mr-5"style="text-align: justify">Plan adaptado 100% a tus necesidades.</li>
                                <li class="mr-5"style="text-align: justify">Seguimiento de las sesiones vía online.</li>
                                <li class="mr-5"style="text-align: justify">Duración de las sesiones de entrenamiento son 60 minutos.</li>
                                <li class="mr-5"style="text-align: justify">Contacto continuo a través de nuestra aplicación y Whatsapp.</li>
                                <li class="mr-5"style="text-align: justify">Resolución de dudas.</li>
                            </ul>
                        </td>
                    </tr>
                   
                    <tr >
                        <td>
                            <a href="{{route('planes.index')}}" class="btn btn-primary d-block btn-receta">Ver plan</a>
                        </td>
                        <td>
                            <a href="{{route('planes.index')}}" class="btn btn-primary d-block btn-receta">Ver plan</a> 
                        </td>
                        <td>
                            <a href="{{route('planes.index')}}" class="btn btn-primary d-block btn-receta">Ver plan</a>
                        </td>
                    </tr>
                </tbody>
            </table>
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