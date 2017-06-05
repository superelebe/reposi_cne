@extends('layouts.app')

@section('content')
<div class="contenedor">
    <div class="row row-centered">
        <div class="col-md-12 col-centered img_centrada">
            <img src="{{asset('img/banner-cal.png')}}" alt="">
        </div>
    </div>
    <div class="row row-centered">
        <div class="col-md-12 col-centered titulo_seccion">
            <div class="panel panel-default">
                <div class="panel-heading">ADMIN Dashboard</div>
            </div>
        </div>
    </div>

    <div class="row row-centered crear_admin">
        <div class='col-xs-12 col-md-4'>
            <a href="{{route('article.create')}}">Crear Noticia</a>
        </div>

        <div class='col-xs-12 col-md-4'>
            <a href="{{route('banner.create')}}">Crear Banner</a>
        </div>

        <div class='col-xs-12 col-md-4'>
            <a href="{{route('bolsa_trabajo.create')}}">Crear Vacante</a>
        </div>

        <div class='col-xs-12 col-md-4'>
            <a href="{{route('calendario.create')}}">Crear Evento</a>
        </div>

        <div class='col-xs-12 col-md-4'>
            <a href="{{route('event.create')}}">Crear Evento</a>
        </div>
    </div>

    <div class="row row-centered">
        <div class="col-md-12">
            
        </div>
    </div>

    <div class="row row-centered">
            <div class='col-md-8 col-centered'>
                <div class='titulo_seccion'>Ultimas Solicitudes para Afiliación</div>
                <div>
                    @foreach($noAfiliados as $noAfiliado )
                        <div>
                            <div>
                                Empresa
                            </div>
                            <div>
                                {{$noAfiliado->empresa}}
                            </div>
                        </div>
                        <div>
                            <a href="{{url('ver_usuario',$noAfiliado->id)}}"> Ver Perfil</a>
                        </div>
                    @endforeach
                </div>
            </div>
    </div>
</div>
@endsection
@extends('layouts.js')