@extends('layouts.app')

@section('content')
<div class="contenedor">
    <div class="row row-centered">
        <div class="col-md-12 col-centered img_centrada">
            <img src="{{asset('img/banner-cal.png')}}" alt="">
        </div>
    </div>
    <div class="row row-centered">
        <div class="col-md-8 col-centered titulo_seccion">
            <div class="panel panel-default">
                <div class="panel-heading">ADMIN Dashboard</div>
            </div>
        </div>
    </div>

    <div class="row row-centered">
        <div class='col-xs-12 col-md-11 col-centered'>  
            <div class='caja_administrador caja_gris'>
                <div class='crear_nuevo fondo_verde titulo_crear'>
                    NOTICIAS
                </div>
                <div class='padding_15'>
                    @foreach($noticias as $noticia)
                        <div class='crear_border_abajo'>
                            <div>
                                {{$noticia->titulo}} 
                            </div>
                            <div>{{$noticia->created_at->format('d - M')}}</div>
                            <div>
                                <a href="../article/{{$noticia->id}}/edit"> EDITAR</a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class='crear_nuevo fondo_verde'>
                   <a href="{{route('article.create')}}">Crear Noticia</a>
                </div>
            </div>
            <div class='caja_administrador caja_verde'>
                <div class='crear_nuevo fondo_verde titulo_crear'>
                    VACANTES
                </div>
                <div class='padding_15'>
                    @foreach($vacantes as $vacante)
                        <div class='crear_border_abajo'>
                            <div>
                                {{$vacante->titulo}} 
                            </div>
                            <div>{{$vacante->created_at->format('d - M')}}</div>
                            <div>
                                <a href="../bolsa_trabajo/{{$vacante->id}}/edit"> EDITAR</a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class='crear_nuevo fondo_verde'>
                   <a href="{{route('bolsa_trabajo.create')}}">Crear Vacantea</a>
                </div>
            </div>
            <div class='caja_administrador caja_verde'>
                <div class='crear_nuevo fondo_verde titulo_crear'>
                    EVENTO
                </div>
                <div class='padding_15'>
                    @foreach($eventos as $evento)
                        <div class='crear_border_abajo'>
                            <div>
                                {{$evento->title}} 
                            </div>
                            <div>{{$evento->created_at->format('d - M')}}</div>
                            <div>
                                <a href="../calendario/{{$evento->id}}/edit"> EDITAR</a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class='crear_nuevo fondo_verde'>
                   <a href="{{route('calendario.create')}}">Crear Evento</a>
                </div>
            </div>
            <div class='caja_administrador caja_verde'>
                <div class='crear_nuevo fondo_verde titulo_crear'>
                    CAPACITACIÓN
                </div>
                <div class='padding_15'>
                    @foreach($capacitaciones as $capacitacion)
                        <div class='crear_border_abajo'>
                            <div>
                                {{$capacitacion->title}} 
                            </div>
                            <div>Inicio: {{$capacitacion->created_at->format('d - M')}}</div>
                            <div>
                                <a href="../curso/{{$capacitacion->id}}/edit"> EDITAR</a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class='crear_nuevo fondo_verde'>
                   <a href="{{route('curso.create')}}">Crear Capacitación</a>
                </div>
            </div>

            <div class='caja_administrador caja_verde'>
                <div class='crear_nuevo fondo_verde titulo_crear'>
                    BANNER
                </div>
                <div class='padding_15'>
                    @foreach($banners as $banner)
                        <div class='crear_border_abajo'>
                            <div>
                                <img src="{{$banner->title}} " alt="">
                            </div>
                            <div>
                                <a href="../banner/{{$banner->id}}/edit"> EDITAR</a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class='crear_nuevo fondo_verde'>
                   <a href="{{route('banner.create')}}">Crear Banner</a>
                </div>
            </div>

            <div class='caja_administrador caja_verde'>
                <div class='crear_nuevo fondo_verde titulo_crear'>
                    ORGANIGRAMA
                </div>
                <div class='padding_15'>
                    @foreach($organigramas as $organigrama)
                        <div class='crear_border_abajo'>
                            <div>
                                <div>Nombre: {{$organigrama->nombre}}</div>
                                <div>Puesto: {{$organigrama->puesto->titulo}}</div>
                            </div>
                            <div>
                                <a href="../organigrama/{{$organigrama->id}}/edit"> EDITAR</a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class='crear_nuevo fondo_verde'>
                   <a href="{{route('organigrama.create')}}">Agregar al Organigrama</a>
                </div>
            </div>
            <div class='caja_administrador caja_verde'>
                <div class='crear_nuevo fondo_verde titulo_crear'>
                    PUESTO ORGANIGRAMA
                </div>
                <div class='padding_15'>
                    @foreach($puestos as $superpuesto)
                        <div class='crear_border_abajo'>
                            <div>
                                <div>Nombre: {{$superpuesto->titulo}}</div>
                            </div>
                            <div>
                                <a href="../puesto/{{$superpuesto->id}}/edit"> EDITAR</a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class='crear_nuevo fondo_verde'>
                   <a href="{{route('puesto.create')}}">Agregar al Puesto Organigrama</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row row-centered">
        <div class="col-md-12">
            
        </div>
    </div>

    <div class="row row-centered">
            <div class='col-md-8 col-centered '>
                <div class='titulo_seccion'>Solicitudes para Afiliación</div>
                <div class='col-md-12 col-centered'>
                    @foreach($noAfiliados as $noAfiliado )
                        <div class='col-md-12'>
                            <div class='empresas_afiliadas alineados_usuario'>
                                {{$noAfiliado->empresa}}
                                <a  class='alineado_derecha' href="{{url('ver_usuario',$noAfiliado->id)}}"> Ver Perfil</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
    </div>
</div>
@endsection
@extends('layouts.js')