@extends('layouts.app')

@section('estilos')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.css" integrity="sha512-CWdvnJD7uGtuypLLe5rLU3eUAkbzBR3Bm1SFPEaRfvXXI2v2H5Y0057EMTzNuGGRIznt8+128QIDQ8RqmHbAdg==" crossorigin="anonymous" />
@endsection

@section('botonesRecetas')
    <a href="{{route('recetas.index')}}" class="btn">
        <svg class="icono" className="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M11 15l-3-3m0 0l3-3m-3 3h8M3 12a9 9 0 1118 0 9 9 0 01-18 0z" /></svg>
        Atrás
    </a>
@endsection

@section('content')

<h2>Nuestros entrenadores y nutricionistas</h2>

<form  method="POST" action="{{route('entrenadores.update',['usuario' =>$usuario->id])}}" enctype="multipart/form-data" novalidate>
    @csrf
    @method('PUT')
    @foreach($seleccion as $selec)
        @if($selec->tipoUser !=='Normal'  )
            <div class="card" style="width:400px">
                <img class="card-img-top" src="{{$selec->imagen}}" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h4 class="card-title">Nombre: {{$selec->name}}</h4>
                    <p class="card-text">Tipo de usuario: {{$selec->tipoUser}}</p>
                    <p class="card-text">Formación: {{(strip_tags($selec->formacion))}}</p>
                    <p class="card-text">Interes: {{(strip_tags($selec->interes))}}</p>
                    <p class="card-text">Email: {{(strip_tags($selec->email))}}</p>
                    <p class="card-text">Identificador: {{$selec->id}}</p>
                
                </div>
            </div>
        @endif
        @endforeach
    
    <div class="form-group">
        <!-- Button to Open the Modal -->
        <button type="button" class="btn btn-dark d-block mb-5 mt-4" data-toggle="modal" data-target="#myModal">
           Siguiente paso
         </button>

     <!-- The Modal -->
     <div class="modal" id="myModal">
         <div class="modal-dialog">
             <div class="modal-content">

                 <!-- Modal Header -->
                 <div class="modal-header">
                 <h4 class="modal-title">Hemos almacenado correctamente tus preferencias</h4>
                 <button type="button" class="close" data-dismiss="modal">&times;</button>
                 </div>

                 <!-- Modal body -->
                 <div class="modal-body">
                 <p>Hemos almacenado tus preferencias.  </p>
                 </div>

                 <!-- Modal footer -->
                 <div class="modal-footer">
                    <input type="submit" class="btn btn-secondary text-uppercase text-black font-weight-bold" value="Cerrar">
                 </div>
             </div>
         </div>
     </div>
     

</form>



@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.js" integrity="sha512-/1nVu72YEESEbcmhE/EvjH/RxTg62EKvYWLG3NdeZibTCuEtW5M4z3aypcvsoZw03FAopi94y04GhuqRU9p+CQ==" crossorigin="anonymous" defer></script>
@endsection


@endsection