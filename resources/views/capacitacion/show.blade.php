@extends('layouts.app')
@section('content')



    <div class="contenedor">
        <div class="row row-centered">
            <div class="col-md-12 col-centered img_centrada">
                <img src="{{asset('img/banner-cursos.png')}}" alt="">
            </div>
        </div>
    </div>
<div class="empresas">
    <div class="ocho80">
        <table width="882" style="margin:45px 0 -25px;">
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
                            <img class='largo_imagenes_cursos' src="{{$cursos->pdf}}" alt="">
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>   
    </div> 
</div>



@endsection