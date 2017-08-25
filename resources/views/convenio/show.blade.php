@extends('layouts.app')
@section('content')


<div class="fondo_convenio_2">
    <div class="empresas padding_400_50">
        <div class="ocho80">
            <table>
                <thead>
                    <tr>
                        <td>CONVENIO</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td valign="top">
                            <div class="row row-centered">
                                <div class='col-md-12 col-centered alineado_izq'>
                                    <div id="nombre">{!!$convenio->nombre!!}</div>
                                    <div id="direccion">{!!$convenio->direccion!!}</div>
                                    <div id="convenio">Convenio {{$convenio->convenio}}</div>
                                </div>
                            </div>
                            <div id="direccion" class='descripcion_bolsa'>
                                <p>Vigencia: {!!$convenio->vencia!!}</p>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>   
        </div>
        <div class="ocho80">
            <div class="row row-centered">
                <div class="col-12 alineado_derecha border_arriba_verde">
                    <a class='regresar' href="{{ url('eventos/')}}" name="Regresar al incio"><img src="{{asset('img/btn-regresar.png')}}"  alt="regresar" /></a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection