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



    <div class="row justify-content-center shadow">
        <h2 class="text-center mt-5">Nueva entrada en la sección de nosotros</h2>
        <div class="col-md-10">
            <form  method="POST" action="{{route('nosotros.store')}}" enctype="multipart/form-data" novalidate>
                @csrf
                <div class="form-group">
                    <label for="titulo">Titulo para la sección</label>
                    <input type="text" name="titulo" class="form-control @error('titulo') is-invalid @enderror" id="titulo" value="{{old('titulo')}}" placeholder="Titulo de la sección">
                    @error('titulo')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{$message}}</strong>
                        </span>               
                    @enderror
                </div>

                <div class="form-group mt-3">
                    <label for="descripcion">Descripción</label>
                    <input id="descripcion" type="hidden"  name="descripcion" value="{{old('descripcion')}}" >
                    <trix-editor input="descripcion" class="form-control @error('descripcion') is-invalid @enderror"></trix-editor>
                    @error('descripcion')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{$message}}</strong>
                        </span>               
                    @enderror
                </div>
                <div class="form-group">
                    <label for="imagen">Selecciona una imagen</label>
                    <input type="file" name="imagen" class="form-control @error('imagen') is-invalid @enderror" id="imagen" >
                    @error('imagen')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{$message}}</strong>
                        </span>               
                    @enderror
                </div>

                <div class="form-group">
                    <input type="submit" name="" id="" class="btn btn-secondary mt-4 mb-5" value="Agregar sección">
                </div>
            </form>  
        </div>

        
    </div>
@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.js" integrity="sha512-/1nVu72YEESEbcmhE/EvjH/RxTg62EKvYWLG3NdeZibTCuEtW5M4z3aypcvsoZw03FAopi94y04GhuqRU9p+CQ==" crossorigin="anonymous" defer></script>
@endsection
    


@endsection