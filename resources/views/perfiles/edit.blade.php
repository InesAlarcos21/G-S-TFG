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
{{--{{$perfil}}--}}
    
    <div class="row justify-content-center bg-white shadow">
        <h1 class="text-center mt-5">Editar mi perfil</h1>
        <div class="col-md-10  p-3">
            <form action="{{route('perfiles.update',['perfil'=>$perfil->id])}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT') 
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" id="nombre" value="{{$perfil->usuario->name}}" placeholder="Tu nombre" >
                    
                    @error('nombre')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{$message}}</strong>
                        </span>               
                    @enderror
                </div>
                <div class="form-group">
                    <label for="apellido">Apellido</label>
                    <input type="text" name="apellido" class="form-control @error('apellido') is-invalid @enderror" id="apellido" value="{{$perfil->usuario->apellido}}" placeholder="Tu apellido" >
                    
                    @error('apellido')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{$message}}</strong>
                        </span>               
                    @enderror
                </div>
                <div class="form-group ">
                    <label for="sexo">{{ __('Sexo') }}</label>
                    <div class="col-md-8">
                        <input id="sexo" type="radio" class=" @error('sexo') is-invalid @enderror" name="sexo" value="{{$perfil->usuario->sexo}}"  autocomplete="sexo">Masculino
                        <br>
                        <input id="sexo" type="radio" class=" @error('sexo') is-invalid @enderror " name="sexo" value="{{$perfil->usuario->sexo}}"  autocomplete="sexo">Femenino
                    @error('sexo')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group ">
                    <label for="email">{{ __('E-Mail Address') }}</label>
                    <input id="email" type="email" class="form-control" name="email"value="{{$perfil->usuario->email}}"  autocomplete="email" placeholder="Tu correo">
                </div>
                <div class="form-group ">
                    <label for="password">{{ __('Password') }}</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"   autocomplete="new-password" placeholder="Tu contraseña">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group ">
                    <label for="password-confirm">{{ __('Confirm Password') }}</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation"   autocomplete="new-password" placeholder="Tu contraseña">
                </div>
            
                <div class="form-group">
                    <label for="imagen">Tu imagen</label>
                    <input type="file" name="imagen" class="form-control @error('imagen') is-invalid @enderror" id="imagen" >
                    @if($perfil->imagen)
                        <div class="mt-4">
                            <p>Imagen actual:</p>
                            <img src="/storage/{{$perfil->imagen}}" style="width: 300px" >
                        </div>
                        @error('imagen')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{$message}}</strong>
                            </span>               
                        @enderror
                    @endif
                </div>
                @if($perfil->usuario->tipoUser === 'Licenciado en Ciencias de la Actividad Física y el Deporte' || $perfil->usuario->tipoUser === 'Licenciado en Nutricion y Dietetica')
                    <div class="form-group">
                        <label for="formacion">Curriculum y formación </label>
                        <input id="formacion" type="hidden"  name="formacion" value="" >
                        <trix-editor input="formacion" class="form-control @error('formacion') is-invalid @enderror" value="{{$perfil->usuario->formacion}}" placeholder="Añade tu curriculum y la formación que hayas adquirido"></trix-editor>
                        @error('formacion')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{$message}}</strong>
                            </span>               
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="interes">Datos de interes</label>
                        <input id="interes" type="hidden"  name="interes" value="">
                        <trix-editor input="interes" class="form-control @error('interes') is-invalid @enderror" value="{{$perfil->usuario->interes}}" placeholder="Añade datos de interes a tu perfil"></trix-editor>
                        @error('interes')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{$message}}</strong>
                            </span>               
                        @enderror
                    </div>
                @endif

                <div class="form-group ">
                    @if($perfil->usuario->tipoUser === 'Normal')
                    <label for="plan">¿Deseas cambiar de tipo de plan actual</label>
                    
                        <select id="plan" class="form-control @error('plan') is-invalid @enderror" name="plan" value="{{$perfil->usuario->plan}}" autocomplete="plan" autofocus>
                            <option selected value="0" selected>Elige un plan de trabajo</option>
                            <option selected value="Entrenamiento">Plan Solo de Entrenamiento</option>
                            <option selected value="Nutricion">Plan Solo Nutricion </option> 
                            <option selected value="Completo">Plan de Entrenamiento y Nutricion </option>
                        </select>
                        @error('plan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    @endif
                </div>

                <div class="form-group">
                    <!-- Button to Open the Modal -->
                    <button type="button" class="btn btn-success d-block mb-1 mt-5" data-toggle="modal" data-target="#myModal">
                        Actualizar perfil
                     </button>
     
                 <!-- The Modal -->
                 <div class="modal" id="myModal">
                     <div class="modal-dialog">
                         <div class="modal-content">
         
                             <!-- Modal Header -->
                             <div class="modal-header">
                             <h4 class="modal-title">El perfil {{$perfil->usuario->name}} actualizado</h4>
                             <button type="button" class="close" data-dismiss="modal">&times;</button>
                             </div>
         
                             <!-- Modal body -->
                             <div class="modal-body">
                             <p>Se ha actualizado tu perfil correctamente</p>
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


@endsection

@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.js" integrity="sha512-/1nVu72YEESEbcmhE/EvjH/RxTg62EKvYWLG3NdeZibTCuEtW5M4z3aypcvsoZw03FAopi94y04GhuqRU9p+CQ==" crossorigin="anonymous" defer></script>
@endsection