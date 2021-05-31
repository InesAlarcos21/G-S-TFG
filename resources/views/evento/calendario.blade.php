@extends('layouts.app')

@section('estilos')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.css" integrity="sha512-CWdvnJD7uGtuypLLe5rLU3eUAkbzBR3Bm1SFPEaRfvXXI2v2H5Y0057EMTzNuGGRIznt8+128QIDQ8RqmHbAdg==" crossorigin="anonymous" />
@endsection
@section('botonesRecetas')
<a href="{{route('recetas.index')}}" class="btn btn-outline-primary mr-2 text-uppercase font-weight-bold">
    <svg class="icono" className="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M11 15l-3-3m0 0l3-3m-3 3h8M3 12a9 9 0 1118 0 9 9 0 01-18 0z" /></svg>
    Atrás
</a>
@endsection

@section('content')

   <div class="container shadow ">
 
    <h1 class="text-center">Tu plan mensual</h1>
    <hr>
    <p class="lead">
    @if(auth()->user()->tipoUser !== 'Normal')
    <a class="btn btn-success"  href="{{ asset('/evento/form') }}">Crear un evento</a>
    @endif
 
    <hr>

    <div class="row header-calendar table-sm "  >

      <div class="col" style="display: flex; justify-content: space-between; padding: 10px;">
        <a  href="{{ asset('/calendar/event/') }}/<?= $data['last']; ?>" style="margin:10px;">
          <i class="fas fa-chevron-circle-left" style="font-size:30px;color:white;"></i>
        </a>
        <h2 style="font-weight:bold;margin:10px;"><?= $mespanish; ?> <small><?= $data['year']; ?></small></h2>
        <a  href="{{ asset('/calendar/event/') }}/<?= $data['next']; ?>" style="margin:10px;">
          <i class="fas fa-chevron-circle-right" style="font-size:30px;color:black;"></i>
        </a>
      </div>

    </div>
    <div class="row mt-2 mb-2 table-dark text-uppercase font-weight-bold ">
      <div class="col header-col mt-3 mb-3 ">Lunes</div>
      <div class="col header-col mt-3 mb-3">Martes</div>
      <div class="col header-col mt-3 mb-3">Miercoles</div>
      <div class="col header-col mt-3 mb-3">Jueves</div>
      <div class="col header-col mt-3 mb-3">Viernes</div>
      <div class="col header-col mt-3 mb-3">Sabado</div>
      <div class="col header-col mt-3 mb-3">Domingo</div>
    </div>
    <!-- inicio de semana -->
    @foreach ($data['calendar'] as $weekdata)
      <div class="row mb-5 ">
        <!-- ciclo de dia por semana -->
        @foreach  ($weekdata['datos'] as $dayweek)

        @if  ($dayweek['mes']==$mes)
          <div class="col box-day mb-5 border border-2  rounded-lg">
            {{ $dayweek['dia']  }}
            <!-- evento -->
            @foreach  ($dayweek['evento'] as $event) 
                <a class="badge badge-primary" href="{{ asset('/evento/details/') }}/{{ $event->id }}">
                  {{ $event->titulo }}
                </a>
            @endforeach
          </div>
        @else
        <div class="col box-dayoff">
        </div>
        @endif


        @endforeach
      </div>
    @endforeach

  </div> <!-- /container -->


@section('script')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.js" integrity="sha512-/1nVu72YEESEbcmhE/EvjH/RxTg62EKvYWLG3NdeZibTCuEtW5M4z3aypcvsoZw03FAopi94y04GhuqRU9p+CQ==" crossorigin="anonymous" defer></script>
@endsection
  


@endsection

 