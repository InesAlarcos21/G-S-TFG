<div class="col-md-4 mt-4">
    <div class="card shadow d-block">
        <img src="/storage/{{$noticia->imagen}}" alt="imagen noticia" class="card-img-top">
        <div class="card-body">
            <h3 class="card-title">{{$noticia->titulo}}</h3>
            <div class="meta-receta d-flex justify-content-between">
                @php
                $fecha = $noticia->created_at; 
                @endphp
                <p class="text-primary fecha font-weight-bold">
                    <fecha-receta fecha="{{$fecha}}"></fecha-receta>
                </p>
            </div>

            <p>{{Str::words(strip_tags($noticia->descripcion),15,'...')}}</p>
            <a href="{{route('noticias.index')}}" class="btn btn-primary d-block btn-receta">Ver noticia</a>
        </div>
    </div>
</div>