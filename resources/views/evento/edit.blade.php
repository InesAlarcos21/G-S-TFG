@extends('layouts.app')

@section('estilos')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.css" integrity="sha512-CWdvnJD7uGtuypLLe5rLU3eUAkbzBR3Bm1SFPEaRfvXXI2v2H5Y0057EMTzNuGGRIznt8+128QIDQ8RqmHbAdg==" crossorigin="anonymous" />
@endsection

@section('botonesRecetas')
    <a href="{{route('evento.index')}}" class="btn btn-outline-primary mr-2 text-uppercase font-weight-bold">
        <svg class="icono" className="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M11 15l-3-3m0 0l3-3m-3 3h8M3 12a9 9 0 1118 0 9 9 0 01-18 0z" /></svg>
        Atrás
    </a>
@endsection

@section('content')
    <div class="row justify-content-center shadow">
        <br>
        <h2 class="text-center mt-4 ">Editar evento: {{$event->titulo}}</h2>

        <div class="col-md-10">
            <form  method="POST" action="{{route('evento.update', ['event' =>$event->id])}}" enctype="multipart/form-data" novalidate>
                @csrf
                @method('PUT')
                <div class="fomr-group">
                    <label>Titulo</label>
                    <input type="text" class="form-control" @error('titulo') is aria-invalid @enderror id="titulo" name="titulo" placeholder="Titulo del evento" value="{{$event->titulo}}">
                    @error('titulo')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{$message}}</strong>
                        </span>               
                    @enderror
                </div>
                <div class="fomr-group">
                    <label for="descripcion">Descripcion</label>
                    <input id="descripcion" type="hidden"  name="descripcion" value="{{$event->descripcion}}" >
                    <trix-editor input="descripcion" class="form-control @error('descripcion') is-invalid @enderror"></trix-editor>
                    @error('descripcion')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{$message}}</strong>
                        </span>               
                    @enderror
                </div>
                <div class="fomr-group">
                    <label>Conferencia</label>
                    <input type="text" class="form-control" @error('conferencia') is aria-invalid @enderror id="conferencia" name="conferencia" placeholder="Enlace de la conferencia" value="{{$event->conferencia}}">
                    @error('conferencia')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{$message}}</strong>
                        </span>               
                    @enderror
                </div>
                <div class="fomr-group">
                    <label>Fecha</label>
                    <input type="date" class="form-control  @error('fecha') is aria-invalid @enderror" name="fecha" value="{{$event->fecha}}">
                    @error('fecha')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                    </span>               
                @enderror
                </div>
                <br>

                <div class="form-group">
                    <!-- Button to Open the Modal -->
                    <button type="button" class="btn btn-success d-block mb-1 w-100" data-toggle="modal" data-target="#myModal">
                        Guardar cambios
                     </button>
     
                 <!-- The Modal -->
                 <div class="modal" id="myModal">
                     <div class="modal-dialog">
                         <div class="modal-content">
         
                             <!-- Modal Header -->
                             <div class="modal-header">
                             <h4 class="modal-title">Evento modificado correctamente</h4>
                             <button type="button" class="close" data-dismiss="modal">&times;</button>
                             </div>
         
                             <!-- Modal body -->
                             <div class="modal-body">
                             <p>Se ha modificado el evento</p>
                             </div>
         
                             <!-- Modal footer -->
                             <div class="modal-footer">
                                <input type="submit" class="btn btn-secondary text-uppercase text-black font-weight-bold" value="Cerrar">
                             </div>
                         </div>
                     </div>
                 </div>
             </div>

            </form>  
        </div>

        
    </div>
@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.js" integrity="sha512-/1nVu72YEESEbcmhE/EvjH/RxTg62EKvYWLG3NdeZibTCuEtW5M4z3aypcvsoZw03FAopi94y04GhuqRU9p+CQ==" crossorigin="anonymous" defer></script>
@endsection
    


@endsection