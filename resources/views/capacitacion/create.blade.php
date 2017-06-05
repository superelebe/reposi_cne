@extends('layouts.app')
@section('content')

<section class="contenedor">
    <section class="row row-centered">
        <div class="col-md-8 col-xs-12 col-centered">
            <form method = 'get' action = '{!!url("cursos")!!}'>
                <button class = 'btn btn-danger'>Ver todos los cursos</button>
            </form>
        </div>
        <div class="col-md-8 col-xs-12 col-centered">
            <div class='titulo_seccion'>
                Crear Curso
            </div class='titulo_seccion'>
        </div>
        <div class="col-xs-12 col-md-8 col-centered formularios">
            <form method = 'POST' action = '{!!url("cursos")!!}' enctype="multipart/form-data">
                <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
                <div class="form-group">
                    <label for="title">Titulo</label>
                    <input id="title" name = "title" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="subtitulo">subtitulo</label>
                    <input id="subtitulo" name = "subtitulo" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="start">start</label>
                    <input id="start" name = "start" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="end">end</label>
                    <input id="end" name = "end" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="imagen">imagen</label>
                    <input id="imagen" name = "imagen" type="file" class="form-control">
                </div>
                <div class="form-group">
                    <label for="descripcion">descripcion</label>
                    <textarea rows="5"  id="descripcion" name = "descripcion" class="form-control"></textarea>
                </div>
                <button class = 'btn btn-primary' type ='submit'>Crear</button>
            </form>
        </div>

    </section>  
</section>

@endsection
@extends('layouts.js')