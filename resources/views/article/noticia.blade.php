@extends('layouts.app')
@section('content')

<section class="fondo_noticias">
    <div class="cinco50">
        <div class="row row-centered noticonten">
            <div class="col-12">
                <img class='imagen_al_100' src="{!!url($article->imagen)!!}" alt="">
            </div>
            <div class="col-12 alieando_justificado">
                <div class='margen_20'>
                    <h3>{!!$article->titulo!!}</h3>
                </div>
                <span>{{ $article->created_at->toFormattedDateString() }}</span>
                <p class='margen_50'>
                    {!!$article->cuerpo!!}
                </p>
            </div>
            <div class="col-12 alineado_derecha border_arriba_verde">
                <a class='regresar' href="{{ url('noticias/')}}" name="Regresar al incio"><img src="{{asset('img/btn-regresar.png')}}"  alt="regresar" /></a>
            </div>
        </div>
    </div>
</section>


@endsection