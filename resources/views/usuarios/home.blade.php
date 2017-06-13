@extends('layouts.app')

@section('content')

<div class="contenedor">
    <div class="row row-centered">
        <div class="col-md-12 col-centered img_centrada">
            <img src="{{asset('img/banner-panel-administracion.png')}}" alt="">
        </div>
    </div>
    <div class="row row-centered">
        <div class="col-md-8 col-centered titulo_seccion">
            <div class="panel panel-default">
                <div class="panel-heading">Bienvenido {{$usuario->empresa}}</div>
            </div>
        </div>
    </div>
    <div class="row row-centered">
        <div class='col-xs-12 col-md-9 col-centered padding_15'>
            <div class='col-xs-12 col-md-5 col-centered con_display'>
                <div class="servicios_subarea">
                    Mi estatus de solicitud esta:
                </div>

                <div class="direcciones_usuarios">
                @if ($usuario->estatus == 'espera')
                    En espera de aprovacion
                @else
                    Afiliado
                @endif 

                </div>
            </div>
            <div class="col-xs-12 col-md-6 col-centered con_display">
                <div>
                    <a class='button-two_crear' href="{{url('editarusuario')}}"> <span class="texto_blanco">Editar mi perfil</span></a>
                </div>
            </div>
        </div>

    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

            </div>
        </div>
        <div>

            <div></div>
        </div>
    </div>
</div>
@endsection
