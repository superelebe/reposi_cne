@extends('layouts.app')
@section('content')

<section class="fondo_noticias">
    <div class="cinco50">
        <div class="row row-centered noticonten">
            <div class="col-12">
                <img src="{!!url($article->imagen)!!}" alt="">
            </div>
            <div class="col-12 alieando_justificado">
                <div class='margen_20'>
                    <h3>{!!$article->titulo!!}</h3>
                </div>
                <p class='margen_50'>{!!$article->cuerpo!!}</p>
            </div>
            <div class="col-12">
                <a href="javascript:history.go(-1)" name="Regresar al incio"><img src="{{asset('img/btn-regresar.png')}}"  alt="regresar" /></a>
            </div>
        </div>
    </div>
</section>

<section class="content">

    <div class="simibanner">
    </div>

    <div class="notifoto">
    </div>

    <div id="noti">
        <div class="ocho80">
            <div id="noticonten" class="limpiar">
                <h3>{!!$article->titulo!!}</h3>
                <span></span>
                <p>{!!$article->cuerpo!!}</p>
                <a href="javascript:history.go(-1)" name="Regresar al incio"><img src="{{asset('img/btn-regresar.png')}}"  alt="regresar" /></a>
            </div>
        </div>
    </div>

</section>
@endsection