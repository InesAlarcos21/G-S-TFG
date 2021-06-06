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

<div class="container">
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th>Comida</th>
          <th>Nombre</th>
          <th>Ingredientes</th>
          <th>Preparacion</th>
          <th>Tiempo</th>
          <th>Imagen</th>
        </tr>
      </thead>
      <tbody>
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
</div>

@section('script')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.js" integrity="sha512-/1nVu72YEESEbcmhE/EvjH/RxTg62EKvYWLG3NdeZibTCuEtW5M4z3aypcvsoZw03FAopi94y04GhuqRU9p+CQ==" crossorigin="anonymous" defer></script>
@endsection
  


@endsection