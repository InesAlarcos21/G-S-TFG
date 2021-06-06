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

<h2>Selecciona a uno de nuestros entrenados o nutricionistas </h2>

<form  method="POST" action="{{route('entrenadores.update',['usuario' =>$usuario->id])}}" enctype="multipart/form-data" novalidate>
    @csrf
    @method('PUT')

    @foreach($seleccion as $selec)
        @if( $selec->tipoUser =='Licenciado en Ciencias de la Actividad Física y el Deporte' && $selec->tipoUser !=='Administrador')
        
           <h4>Nuestros entrenadores</h4>

           <div class="container">
            <table class="table">
              <thead class="thead-dark">
                <tr>
                  <th>Fotografia</th>
                  <th>Nombre</th>
                  <th>Apellidos</th>
                  <th>Email</th>
                  <th>Formaci&oacute;n</th>
                  <th>Datos de inter&eacute;s</th>
                  <th>Seleccionar Entrenador</th>
    
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td> <img class="card-img-top rounded-lg" style ="width: 90px;"src="/storage/{{$selec->imagen}}" alt="imagen"></td>
                  <td>{{$selec->name}}</td>
                  <td>{{$selec->apellido}}</td>
                  <td>{{$selec->email}}</td>
                  <td>{{(strip_tags($selec->formacion))}}</td>
                  <td>{{(strip_tags($selec->interes))}}</td>
                  <td><input id="experto" type="radio" class=" btn btn-secondary @error('experto') is-invalid @enderror" name="experto" value="{{$selec->id}}" required autocomplete="experto">Seleccionar</td>
       
                </tr>
              </tbody>
            </table>
          </div>
      
        
        @endif
    @endforeach

    @foreach($seleccion as $selec)
        @if($selec->tipoUser =='Licenciado en Nutricion y Dietetica' && $selec->tipoUser !=='Administrador')
        
           <h4>Nuestros Nutricionistas</h4>
           <div class="container">
            <table class="table">
              <thead class="thead-dark">
                <tr>
                  <th>Fotografia</th>
                  <th>Nombre</th>
                  <th>Apellidos</th>
                  <th>Email</th>
                  <th>Formaci&oacute;n</th>
                  <th>Datos de inter&eacute;s</th>
                  <th>Seleccionar Nutricionista</th>
    
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td> <img class="card-img-top rounded-lg" style ="width: 90px;"src="/storage/{{$selec->imagen}}" alt="imagen"></td>
                  <td>{{$selec->name}}</td>
                  <td>{{$selec->apellido}}</td>
                  <td>{{$selec->email}}</td>
                  <td>{{(strip_tags($selec->formacion))}}</td>
                  <td>{{(strip_tags($selec->interes))}}</td>
                  <td><input id="experto" type="radio" class=" btn btn-secondary @error('experto') is-invalid @enderror" name="experto" value="{{$selec->id}}" required autocomplete="experto">Seleccionar</td>
       
                </tr>
              </tbody>
            </table>
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