@extends('layouts.app')
@section('content')


    <div class="contenedor">
        <div class="row row-centered">
            <div class="col-md-12 col-centered img_centrada">
                <img src="{{asset('img/banner-cal.png')}}" alt="">
            </div>
        </div>
    </div>
<div class="empresas">
    <div class="ocho80">
        <table width="882" style="margin:45px 0 -25px;">
            <thead>
                <tr>
                    <td>EVENTO</td>
                    <td> </td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <div id="nombre">{!!$calendario->title!!}</div>
                        <div id="subarea">{!!$calendario->start->format('d \- F \- Y')!!}</div>
                        <div id="direccion" class='descripcion_bolsa'>
                            <p>Horarios: {!!$calendario->horarios!!}</p>
                            <p>Inversion: {!!$calendario->inversion!!}</p>
                            {!!$calendario->descripcion!!}
                            <p>Lugar: {{$calendario->lugar}}</p>
                        </div>
                    </td>
                    <td bgcolor="#455560">
                        <img class='largo_imagenes_cursos' src="{{asset($calendario->imagen)}}" alt="">
                    </td>
                </tr>
            </tbody>
        </table>   
    </div> 
</div>

</section>
@endsection