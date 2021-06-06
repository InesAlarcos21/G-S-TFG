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


  @foreach($usuarios as $usuario)
    @if($listados->id == $usuario->experto)

      <div class="container">
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th>Fotografia</th>
              <th>Nombre</th>
              <th>Apellidos</th>
              <th>Email</th>
              <th>Datos de interes</th>
              <th>Acciones</th>

            </tr>
          </thead>
          <tbody>
            <tr>
              <td> <img class="card-img-top rounded-lg" style ="width: 90px;"src="/storage/{{$usuario->imagen}}" alt="imagen"></td>
              <td>{{$usuario->name}}</td>
              <td>{{$usuario->apellido}}</td>
              <td>{{$usuario->email}}</td>
              <td>{{(strip_tags($usuario->interes))}}</td>
              <td>

                @if(auth()->user()->tipoUser ==='Licenciado en Nutricion y Dietetica')
                    <a href="{{route('comidas.create')}}" class="btn btn-success d-block mb-1">Crear plan</a>
                @endif  
                @if(auth()->user()->tipoUser ==='Licenciado en Nutricion y Dietetica')
                  <a href="{{route('comidas.show',['id' =>$usuario->id])}}"class="btn btn-dark d-block mb-1">Ver Plan</a>
                 @endif


                @if(auth()->user()->tipoUser ==='Licenciado en Ciencias de la Actividad Física y el Deporte')
                <a href="{{route('entrenos.create')}}" class="btn btn-success d-block mb-1">Crear plan</a>
                @endif
                @if(auth()->user()->tipoUser ==='Licenciado en Ciencias de la Actividad Física y el Deporte')
                <a href="{{route('entrenos.show',['id' =>$usuario->id])}}"class="btn btn-dark d-block mb-1">Ver Plan</a>
               @endif 
               
                <button type="button" class="btn btn-danger d-block mb-1 w-100" data-toggle="modal" data-target="#myModal">
                  Eliminar Usuario
                 </button>
     
                 <!-- The Modal -->
                 <div class="modal" id="myModal">
                   <div class="modal-dialog">
                     <div class="modal-content">
     
                       <!-- Modal Header -->
                       <div class="modal-header">
                         <h4 class="modal-title">¿Estas seguro de que quieres eliminar esta cita ? </h4>
                         <button type="button" class="close" data-dismiss="modal">&times;</button>
                       </div>
     
                       <!-- Modal body -->
                       <div class="modal-body">
                         <p>La cita se eliminara.... </p>
                       </div>
     
                       <!-- Modal footer -->
                       <div class="modal-footer">
                         <form action="{{route('listado.destroy',['usuario' =>$usuario->id])}}" method="POST">
                           @csrf
                           @method('delete')
                           <input type="submit" name="" id="" class="btn btn-danger d-block mb-1 w-100" value="Eliminar &times; ">
                         </form>
                         <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                       </div>
     
                     </div>
                   </div>
                 </div>
               </td>  
              </td>
   
            </tr>
          </tbody>
        </table>
      </div>
@endif
@endforeach


@section('script')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.js" integrity="sha512-/1nVu72YEESEbcmhE/EvjH/RxTg62EKvYWLG3NdeZibTCuEtW5M4z3aypcvsoZw03FAopi94y04GhuqRU9p+CQ==" crossorigin="anonymous" defer></script>
@endsection
  


@endsection
