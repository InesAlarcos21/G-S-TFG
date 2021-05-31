<div class="col-md-4 mt-4">
    <div class="card shadow">
        <img src="/storage/{{$testimonio->imagen}}" alt="imagen testimonio" class="card-img-top">
        <div class="card-body">
            <h3 class="card-title">{{$testimonio->titulo}}</h3>
            <div class="meta-receta d-flex justify-content-between">
                <p>
                    <span class="font-weight-bold text-primary">Autor: {{$testimonio->autor->name}}</span> 
                    
                </p>
            </div>

            <p>{{Str::words(strip_tags($testimonio->descripcion),15,'...')}}</p>
            <a href="{{route('testimonios.show',['testimonial' => $testimonio->id])}}" class="btn btn-primary d-block btn-receta">Ver testimoio</a>
        </div>
    </div>
</div>