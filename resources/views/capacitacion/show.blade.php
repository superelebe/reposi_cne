@extends('layouts.app')
@section('content')


<div class="fondo_calendario_2">
    <div class="empresas padding_400_50">
        <div class="ocho80">
            <table>
                <thead>
                    <tr>
                        <td>CURSO</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td valign="top">
                            <div class="row row-centered">
                                <div class='col-md-12 col-centered alineado_izq'>
                                    <div id="nombre">{!!$cursos->title!!}</div>
                                    <div id="subarea">{!!$cursos->start->format('d \- F \- Y')!!}</div>
                                    <div id="subarea">Publicado: {{$cursos->created_at->diffForHumans()}}</div>
                                </div>
                            </div>
                            <div id="direccion" class='descripcion_bolsa'>
                                <p>Horarios: {!!$cursos->horarios!!}</p>
                                <p>Inversion: {!!$cursos->inversion!!}</p>
                                {!!$cursos->descripcion!!}
                                <p>Lugar: {{$cursos->lugar}}</p>
                            </div>
                        </td>
                        <td valign="top" bgcolor="#455560">
                            <div class="col-md-12 col-centered">
                                <img class='largo_imagenes_cursos' src="{{asset($cursos->imagen)}}" alt="">
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