@extends('layouts.app')
@section('content')

    <div class="contenedor">
        <div class="row row-centered">
            <div class="col-md-12 col-centered img_centrada">
                <img src="{{asset('img/banner-vacante.png')}}" alt="">
            </div>
        </div>
    </div>
<div class="empresas">
    <div class="ocho80">
        <table style="margin:45px 0 -25px;" width="882">
                        <thead>
                            <tr>
                                <td>VACANTE</td>
                                <td>POSTULARME</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="row row-centered">
                                        <div class="col-md-4 col-centered">
                                            <img class='largo_imagenes' src="{{$vacante->imagen}}" alt="">
                                        </div>
                                        <div class='col-md-8 col-centered alineado_izq'>
                                            <div id="nombre">{{$vacante->titulo}}</div>
                                            <div id="subarea">{{$vacante->empresa}}</div>
                                            <div id="subarea">Publicado: {{$vacante->created_at->diffForHumans()}}</div>
                                        </div>
                                    </div>
                                    <div id="direccion" class='descripcion_bolsa'>
                                        {!!$vacante->descripcion!!}
                                        <h3>Sueldo</h3>
                                        <p>{!!$vacante->sueldo!!}</p>
                                    </div
                                </td>
                                <td bgcolor="#455560">
                                    <form class="forma3" method="POST" action="{{route('enviar_correo_vacante')}}" enctype="multipart/form-data">
                                        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
                                        <input type = 'hidden' name = 'nombreVacante' value = '{{$vacante->titulo}}'>
                                        <input type = 'hidden' name = 'empresaVacante' value = '{{$vacante->empresa}}'>
                                        <div class="form-group">
                                            <label for="nombre">Nombre</label>
                                            <input id='nombre' type="text" name='nombre' required="required"  class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="correo">Email</label>
                                            <input id='correo' type="text" name='correo' required="required"  class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="telefono">Telefono</label>
                                            <input id='telefono' type="text" name='telefono' required="required"  class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="comentarios">Comentarios</label>
                                            <input id='comentarios' type="text" name='comentarios' required="required"  class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="cv">Curriculum</label>
                                            <input id='cv' type="file" name='cv' required="required"  class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <button class = 'button-two_crear' type ='submit'> <span class="texto_blanco">Postularme</span></button>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                    </table>   
    </div> 
</div>

@endsection