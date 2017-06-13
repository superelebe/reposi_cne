@extends('layouts.app')
@section('content')

<section class="contenedor">
    <section class="row row-centered">
        <div class="col-xs-12 col-md-12 col-centered">
            <div class='titulo_seccion'>
               Afiliar Empresa
            </div>
            <div class="row row-centered">
                <div class='col-xs-12 col-md-6 col-centered datos_usuarios'>
                    <div class="col-xs-12 col-md-8 col-centered">
                        <div class='nombre_usuario'>{!!$usuario->empresa!!}</div>
                    </div>
                    <div class="col-xs-12 col-md-8 col-centered ">
                        <div>Representante:</div>
                        <div>{!!$usuario->representante!!}</div>
                    </div>

                    <div class="col-xs-12 col-md-8 col-centered ">
                        <div class='correo_usuario'>{!!$usuario->email!!}</div>
                    </div>
                    <div class="col-xs-12 col-md-8 col-centered 
.telefono_usuario">
                        <div class='telefono_usuario'>{!!$usuario->telefono!!}</div>
                    </div>
                </div>
                <div class='col-xs-12 col-md-6 col-centered datos_usuarios'>
                    <div class="col-xs-12 col-md-8 col-centered direcciones_usuarios">
                        <div>Direccion:</div>
                        <div>{!!$usuario->direccion!!}</div>
                        <div>{!!$usuario->ciudad->nombre!!}</div>
                    </div>
                    <div class="col-xs-12 col-md-8 col-centered direcciones_usuarios">
                        <div>Certificaciones:</div>
                        <div>{!!$usuario->certificados!!}</div>
                    </div>
                    <div class="col-xs-12 col-md-8 col-centered direcciones_usuarios">
                        <div>Servicios:</div>
                        <div class="servicios_subarea">{!!$usuario->servicios->nombre!!}</div>
                    </div> 
                </div>
            </div>

        <br>
            <div class="col-xs-12 col-md-8 col-centered">
                <div class='estatus_usuario'>Estatus Actual:</div>
                <div class='contenedor_estatus'>{!!$usuario->estatus!!}</div>
            </div>
        <form class='margin_30' method = 'POST' action = '{!! url("ver_usuario")!!}/{!!$usuario->
            id!!}/update'>
            {{ csrf_field() }}
            Deseas agregarlo a la lista de afiliados?
            <div class="col-xs-12 col-md-8 col-centered formularios margin_30">
                <input  name = "estatus" type="hidden"  class="form-control" value="afiliado"> 
            </div>
            <button class='button-two_crear' type ='submit'><span class="texto_blanco">Agregar </span> </button>
        </form>
        </div>

    </section>  
</section>

@endsection