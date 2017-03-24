@extends('layouts.app')
@section('content')

<section class="content">
    <h1>
        Mostrar Noticia
    </h1>
    <br>
    <form method = 'get' action = '{!!route("todas_las_vacantes")!!}'>
        <button class = 'btn btn-primary'>Regresar</button>
    </form>
    <br>
    <table class = 'table table-bordered'>
        <thead>
            <th>Key</th>
            <th>Value</th>
        </thead>
        <tbody>
            <tr>
                <td>
                    <b><i>titulo : </i></b>
                </td>
                <td>{!!$vacante->titulo!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>sueldo : </i></b>
                </td>
                <td>{!!$vacante->sueldo!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>empresa : </i></b>
                </td>
                <td>{!!$vacante->empresa!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Descripcion : </i></b>
                </td>
                <td>{!!$vacante->descripcion!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Logo : </i></b>
                </td>
                <td><img src="{!!url($vacante->imagen)!!}" alt=""></td>
            </tr>
            <tr>
                <td>
                    <b><i>cuerpo : </i></b>
                </td>
                <td>{!!$vacante->cuerpo!!}</td>
            </tr>
        </tbody>
    </table>
    <form method="POST" action="{{route('enviar_correo_vacante')}}" enctype="multipart/form-data">
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <input type = 'hidden' name = 'nombreVacante' value = '{{$vacante->titulo}}'>
        <input type = 'hidden' name = 'empresaVacante' value = '{{$vacante->empresa}}'>
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input id='nombre' type="text" name='nombre'  class="form-control">
        </div>
        <div class="form-group">
            <label for="correo">Email</label>
            <input id='correo' type="text" name='correo'  class="form-control">
        </div>
        <div class="form-group">
            <label for="telefono">Telefono</label>
            <input id='telefono' type="text" name='telefono'  class="form-control">
        </div>
        <div class="form-group">
            <label for="comentarios">Comentarios</label>
            <input id='comentarios' type="text" name='comentarios'  class="form-control">
        </div>
        <div class="form-group">
            <label for="cv">Curriculum</label>
            <input id='cv' type="file" name='cv'  class="form-control">
        </div>
        <div class="form-group">
            <button class = 'btn btn-primary' type ='submit'>Crear</button>
        </div>
    </form>
</section>
@endsection