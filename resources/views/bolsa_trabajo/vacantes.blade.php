@extends('layouts.app')
@section('content')

    <div class='contendor'>
        <div class='fondo_bolsa_trabajo'>
            <section class="ocho80">
                <div class='padding_400_50'>
                    <div class='row row-centered vacante '>
                            @foreach($vacante as $vacantes)
                            <div class='col-xs-12 col-md-4 margin_30'>
                                <div>
                                    <div class='alto_imagen'>
                                        <img class='imagen_al_100' src="{{asset($vacantes->imagen)}}" alt="">
                                    </div>
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
            
        </div>
    </div>
@endsection