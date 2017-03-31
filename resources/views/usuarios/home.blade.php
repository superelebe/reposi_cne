@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <h1>
                    Bienvenido {{$usuario->empresa}}
                </h1>
                <div class="panel-heading">Mi  Dashboard</div>

                <div class="panel-body">
                    Mi estatus de solicitud esta:
                </div>
                @if ($usuario->estatus == 'espera')
                        <div>
                            En espera de aprovacion
                        </div>
                    @else
                        <div>
                            Afiliado
                        </div>
                @endif
            </div>
        </div>
        <div>
            <div>
                Editar mi perfil
            </div>
            <div></div>
        </div>
    </div>
</div>
@endsection
