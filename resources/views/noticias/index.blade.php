@extends('layouts.app')

@section('botonesRecetas')
    <a href="{{route('inicio.index')}}" class="btn">
        <svg class="icono" className="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M11 15l-3-3m0 0l3-3m-3 3h8M3 12a9 9 0 1118 0 9 9 0 01-18 0z" /></svg>
        Atrás
    </a>
@endsection

@section('content')
<h2 class="text-center font-weight-bold mb-3">Noticias</h2>

<div class="card-columns ml-4 mr-4 mb-5 shadow">
  <img class="card-img-top rounded-circle img-fluid mx-auto d-block mb-4" src="/images/noticia1.jpg" style="width: 300px;" alt="imagen">
  <div class="card-body mb-5">
    <h3 class="card-title mt-4 text-center mb-4 ">Descubren cómo el ejercicio mejora la sensibilidad a la insulina</h3>
    <p class="mb-4 mt-5"style="text-align: justify">El ejercicio físico mejora la sensibilidad a la insulina porque los músculos liberan microRNA que facilitan la tarea de la insulina, según los resultados de un estudio que pueden ayudar a tratar el síndrome metabólico y la diabetes.</p>
    <p class="mb-4 mt-5"style="text-align: justify"> La práctica de ejercicio físico causa un impacto beneficioso sobre el metabolismo a través de un mecanismo por el que los músculos liberan ciertos microRNAs, que son transportados en pequeñas vesículas (exosomas) y permiten que en el hígado se module la expresión de determinados genes que mejoran la sensibilidad a la insulina, según concluye un estudio realizado por científicos del CIBERDEM y del Instituto de Investigaciones Biomédicas August Pi i Sunyer (IDIBAPS).</p>   
    <p class="mb-4 mt-5"style="text-align: justify"> Los microRNAs son pequeñas moléculas que tienen la capacidad de regular la expresión de los genes. Casi todas las células pueden secretarlos, y se distribuyen por el organismo a través de la sangre en el interior de los exosomas, unas pequeñas nanovesículas capaces de transportarlos que se han revelado como un sistema potencialmente muy relevante para la comunicación intercelular.</p>
    <p class="mb-4 mt-5"style="text-align: justify">  Varias patologías, incluyendo las enfermedades metabólicas, están relacionadas con los cambios en el perfil de los microRNAs circulantes en la sangre, y por ello pueden servir como biomarcadores para mejorar el diagnóstico de las enfermedades y hacer un seguimiento de la respuesta a los tratamientos. Los hallazgos de esta investigación, que se ha publicado en PNAS, pueden contribuir al desarrollo de nuevos tratamientos para la diabetes tipo 2 y el síndrome metabólico.</p> 
    <p class="mb-4 mt-5"style="text-align: justify">  Un mecanismo de comunicación entre el músculo y el hígado</p>
    <p class="mb-4 mt-5"style="text-align: justify">   Los autores del estudio administraron exosomas de ratones entrenados a ratones sedentarios y observaron que los últimos eran capaces de modular la expresión de ciertos genes en el hígado, lo que mejoró la sensibilidad a la insulina de los animales tratados.</p>
    <p class="mb-4 mt-5"style="text-align: justify">   Según han explicado los investigadores “el estudio revela un mecanismo de comunicación entre diferentes órganos, en este caso músculo e hígado, poco explorado hasta la fecha, y proporciona una nueva diana terapéutica para el tratamiento de la diabetes tipo 2 y el síndrome metabólico”. Y también han señalado que “esta nueva vía resulta de particular interés para aquellos pacientes de avanzada edad o con problemas de fragilidad física que les impida hacer esfuerzos intensivos”.</p>
    <p><strong>Fuente:</strong>Centro de Investigación Biomédica en Red (CIBERDEM)</p>
  </div>
</div>
<br>

