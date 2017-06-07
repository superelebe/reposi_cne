@extends('layouts.app')
@section('content')

<section class="contenedor">
    <section class="row row-centered">
        <div class="col-md-8 col-xs-12 col-centered">
            <form method = 'get' action = '{!!url("/")!!}'>
                <button class = 'btn btn-danger'>Ver todos los cursos</button>
            </form>
        </div>
        <div class="col-md-8 col-xs-12 col-centered">
            <div class='titulo_seccion'>
                Crear Sub Area de Servicios
            </div class='titulo_seccion'>
        </div>
        <div class="col-xs-12 col-md-8 col-centered formularios">
            <form method = 'POST' action = '{!!url("subarea")!!}' enctype="multipart/form-data">
                <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input id="nombre" name = "nombre" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="subtitulo">Que tipo de servicio es?</label>
                    <select name="servicios" id="">
                    <option value="0">Elige un serivicio</option>
                        @foreach($servicios as $servicio)
                            <option value="{{$servicio->id}}"> {{$servicio->nombre}} </option>
                        @endforeach
                    </select>
                </div>
                <button class = 'btn btn-primary' type ='submit'>Crear</button>
            </form>
        </div>

    </section>  
</section>

@endsection
@extends('layouts.js')