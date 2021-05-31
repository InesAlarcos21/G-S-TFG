@extends('layouts.app')

@section('botonesRecetas')
    @include('ui.navegacion')
@endsection

@section('content')


    <div class="col-md-12 mx-auto bg-white p-3">
        @if(auth()->user()->plan == 'Nutricion')
        <h2 class="text-center mb-3">Tu Plan Semanal</h2>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scole="col">Comida</th>
                    <th scole="col">Nombre</th>
                    <th scole="col">Ingredientes</th>
                    <th scole="col">Preparación</th>
                    <th scole="col">Tiempo</th>
                    <th scole="col">Imagen</th>
                </tr>
            </thead>
            <tbody>
                @foreach($comidas as $comida)
                <tr>
                  <td>{{$comida->tipo}}</td>
                  <td>{{$comida->nombre}}</td>
                  <td>{{(strip_tags($comida->ingredientes))}}</td>
                  <td>{{(strip_tags($comida->preparacion))}}</td>
                  <td>{{$comida->tiempo}}</td>
                  <td> <img class="card-img-top rounded-lg" style ="width: 90px;"src="/storage/{{$comida->imagen}}" alt="imagen"></td>
                  <td>
              
                </tr>
                @endforeach

            
            </tbody>
        </table>
      @endif
      @if(auth()->user()->plan == 'Entrenamiento')
      <h2 class="text-center mb-3">Tu Plan Semanal</h2>
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th>Entrenamiento</th>
            <th>Ejercicio</th>
            <th>Repeticiones</th>
            <th>Tiempo</th>
            <th>Imagen</th>
          </tr>
        </thead>
        <tbody>
          <tbody>
              @foreach($entrenos as $entreno)
              <tr>
              
                <td>{{$entreno->nombre}}</td>
                <td>{{(strip_tags($entreno->ejercicio))}}</td>
                <td>{{$entreno->repeticion}}</td>
                <td>{{$entreno->tiempo}}</td>
                <td> <img class="card-img-top rounded-lg" style ="width: 90px;"src="/storage/{{$entreno->imagen}}" alt="imagen"></td>
                <td>
            
              </tr>
              @endforeach
        </tbody>
      </table>
      @endif

      @if(auth()->user()->tipoUser == 'Licenciado en Nutricion y Dietetica')
      @foreach($clientes as $cliente)
      @if($listados->id == $cliente->experto)
  
        <div class="container">
        <h2 class="text-center mb-3">Tus clientes</h2>
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
                <td> <img class="card-img-top rounded-lg" style ="width: 90px;"src="/storage/{{$cliente->imagen}}" alt="imagen"></td>
                <td>{{$cliente->name}}</td>
                <td>{{$cliente->apellido}}</td>
                <td>{{$cliente->email}}</td>
                <td>{{(strip_tags($cliente->interes))}}</td>
                <td>
  
                  
                      <a href="{{route('comidas.create')}}" class="btn btn-success d-block mb-1">Crear plan</a>
                
                  
                    <a href="{{route('comidas.show',['id' =>$cliente->id])}}"class="btn btn-dark d-block mb-1">Ver Plan</a>
                

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
                           <form action="{{route('listado.destroy',['usuario' =>$cliente->id])}}" method="POST">
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
      @endif

      @if(auth()->user()->tipoUser == 'Licenciado en Ciencias de la Actividad Física y el Deporte')
      @foreach($clientes as $cliente)
      @if($listados->id == $cliente->experto)
  
        <div class="container">
            <h2 class="text-center mb-3">Tus clientes</h2>
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
                <td> <img class="card-img-top rounded-lg" style ="width: 90px;"src="/storage/{{$cliente->imagen}}" alt="imagen"></td>
                <td>{{$cliente->name}}</td>
                <td>{{$cliente->apellido}}</td>
                <td>{{$cliente->email}}</td>
                <td>{{(strip_tags($cliente->interes))}}</td>
                <td>
  
                  @if(auth()->user()->tipoUser ==='Licenciado en Nutricion y Dietetica')
                      <a href="{{route('comidas.create')}}" class="btn btn-success d-block mb-1">Crear plan</a>
                  @endif  
                  @if(auth()->user()->tipoUser ==='Licenciado en Nutricion y Dietetica')
                    <a href="{{route('comidas.show',['id' =>$cliente->id])}}"class="btn btn-dark d-block mb-1">Ver Plan</a>
                   @endif
  
  
                  @if(auth()->user()->tipoUser ==='Licenciado en Ciencias de la Actividad Física y el Deporte')
                  <a href="{{route('entrenos.create')}}" class="btn btn-success d-block mb-1">Crear plan</a>
                  @endif
                  @if(auth()->user()->tipoUser ==='Licenciado en Ciencias de la Actividad Física y el Deporte')
                  <a href="{{route('entrenos.show',['id' =>$cliente->id])}}"class="btn btn-dark d-block mb-1">Ver Plan</a>
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
                           <form action="{{route('listado.destroy',['usuario' =>$cliente->id])}}" method="POST">
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
      @endif
    </div>

   




@endsection