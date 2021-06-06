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

<div class="container shadow justify-content-center">
    <div style="height:50px"></div>
    <h1 class="text-center">Añadir una nueva cita al calendario</h1>
    

    @if (count($errors) > 0)
      <div class="alert alert-danger">
       <button type="button" class="close" data-dismiss="alert">×</button>
       <ul>
        @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>
        @endforeach
       </ul>
      </div>
     @endif
     @if ($message = Session::get('success'))
     <div class="alert alert-success alert-block">
      <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
     </div>
     @endif


    <div class="col-md-12">
      <form action="{{ asset('/evento/create') }}" method="post" >
        @csrf
        <div class="fomr-group mt-3 ">
          <label>Titulo</label>
          <input type="text" class="form-control" name="titulo" placeholder="Introduce un titulo para el evento">
          @error('titulo')
            <span class="invalid-feedback d-block" role="alert">
                <strong>{{$message}}</strong>
            </span>               
          @enderror
        </div>
        
        <div class="fomr-group mt-3 ">
          <label>Usuario</label>
          <select name="usuario" class="custom-select mb-3">
            <option selected>-- Selecciona al usuario con el cual quieres crear la conferencia --</option>
            
            @foreach($usuarios as $usuario)
              @if($usuario->experto == auth()->user()->id)
              <option value="volvo">{{$usuario->name}}</option>
              @endif
            @endforeach

          </select>
          @error('usuario')
            <span class="invalid-feedback d-block" role="alert">
                <strong>{{$message}}</strong>
            </span>               
          @enderror
        </div>

        <div class="fomr-group mt-3">
          <label for="descripcion">Descripcion</label>
          <input id="descripcion" type="hidden"  name="descripcion" value="{{old('descripcion')}}" >
          <trix-editor input="descripcion" class="form-control @error('descripcion') is-invalid @enderror"></trix-editor>
          @error('descripcion')
              <span class="invalid-feedback d-block" role="alert">
                  <strong>{{$message}}</strong>
              </span>               
          @enderror
        </div>
        <div class="fomr-group mt-3">
          <label>Conferencia</label>
          <input id="conferencia" type="text" class="form-control" name="conferencia">
          @error('conferencia')
            <span class="invalid-feedback d-block" role="alert">
                <strong>{{$message}}</strong>
            </span>               
          @enderror
        </div>
        <div class="fomr-group mt-3">
          <label>Fecha</label>
          <input type="date" class="form-control" name="fecha">
         
        </div>
        <br>
        <input type="submit" class="btn btn-secondary mb-4 text-uppercase font-weight-bold" value="Guardar">
      </form>
    </div>


    <!-- inicio de semana -->


  </div> <!-- /container -->
@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.js" integrity="sha512-/1nVu72YEESEbcmhE/EvjH/RxTg62EKvYWLG3NdeZibTCuEtW5M4z3aypcvsoZw03FAopi94y04GhuqRU9p+CQ==" crossorigin="anonymous" defer></script>
@endsection
    


@endsection

   


   
