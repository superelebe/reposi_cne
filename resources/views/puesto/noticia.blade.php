@extends('layouts.app')
@section('content')

<section class="content">
    <div class="simibanner">
    </div>

    <div class="notifoto"><img src="{!!url($article->imagen)!!}" alt="">
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