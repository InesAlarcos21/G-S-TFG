<div class="col-md-4 mt-4">
    <div class="card shadow">

        <div class="card-body">
            <img src="/storage/{{$plan->imagen}}" alt="imagen receta" class="card-img-top">
            <h3 class="card-title mt-4 text-center">{{$plan->nombre}}</h3>
            <p>{{Str::words(strip_tags($plan->descripcion),15,'...')}}</p>
            <h4 class="text-center font-weight-bold mb-4">{{$plan->precio}}</h4>
            <a href="{{route('planes.index')}}" class="btn btn-primary d-block btn-receta text-uppercase">Ver plan</a>
        </div>
    </div>
</div>