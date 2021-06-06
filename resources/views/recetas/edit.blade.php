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
        <div class="col-md-10">
            <br>
            <h2 class="text-center mb-4 mt-2">Editar Receta: {{$receta->nombre}}</h2>
            <form  method="POST" action="{{route('recetas.update',['receta' =>$receta->id])}}" enctype="multipart/form-data" novalidate>
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="nombre">Nombre de la receta</label>
                    <input type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" id="nombre" value="{{$receta->nombre}}" placeholder="Nombre receta">
                    @error('nombre')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{$message}}</strong>
                        </span>               
                    @enderror
                </div>
               
                <div class="form-group">
                    <label for="categoria">Categoria</label>
                    <select name="categoria" class="form-control @error('categoria') is-invalid @enderror" id="categoria" >
                        <option value="">-- Seleccione una opcion --</option>
                        @foreach($categorias as $categoria)
                            <option value="{{$categoria->id}}" {{$receta->categoria_id == $categoria->id ? 'selected': ''}}>{{$categoria->nombre_categoria}}</option>
                        @endforeach
                    </select>
                    @error('categoria')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{$message}}</strong>
                        </span>               
                    @enderror
                </div>

                <div class="form-group mt-3">
                    <label for="preparacion">Preparacion</label>
                    <input id="preparacion" type="hidden"  name="preparacion" value="{{$receta->preparacion}}" >
                    <trix-editor input="preparacion" class="form-control @error('preparacion') is-invalid @enderror"></trix-editor>
                    @error('preparacion')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{$message}}</strong>
                        </span>               
                    @enderror
                </div>
                <div class="form-group mt-3">
                    <label for="ingredientes">Ingredientes</label>
                    <input id="ingredientes" type="hidden"  name="ingredientes" value="{{$receta->ingredientes}}">
                    <trix-editor input="ingredientes" class="form-control @error('ingredientes') is-invalid @enderror"></trix-editor>
                    @error('ingredientes')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{$message}}</strong>
                        </span>               
                    @enderror
                </div>

                <div class="form-group">
                    <label for="imagen">Selecciona la imagen</label>
                    <input type="file" name="imagen" class="form-control @error('imagen') is-invalid @enderror" id="imagen" >
                    <div class="mt-4">
                        <p>Imagen actual:</p>
                        <img src="/storage/{{$receta->imagen}}" style="width: 300px" >
                    </div>
                    @error('imagen')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{$message}}</strong>
                        </span>               
                    @enderror
                </div>



                <div class="form-group">
                    <!-- Button to Open the Modal -->
                    <button type="button" class="btn btn-success d-block mb-5 mt-4" data-toggle="modal" data-target="#myModal">
                        Guardar cambios
                     </button>
     
                 <!-- The Modal -->
                 <div class="modal" id="myModal">
                     <div class="modal-dialog">
                         <div class="modal-content">
         
                             <!-- Modal Header -->
                             <div class="modal-header">
                             <h4 class="modal-title">La receta modificado correctamente</h4>
                             <button type="button" class="close" data-dismiss="modal">&times;</button>
                             </div>
         
                             <!-- Modal body -->
                             <div class="modal-body">
                             <p>Se ha modificado la receta {{$receta->nombre}}</p>
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