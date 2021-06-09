@extends('layouts.app')

@section('estilos')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.css" integrity="sha512-CWdvnJD7uGtuypLLe5rLU3eUAkbzBR3Bm1SFPEaRfvXXI2v2H5Y0057EMTzNuGGRIznt8+128QIDQ8RqmHbAdg==" crossorigin="anonymous" />
    
@endsection
@section('botonesRecetas')
<a href="{{route('inicio.index')}}" class="btn">
    <svg class="icono" className="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M11 15l-3-3m0 0l3-3m-3 3h8M3 12a9 9 0 1118 0 9 9 0 01-18 0z" /></svg>
    Atrás
</a>
@endsection

@section('content')


<div class="row justify-content-center">

    <div class="col-md-10 bg-white shadow">
        <h2 class="text-center font-weight-bold mb-5 mt-4 mr-5 ml-5 ">Contacto</h2>
        <table class="table table-border  table-responsive-sm ml-2 ">
            <tbody>
                <tr>
                    <td>
                        <p>Si lo deseas puedes ponerte en contacto con nosotros para resolver todas tus dudas</p>
                        <form  method="POST" action="{{route('contactos.store')}}" enctype="multipart/form-data" novalidate>
                            @csrf
                            <div class="form-group">
                                <label for="duda">Duda que deseas comentarnos </label>
                                <input type="text" name="duda" class="form-control @error('duda') is-invalid @enderror" id="duda" value="{{old('duda')}}" placeholder="Duda a resolver">
                                @error('duda')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>               
                                @enderror
                            </div>
                            
                            <div class="form-group">
                                <label for="email">Correo Electronico</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Introduce aqui tu email">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                            <div class="form-group mt-3">
                                <label for="descripcion">Descripcion</label>
                                <input id="descripcion" type="hidden"  name="descripcion" value="{{old('descripcion')}}" >
                                <trix-editor input="descripcion" class="form-control @error('descripcion') is-invalid @enderror" placeholder="Introduce aqui tu duda" ></trix-editor>
                                @error('descripcion')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>               
                                @enderror
                            </div>
                
                            <div class="form-group">
                                   <!-- Button to Open the Modal -->
                                   <button type="button" class="btn btn-dark d-block mb-1 " data-toggle="modal" data-target="#myModal">
                                        Enviar duda
                                    </button>
                    
                                <!-- The Modal -->
                                <div class="modal" id="myModal">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                        
                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                            <h4 class="modal-title">Formulario enviado correctamente</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                        
                                            <!-- Modal body -->
                                            <div class="modal-body">
                                            <p>Hemos recibido tu formulario, en breves procederemos a contestar todas tus dudas</p>
                                            </div>
                        
                                            <!-- Modal footer -->
                                            <div class="modal-footer">
                                            
                                                <input type="submit" name="" id="" class="btn btn-primary" value="Aceptar">
                                            </div>
                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>  
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="mt-5 shadow col-md-10">
        <table>
            <tr>
                <td >
                    <div class="mt-2 ml-3 mr-5">
                        <h3 class=" ">Puedes localizarnos en: </h3>
                        <p><strong>Dirección:</strong> Campus Las Lagunillas, s/n, 23071 Jaén</p>
                        <p><strong>Edificio: </strong>A-3</p>
                        <p><strong>Teléfono:</strong> 953 21 24 24</p>
                        <p><strong>Correo electrónico: </strong>eps@ujaen.es</p>
                    </div>
                </td>
               
                <td >
                    <iframe class="mt-2" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6306.027344128201!2d-3.782017839450396!3d37.789719357435494!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd6dd7abfa6a10df%3A0xf05fe5191735ab43!2sUniversidad%20de%20Ja%C3%A9n!5e0!3m2!1ses!2ses!4v1621158662367!5m2!1ses!2ses" width="650" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </td>
                
            </tr>
          
        </table>
            
            
        
    </div>
  
   
@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.js" integrity="sha512-/1nVu72YEESEbcmhE/EvjH/RxTg62EKvYWLG3NdeZibTCuEtW5M4z3aypcvsoZw03FAopi94y04GhuqRU9p+CQ==" crossorigin="anonymous" defer></script>

@endsection




@endsection