<div class="card-columns ml-4 mr-4 mb-5 shadow">
  <img class="card-img-top rounded-circle img-fluid mx-auto d-block mb-4" src="/images/noticia2.jpg" style="width: 300px;" alt="imagen">
  <div class="card-body mb-5">
    <h3 class="card-title mt-4 text-center mb-4 ">El ejercicio aeróbico protege la memoria de los mayores con alzhéimer</h3>
    <p class="mb-4 mt-5"style="text-align: justify">La pérdida de memoria es la característica más significativa del alzhéimer, que hace que la persona vaya perdiendo la capacidad de recordar o pensar en cosas, e incluso reconocer a familiares o amigos. Un estudio piloto de la Universidad de Arizona (EE.UU.) ha descubierto que los pacientes mayores con alzhéimer de leve a moderado pueden ayudar a retrasar la pérdida de memoria si hacen ejercicio aeróbico, como pedalear en una bicicleta estática, unas tres veces a la semana.</p>
    <p class="mb-4 mt-5"style="text-align: justify"> "Nuestro hallazgo principal indica que una intervención de ejercicio aeróbico de seis meses redujo significativamente el deterioro cognitivo en comparación con el curso natural de los cambios para la demencia de Alzheimer”, ha explicado Fang Yu, directora del estudio, que se ha publicado en Journal of Alzheimer's Disease.</p>   
    <p class="mb-4 mt-5"style="text-align: justify"> En la investigación que ha llegado a esta conclusión se analizó a 96 personas con alzhéimer y 77 años de media.</p>
    <p class="mb-4 mt-5"style="text-align: justify">  Una parte de ellos hizo ejercicio en bicicleta estática a intensidad moderada entre 20 y 50 minutos tres veces a la semana, y el resto realizó ejercicios de estiramientos y movilidad.</p>
    <p class="mb-4 mt-5"style="text-align: justify"> Los investigadores sacaron conclusiones seis meses después, tras estudiar el estado de cognición de los participantes. El ejercicio aeróbico y los estiramientos beneficiaron la memoria.</p> 
    <p class="mb-4 mt-5"style="text-align: justify"> Los resultados mostraron que ambos grupos tenían puntuaciones más bajas en la progresión del alzhéimer que las que se esperaban de acuerdo a la progresión de esta demencia, por lo que ambas actividades parecen ser beneficiosas para frenar el avance de la enfermedad, especialmente en el caso de la pérdida de memoria.</p>
    <p class="mb-4 mt-5"style="text-align: justify">No obstante, la autora principal ha destacado que no fueron capaces de encontrar un efecto superior del ejercicio aeróbico frente a los estiramientos, y lo atribuyen a que el estudio es una prueba piloto. </p>
    <p class="mb-4 mt-5"style="text-align: justify">  “No tenemos el poder estadístico para detectar diferencias entre los grupos, hubo un efecto de interacción social sustancial en el grupo de estiramiento, y muchos participantes de estiramiento hicieron ejercicio aeróbico por sí mismos”.</p>
    <p class="mb-4 mt-5"style="text-align: justify">  Por todo ello, los investigadores de este trabajo creen que se deben llevar a cabo más estudios al respecto, con el fin de corroborar sus hallazgos y poder conocer más sobre cómo frenar el progreso de la demencia en las personas con alzhéimer, una enfermedad que carece de un tratamiento curativo a día de hoy.</p>

    <p><strong>Fuente:</strong>Centro de Investigación Biomédica en Red (CIBERDEM)</p>
  </div>
</div>

    @foreach($noticias as $noticia)
    
      <div class="card-columns ml-4 mr-4 mb-5 shadow">
        <img class="card-img-top rounded-circle img-fluid mx-auto d-block mb-4" src="/storage/{{$noticia->imagen}}" style="width: 300px;" alt="imagen">
        <div class="card-body mb-5">
          <h3 class="card-title mt-4 text-center mb-4 ">{{$noticia->titulo}}</h3>
          <p class="mb-4 mt-5"style="text-align: justify">{{(strip_tags($noticia->descripcion))}}</p>
          <p><strong>Fuente:</strong>{{$noticia->fuente}}</p>
        </div>
      </div>
      <br>
    @endforeach

@endsection