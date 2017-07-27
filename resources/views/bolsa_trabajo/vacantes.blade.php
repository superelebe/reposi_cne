@extends('layouts.app')
@section('content')

    <div class="contenedor">
        <div class="row row-centered">
            <div class="col-md-12 col-centered img_centrada">
                <img src="{{asset('img/banner-vacantes.png')}}" alt="">
            </div>
        </div>
    </div>
    <section class="ocho80">
        <div class='contend'>
            <div class='row row-centered vacante '>
                    @foreach($vacante as $vacantes) 
                    <div class='col-xs-12 col-md-4 margin_30'>
                        <div>
                            <div class='subtitulo_seccion'>{{$vacantes->titulo}}</div>
                            <p>{{$vacantes->empresa}}</p>
                            <p>{{date("d M", strtotime($vacantes->start))}}</p>
                            <p>{{substr(strip_tags($vacantes->descripcion),0,50)}}{{strlen(strip_tags($vacantes->descripcion)) > 50 ? "...":""}}</p>
                        </div>
                        <div class='alineado_derecha'><a  href="bolsa_trabajo_cnec/{{$vacantes->id}}">Ver mas</a></div>
                    </div>
                    @endforeach 
            </div>       
        </div>

    </section>
    {{ $vacante->links() }}
@endsection