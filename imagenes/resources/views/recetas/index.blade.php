@extends('layouts.app')

@section('botonesRecetas')
    @include('ui.navegacion')
@endsection

@section('content')


    <div class="col-md-12 mx-auto  p-3">
        @if(auth()->user()->plan == 'Nutricion')
        <h2 class="text-center mb-3">Tu Plan Semanal</h2>
        <table class="table shadow">
            <thead class="thead-dark">
                <tr>
                    <th scole="col">Comida</th>
                    <th scole="col">Nombre</th>
                    <th scole="col">Ingredientes</th>
                    <th scole="col">Preparación</th>
                    <th scole="col">Tiempo</th>
                    <th scole="col">Imagen</th>
                </tr>
            </thead>
            <tbody>
                @foreach($comidas as $comida)
                <tr>
                  <td>{{$comida->tipo}}</td>
                  <td>{{$comida->nombre}}</td>
                  <td>{{(strip_tags($comida->ingredientes))}}</td>
                  <td>{{(strip_tags($comida->preparacion))}}</td>
                  <td>{{$comida->tiempo}}</td>
                  <td> <img class="card-img-top rounded-lg" style ="width: 90px;"src="/storage/{{$comida->imagen}}" alt="imagen"></td>
                
              
                </tr>
                @endforeach

            
            </tbody>
        </table>
      @endif
      @if(auth()->user()->plan == 'Entrenamiento')
      <h2 class="text-center mb-3">Tu Plan Semanal</h2>
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th>Entrenamiento</th>
            <th>Ejercicio</th>
            <th>Repeticiones</th>
            <th>Tiempo</th>
            <th>Imagen</th>
          </tr>
        </thead>
        <tbody>
          <tbody>
              @foreach($entrenos as $entreno)
              <tr>
              
                <td>{{$entreno->nombre}}</td>
                <td>{{(strip_tags($entreno->ejercicio))}}</td>
                <td>{{$entreno->repeticion}}</td>
                <td>{{$entreno->tiempo}}</td>
                <td> <img class="card-img-top rounded-lg" style ="width: 90px;"src="/storage/{{$entreno->imagen}}" alt="imagen"></td>
               
            
              </tr>
              @endforeach
        </tbody>
      </table>
      @endif

      @if(auth()->user()->tipoUser == 'Graduado en Nutricion y Dietetica')
      <h2 class="text-center mb-3">Tus clientes</h2>
     
        <div class="container shadow">
      <br>
     
          <table class="table mt-2 ml-1 mr-3 mb-3">
          
            <thead class="thead-dark">
              <tr>
                <th>Fotografia</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Email</th>
                <th>Datos de interes</th>
                <th>Acciones</th>
  
              </tr>
            </thead>
            @foreach($clientes as $cliente)
            @if($listados->id == $cliente->experto)
          
            <tbody>
           
              <tr>
                <td> <img class="card-img-top rounded-lg" style ="width: 90px;"src="/storage/{{$cliente->imagen}}" alt="imagen"></td>
                <td>{{$cliente->name}}</td>
                <td>{{$cliente->apellido}}</td>
                <td>{{$cliente->email}}</td>
                <td>{{(strip_tags($cliente->interes))}}</td>
                <td>
                    <a href="{{route('comidas.create')}}" class="btn btn-success d-block mb-1">Crear plan</a>
                    <a href="{{route('comidas.show',['id' =>$cliente->id])}}"class="btn btn-dark d-block mb-1">Ver Plan</a>
                    <button type="button" class="btn btn-danger d-block mb-1 w-100" data-toggle="modal" data-target="#myModal">
                      Eliminar Usuario
                    </button>
       
                   <!-- The Modal -->
                   <div class="modal" id="myModal">
                     <div class="modal-dialog">
                       <div class="modal-content">
       
                         <!-- Modal Header -->
                         <div class="modal-header">
                           <h4 class="modal-title">¿Estas seguro de que quieres eliminar esta cita ? </h4>
                           <button type="button" class="close" data-dismiss="modal">&times;</button>
                         </div>
       
                         <!-- Modal body -->
                         <div class="modal-body">
                           <p>La cita se eliminara.... </p>
                         </div>
       
                         <!-- Modal footer -->
                         <div class="modal-footer">
                           <form action="{{route('listado.destroy',['usuario' =>$cliente->id])}}" method="POST">
                             @csrf
                             @method('delete')
                             <input type="submit" name="" id="" class="btn btn-danger d-block mb-1 w-100" value="Eliminar &times; ">
                           </form>
                           <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                         </div>
       
                       </div>
                     </div>
                   </div>
                 </td>  
                </td>
     
              </tr>
              @endif
              @endforeach
            </tbody>
          
          </table>
         
        </div>

      @endif

      @if(auth()->user()->tipoUser == 'Graduado en Ciencias de la Actividad Física y el Deporte')
      @foreach($clientes as $cliente)
      @if($listados->id == $cliente->experto)
  
        <div class="container">
            <h2 class="text-center mb-3">Tus clientes</h2>
          <table class="table">
            <thead class="thead-dark">
              <tr>
                <th>Fotografia</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Email</th>
                <th>Datos de interes</th>
                <th>Acciones</th>
  
              </tr>
            </thead>
            <tbody>
              <tr>
                <td> <img class="card-img-top rounded-lg" style ="width: 90px;"src="/storage/{{$cliente->imagen}}" alt="imagen"></td>
                <td>{{$cliente->name}}</td>
                <td>{{$cliente->apellido}}</td>
                <td>{{$cliente->email}}</td>
                <td>{{(strip_tags($cliente->interes))}}</td>
                <td>
  
                  @if(auth()->user()->tipoUser ==='Graduado en Nutricion y Dietetica')
                      <a href="{{route('comidas.create')}}" class="btn btn-success d-block mb-1">Crear plan</a>
                  @endif  
                  @if(auth()->user()->tipoUser ==='Graduado en Nutricion y Dietetica')
                    <a href="{{route('comidas.show',['id' =>$cliente->id])}}"class="btn btn-dark d-block mb-1">Ver Plan</a>
                   @endif
  
  
                  @if(auth()->user()->tipoUser ==='Graduado en Ciencias de la Actividad Física y el Deporte')
                  <a href="{{route('entrenos.create')}}" class="btn btn-success d-block mb-1">Crear plan</a>
                  @endif
                  @if(auth()->user()->tipoUser ==='Graduado en Ciencias de la Actividad Física y el Deporte')
                  <a href="{{route('entrenos.show',['id' =>$cliente->id])}}"class="btn btn-dark d-block mb-1">Ver Plan</a>
                 @endif 
                 
                  <button type="button" class="btn btn-danger d-block mb-1 w-100" data-toggle="modal" data-target="#myModal">
                    Eliminar Usuario
                   </button>
       
                   <!-- The Modal -->
                   <div class="modal" id="myModal">
                     <div class="modal-dialog">
                       <div class="modal-content">
       
                         <!-- Modal Header -->
                         <div class="modal-header">
                           <h4 class="modal-title">¿Estas seguro de que quieres eliminar esta cita ? </h4>
                           <button type="button" class="close" data-dismiss="modal">&times;</button>
                         </div>
       
                         <!-- Modal body -->
                         <div class="modal-body">
                           <p>La cita se eliminara.... </p>
                         </div>
       
                         <!-- Modal footer -->
                         <div class="modal-footer">
                           <form action="{{route('listado.destroy',['usuario' =>$cliente->id])}}" method="POST">
                             @csrf
                             @method('delete')
                             <input type="submit" name="" id="" class="btn btn-danger d-block mb-1 w-100" value="Eliminar &times; ">
                           </form>
                           <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                         </div>
       
                       </div>
                     </div>
                   </div>
                 </td>  
                </td>
     
              </tr>
            </tbody>
          </table>
        </div>
  @endif
  @endforeach
      @endif
    </div>


    <div class="container mt-5 shadow mb-3">
      <div class="col-md-12 mx-auto  p-3">
      <h2 class=" ml-4 mt-3">¿Necesitas ayuda para navegar por la web?</h2>
      <p>Guia para ayudar a nuestros usuarios a saber c&oacute;mo funciona nuestra aplicaci&oacute;n </p>
      
      @if(auth()->user()->tipoUser =='Normal')
        <div id="accordion">
          <div class="card">
            <div class="card-header">
              <a class="card-link" data-toggle="collapse" href="#collapseOne">
                ¿C&oacute;mo puedo seleccionar mi paln de trabajo?
              </a>
            </div>
            <div id="collapseOne" class="collapse show" data-parent="#accordion">
              <div class="card-body">
                Para seleccionar el plan de trabajo con el que deseas trabajar, debes acceder a la pestaña de <strong>Añadir informaci&oacute;n personal y seleccionar plan de trabajo</strong>
                y rellenar el formulario que te aparece. Deber&aacute;s rellenar los siguientes campos: 
                <ul>
                  <li><strong>Fotograf&iacute;a</strong> para tu perfil. </li>
                  <li><strong>Datos de inter&eacute;s</strong> para que los expertos te puedan conocer un poco m&aacute;s antes de ponerse en contacto contigo</li>
                  <li><strong>Seleccionar plan de trabajo: </strong>en esta secci&oacute;n podr&aacute;s elegir el plan de trabajo con el que deseas trabajar.  </li>
                </ul>
                Finalmente cuando hayas seleccionado tu plan de trabajo, en la siguiente secci&oacute;n podr&aacute;s elegir con cual de nuestros expertos deseas trabajar. 
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header">
              <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
              ¿C&oacute;mo visualizar mi plan semanal?
            </a>
            </div>
            <div id="collapseTwo" class="collapse" data-parent="#accordion">
              <div class="card-body">
                Una vez que hayas completado el formulario de inscripci&oacute;n que encontrar&aacute;s en la pestaña de  <strong>Añadir informaci&oacute;n personal y seleccionar plan de trabajo</strong>
                tu experto se pondra en contacto contigo creando una conferencia para conoceros. 
                Dependiendo de lo acordado en la primera reuin&oacute;n generar&aacute; tu plan semanal que lo podr&aacute;s visualizar en esta misma p&aacute;gina 
                antes de esta secci&oacute;n.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header">
              <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
               ¿C&oacute;mo puedo motivar a otras personas a trabajar con esta web?
              </a>
            </div>
            <div id="collapseThree" class="collapse" data-parent="#accordion">
              <div class="card-body">
                Para ayudarnos a crecer podrás dejar tu testimonio o progreso que vayas consiguiendo con nuestros expertos. 
                Para ello tan solo debes acceder a la seccio&oacute;n de <strong>Crear nuevo testimonio</strong> y rellenar el formulario
                que encontrar&aacute;s en esa secci&oacute;n 
                Autom&aacute;ticamente tu comentario se publicar&aacute; en el apartado p&uacute;blico de <strong>Testimonios</strong>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header">
              <a class="collapsed card-link" data-toggle="collapse" href="#collapseFour">
               ¿C&oacute;mo ver las citas con mi experto?
              </a>
            </div>
            <div id="collapseFour" class="collapse" data-parent="#accordion">
              <div class="card-body">
                Para ver las sesiones programadas con tu experto, debe acceder a la secci&oacute;n <strong>Ver calendario</strong>.
                En esta secci&oacute;n encontrar&aacute;s tu calendario mensual en el cual aparecer&aacute;n las citas programadas con tu 
                experto y pinchando sobre la cita podr&aacute;s ver m&aacute;s informaci&oacute;n sobre ella. 

              </div>
            </div>
          </div>
        </div>
      @endif



      @if(auth()->user()->tipoUser =='Graduado en Ciencias de la Actividad Física y el Deporte' || auth()->user()->tipoUser == 'Graduado en Nutricion y Dietetica')
        <div id="accordion">
          <div class="card">
            <div class="card-header">
              <a class="card-link" data-toggle="collapse" href="#collapseOne">
                ¿C&oacute;mo puedo añadir información adicional a mi perfil
              </a>
            </div>
            <div id="collapseOne" class="collapse show" data-parent="#accordion">
              <div class="card-body">
                <p>Para añadir m&aacute;s informaci&oacute;n a tu perfil debes acceder a la secci&oacute;n de <strong>Añadir informaci&oacute;n adicional</strong>
                y rellenar el formulario que encontrar&aacute;s. </p>
                Debes rellenar la siguiente informaci&oacute;n:
                <ul>
                  <li><strong>Fotograf&iacute;a</strong> para tu perfil. </li>
                  <li><strong>Curriculum y formaci&oacute;n:</strong> en esta secci&oacute;n puedes añadir informaci&oacute;n sobre la carrera profesional que has realizado, 
                  centros especializados donde has trabajado, cursos de inter&eacute;s que hayas tomado, etc.</li>
                  <li><strong>Datos de inter&eacute;s:</strong> date a concer para que los usuarios que deseen contratar los servicios que ofreces te elijan a ti y no a otro experto. </li>
                </ul>
               
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header">
              <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
             ¿C&oacute;mo visualizare a mis clientes?
            </a>
            </div>
            <div id="collapseTwo" class="collapse" data-parent="#accordion">
              <div class="card-body">
               <p> Cuando un usuario te haya seleccionado como su experto te aparecer&aacute;, en esta misma secci&oacute;n, 
                toda su informaci&oacute;n personal. </p>
                Esta informaci&oacute;n se agregar&aacute; al listado de clientes que tengas anteriomente. 
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header">
              <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
               ¿C&oacute;mo crear nuevos planes de trabajo para mis usuarios?
              </a>
            </div>
            <div id="collapseThree" class="collapse" data-parent="#accordion">
              <div class="card-body">
               Para crear nuevos planes o modificar algun plan de un cliente, tan solo debes acceder al cliente en cuesti&oacute;n y seleciconar la acci&oacute;n 
               que desees hacer. 
               <ul>
                  <li><strong>Crear plan: </strong> si necesitas crear un nuevo plan de trabajo para tu cliente tan solo debes rellear el formulario 
                    que te aparece en esta secci&oacute;n. Introducciendo los datos necesarios para que tu usuario sepa que debe de hacer en todo momento.
                  </li>
                  <li><strong>Ver plan: </strong> en el caso de tener alguna duda sobre lo que le has añadido a tu cliente podras acceder a est&aacute; secci&oacute;n
                    y ver el plan que le has configurado.
                  </li>
               </ul>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header">
              <a class="collapsed card-link" data-toggle="collapse" href="#collapseFour">
               ¿C&oacute;mo ver las citas con mis usuarios y crear nuevas sesiones de trabajo?
              </a>
            </div>
            <div id="collapseFour" class="collapse" data-parent="#accordion">
              <div class="card-body">
                <p> Para ver las sesiones programadas con tus usuarios, debe acceder a la secci&oacute;n <strong>Ver calendario</strong>.</p>
                <p>En esta secci&oacute;n encontrar&aacute;s tu calendario mensual en el cual aparecer&aacute;n las citas programadas con tu 
                usuarios y pinchando sobre la cita podr&aacute;s ver m&aacute;s informaci&oacute;n sobre ella. </p>
                <p>Ademas prodrás añadir nuevas citas pinchando sobre el boton <strong>Crear nueva sesi&oacute;n</strong> y rellenando el formulario
                  que aparece.</p>
                <p><strong>Nota:</strong> todas las sesiones se realizar&aacute;n a trav&eacute;s de una <strong>videoconferencia de Google Meet </strong>que el experto debe crear 
                manualmente &eacute;l y añadir el enlace correspondiente en el apartado <strong>Conferencia</strong></p>
              </div>
            </div>
          </div>
        </div>
      @endif
    </div>
  </div>


   




@endsection