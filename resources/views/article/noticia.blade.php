@extends('layouts.app')
@section('content')

<section class="content">
{{--     <h1>
        {{$article->titulo}} 
    </h1>
    <table class = 'table table-bordered'>
        <thead>
            <th>Key</th>
            <th>Value</th>
        </thead>
        <tbody>
            <tr>
                <td>
                    <b><i>titulo : </i></b>
                </td>
                <td>{!!$article->titulo!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>subtitulo : </i></b>
                </td>
                <td>{!!$article->subtitulo!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>cuerpo : </i></b>
                </td>
                <td>{!!$article->cuerpo!!}</td>
            </tr>

            <tr>
                <td>
                    <b><i>Imagen : </i></b>
                </td>
                <td><img src="{!!url($article->imagen)!!}" alt=""></td>
            </tr>
        </tbody>
    </table>

 --}}
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