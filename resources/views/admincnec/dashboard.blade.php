@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Super duper ADMIN Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
                <div>
                    <a href="{{route('article.create')}}">Crear Noticia</a>
                </div>

                <div>
                    <a href="{{route('banner.create')}}">Crear Banner</a>
                </div>

                <div>
                    <a href="{{route('bolsa_trabajo.create')}}">Crear Vacante</a>
                </div>

                <div>
                    <a href="{{route('capacitaciones.create')}}">Crear Curso</a>
                </div>

                <div>
                    <a href="{{route('event.create')}}">Crear Evento</a>
                </div>
            </div>
            <div>
                <div>Ultimas Solicitudes para Afiliacion</div>
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
                asdasd
            </div>
        </div>
    </div>
</div>
@endsection
@extends('layouts.js')