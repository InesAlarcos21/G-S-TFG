@extends('layouts.app')

@section('estilos')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.css" integrity="sha512-CWdvnJD7uGtuypLLe5rLU3eUAkbzBR3Bm1SFPEaRfvXXI2v2H5Y0057EMTzNuGGRIznt8+128QIDQ8RqmHbAdg==" crossorigin="anonymous" />
@endsection
@section('botonesRecetas')
<a href="{{route('listado.index')}}" class="btn">
    <svg class="icono" className="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M11 15l-3-3m0 0l3-3m-3 3h8M3 12a9 9 0 1118 0 9 9 0 01-18 0z" /></svg>
    Atrás
</a>
@endsection

@section('content')
<form class="shadow" method="POST" action="{{route('comidas.store')}}" enctype="multipart/form-data" novalidate>
  @csrf
  <br>
  <h3 class="text-center mt-2">Nuevo plan de nutrici&oacute;n</h3>
  
  <div class="form-group ml-4 mr-4">
    <label for="nombre">Titulo para la sección</label>
    <input type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" id="nombre" value="{{old('nombre')}}" placeholder="Nombre de la sección">
    @error('nombre')
        <span class="invalid-feedback d-block" role="alert">
            <strong>{{$message}}</strong>
        </span>               
    @enderror
</div>
<div class="form-group ml-4 mr-4">
  <label for="tipo">Tipo de comida</label>
  <input type="text" name="tipo" class="form-control @error('tipo') is-invalid @enderror" id="tipo" value="{{old('tipo')}}" placeholder="Tipo de sección">
  @error('tipo')
      <span class="invalid-feedback d-block" role="alert">
          <strong>{{$message}}</strong>
      </span>               
  @enderror
</div>

<div class="form-group mt-3 ml-4 mr-4">
    <label for="ingredientes">Ingredientes</label>
    <input id="ingredientes" type="hidden"  name="ingredientes" value="{{old('ingredientes')}}" >
    <trix-editor input="ingredientes" class="form-control @error('ingredientes') is-invalid @enderror"></trix-editor>
    @error('ingredientes')
        <span class="invalid-feedback d-block" role="alert">
            <strong>{{$message}}</strong>
        </span>               
    @enderror
</div>
<div class="form-group mt-3 ml-4 mr-4">
  <label for="preparacion">Preparaci&oacute;n</label>
  <input id="preparacion" type="hidden"  name="preparacion" value="{{old('preparacion')}}" >
  <trix-editor input="preparacion" class="form-control @error('preparacion') is-invalid @enderror"></trix-editor>
  @error('preparacion')
      <span class="invalid-feedback d-block" role="alert">
          <strong>{{$message}}</strong>
      </span>               
  @enderror
</div>
<div class="form-group mt-3 ml-4 mr-4">
  <label for="tiempo">Tiempo de cocinado minimo (en minutos)</label>
  <input id="tiempo" type="number"  name="tiempo" min="1" max="500" >
  @error('tiempo')
      <span class="invalid-feedback d-block" role="alert">
          <strong>{{$message}}</strong>
      </span>               
  @enderror
</div>
<div class="form-group ml-4 mr-4">
    <label for="imagen">Selecciona una imagen</label>
    <input type="file" name="imagen" class="form-control " id="imagen" >
   
</div>

<div class="form-group ml-4 mr-4">
    <input type="submit" name="" id="" class="btn btn-secondary mt-4 mb-5" value="Agregar plan">
</div>

</form>

@section('script')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.js" integrity="sha512-/1nVu72YEESEbcmhE/EvjH/RxTg62EKvYWLG3NdeZibTCuEtW5M4z3aypcvsoZw03FAopi94y04GhuqRU9p+CQ==" crossorigin="anonymous" defer></script>
@endsection
  


@endsection
   


   
