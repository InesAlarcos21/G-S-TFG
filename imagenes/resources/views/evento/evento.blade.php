@extends('layouts.app')

@section('estilos')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.css" integrity="sha512-CWdvnJD7uGtuypLLe5rLU3eUAkbzBR3Bm1SFPEaRfvXXI2v2H5Y0057EMTzNuGGRIznt8+128QIDQ8RqmHbAdg==" crossorigin="anonymous" />
@endsection
@section('botonesRecetas')
<a href="{{route('evento.index')}}" class="btn">
    <svg class="icono" className="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M11 15l-3-3m0 0l3-3m-3 3h8M3 12a9 9 0 1118 0 9 9 0 01-18 0z" /></svg>
    Atrás
</a>
@endsection

@section('content')
<div class="container">
    <div style="height:50px"></div>
    <h1 class="text-center">Detalles de evento</h1>
    <p class="lead">
    <hr>
    <div class="col-md-12 mx-auto bg-white p-3 shadow">
      <table class="table">
          <thead class="bg-primary text-light">
            <tr>
              <th scole="col">Titulo</th>
              <th scole="col">Descripcion</th>
              <th scole="col">Conferencia</th>
              <th scole="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
          <td>   {{ $event->titulo }}</td>
          <td>   {{strip_tags( $event->descripcion )}}</td>
          <td><a href="{{$event->conferencia}}"  class="btn btn-secondary mr-2">{{$event->conferencia}}</a></td>
          <td>
            <a href="{{route('evento.edit',['event' =>$event->id])}}"class="btn btn-dark d-block mb-1">Modificar</a>

            <!-- Button to Open the Modal -->
            <button type="button" class="btn btn-danger d-block mb-1 w-100" data-toggle="modal" data-target="#myModal">
             Eliminar
            </button>

            <!-- The Modal -->
            <div class="modal" id="myModal">
              <div class="modal-dialog">
                <div class="modal-content">

                  <!-- Modal Header -->
                  <div class="modal-header">
                    <h4 class="modal-title">¿Estas seguro de que quieres eliminar esta cita {{$event->titulo}}? </h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>

                  <!-- Modal body -->
                  <div class="modal-body">
                    <p>La cita {{$event->titulo}} programada para el dia {{$event->fecha}} se eliminara.... </p>
                  </div>

                  <!-- Modal footer -->
                  <div class="modal-footer">
                    <form action="{{route('evento.destroy',['evento' =>$event->id])}}" method="POST">
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
     
        </tbody>
      </table>

    </div>
  

    <!-- inicio de semana -->


  </div> <!-- /container -->
  @section('script')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.js" integrity="sha512-/1nVu72YEESEbcmhE/EvjH/RxTg62EKvYWLG3NdeZibTCuEtW5M4z3aypcvsoZw03FAopi94y04GhuqRU9p+CQ==" crossorigin="anonymous" defer></script>
@endsection
  


@endsection

 