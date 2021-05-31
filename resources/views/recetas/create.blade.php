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


    <div class="row justify-content-center shadow">   
    
        <div class="col-md-10">
            <br>
          
            <form  method="POST" action="{{route('recetas.store')}}" enctype="multipart/form-data" novalidate>
                @csrf

                @if(auth()->user()->tipoUser === 'Licenciado en Ciencias de la Actividad Física y el Deporte')
                 <h3 class="text-center mt-2 mb-4">Nueva sesi&oacute;n de trabajo</h3>    
                <div class="form-group">
                        <label for="nombre">Nombre de la sesi&oacute;n</label>
                        <input type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" id="nombre" value="{{old('nombre')}}" placeholder="Nombre de la sesión">
                        @error('nombre')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{$message}}</strong>
                            </span>               
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="cliente_id">Cliente</label>
                        <select name="cliente_id" class="form-control @error('cliente_id') is-invalid @enderror" id="cliente_id" >
                            <option value="">-- Seleccione una opcion --</option>
                                @foreach($clientes as $cliente)
                                @if(auth()->user()->id == $cliente->experto)
                                    <option value="{{$cliente->id}}"{{old('categoria')  == $cliente->id ? 'selected': ''}}>{{$cliente->name }}</option>
                                @endif
                                @endforeach
                            
                        </select>
                        @error('cliente_id')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{$message}}</strong>
                            </span>               
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="entrenos">Categoria</label>
                        <select name="entrenos" class="form-control @error('entrenos') is-invalid @enderror" id="entrenos" >
                            <option value="">-- Seleccione una opcion --</option>
                            @foreach($entrenos as $entreno)
                                <option value="{{$entreno->id}}" {{old('entrenos') == $entreno->id ? 'entrenos': ''}}>{{$entreno->nombre_categoria}}</option>
                            @endforeach
                        </select>
                        @error('entrenos')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{$message}}</strong>
                            </span>               
                        @enderror
                    </div>
                    <div class="form-group mt-3">
                        <label for="ejercicios">Listado de ejercicios par la sesi&oacute;n</label>
                        <input id="ejercicios" type="hidden"  name="ejercicios" value="{{old('ejercicios')}}" >
                        <trix-editor input="ejercicios" class="form-control @error('ejercicios') is-invalid @enderror"></trix-editor>
                        @error('ejercicios')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{$message}}</strong>
                            </span>               
                        @enderror
                    </div>
                    <div class="form-group mt-3">
                        <label for="repeticiones">Repeticiones (minimas) que se deben hacer por ejercicio</label>
                        <input id="repeticiones" type="number"  name="repeticiones" min="1" max="90" >
                      
                        @error('repeticiones')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{$message}}</strong>
                            </span>               
                        @enderror
                    </div>


                    <div class="form-group">
                        <label for="imagen">Selecciona la imagen</label>
                        <input type="file" name="imagen" class="form-control @error('imagen') is-invalid @enderror" id="imagen" value="{{old('imagen')}}" placeholder="Nombre receta">
                        @error('imagen')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{$message}}</strong>
                            </span>               
                        @enderror
                    </div>
                @endif
            
              
                @if(auth()->user()->tipoUser === 'Licenciado en Nutricion y Dietetica')
                <h3 class="text-center mt-2 mb-4">Nueva comida para el plan</h3>
                <div class="form-group">
                    <label for="nombre">Nombre de la receta</label>
                    <input type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" id="nombre" value="{{old('nombre')}}" placeholder="Nombre receta">
                    @error('nombre')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{$message}}</strong>
                        </span>               
                    @enderror
                </div>
                <div class="form-group">
                    <label for="clientes_id">Cliente</label>
                    <select name="clientes_id" class="form-control @error('clientes_id') is-invalid @enderror" id="clientes_id" >
                        <option value="">-- Seleccione una opcion --</option>
                        @foreach($clientes as $cliente)
                       
                            @if(auth()->user()->id == $cliente->experto)
                            
                                <option value="{{$cliente->id}}" {{old('clientes_id') == $cliente->id ? 'selected': ''}}>{{$cliente->name }} {{$cliente->apellido}}</option>
                            @endif
                        @endforeach
                    </select>
                    @error('clientes_id')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{$message}}</strong>
                        </span>               
                    @enderror
                </div>
                <div class="form-group">
                    <label for="recetas_id">Categoria</label>
                    <select name="recetas_id" class="form-control @error('recetas_id') is-invalid @enderror" id="recetas_id" >
                        <option value="">-- Seleccione una opcion --</option>
                        @foreach($categorias as $categoria)
                            <option value="{{$categoria->id}}" {{old('recetas_id') == $categoria->id ? 'selected': ''}}>{{$categoria->nombre_categoria}}</option>
                        @endforeach
                    </select>
                    @error('recetas_id')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{$message}}</strong>
                        </span>               
                    @enderror
                </div>
                <div class="form-group mt-3">
                    <label for="ingredientes">Ingredientes</label>
                    <input id="ingredientes" type="hidden"  name="ingredientes" value="{{old('ingredientes')}}">
                    <trix-editor input="ingredientes" class="form-control @error('ingredientes') is-invalid @enderror"></trix-editor>
                    @error('ingredientes')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{$message}}</strong>
                        </span>               
                    @enderror
                </div>

                <div class="form-group mt-3">
                    <label for="preparacion">Preparacion</label>
                    <input id="preparacion" type="hidden"  name="preparacion" value="{{old('preparacion')}}" >
                    <trix-editor input="preparacion" class="form-control @error('preparacion') is-invalid @enderror"></trix-editor>
                    @error('preparacion')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{$message}}</strong>
                        </span>               
                    @enderror
                </div>
                
                <div class="form-group mt-3">
                    <label for="tiempoCocinado">Tiempo de cocinado minimo (en minutos)</label>
                    <input id="tiempoCocinado" type="number"  name="tiempoCocinado" min="1" max="500" >
                  
                    @error('tiempoCocinado')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{$message}}</strong>
                        </span>               
                    @enderror
                </div>

                <div class="form-group">
                    <label for="imagen">Selecciona la imagen</label>
                    <input type="file" name="imagen" class="form-control @error('imagen') is-invalid @enderror" id="imagen" value="{{old('imagen')}}" placeholder="Nombre receta">
                    @error('imagen')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{$message}}</strong>
                        </span>               
                    @enderror
                </div>
                @endif

                <div class="form-group">
                    <input type="submit" name="" id="" class="btn btn-secondary mt-4 mb-5" value="Agregar Receta">
                </div>
            </form>  
        </div>

        
    </div>
@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.js" integrity="sha512-/1nVu72YEESEbcmhE/EvjH/RxTg62EKvYWLG3NdeZibTCuEtW5M4z3aypcvsoZw03FAopi94y04GhuqRU9p+CQ==" crossorigin="anonymous" defer></script>
@endsection
    


@endsection