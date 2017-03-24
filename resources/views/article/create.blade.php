@extends('layouts.app')
@section('content')

<section class="content">
    <h1>
        Crear Noticia
    </h1>
    <form method = 'get' action = '{!!url("article")!!}'>
        <button class = 'btn btn-danger'>Noticia Index</button>
    </form>
    <br>
    <form enctype="multipart/form-data" method = 'POST' action = '{!!url("article")!!}'>
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="titulo">Titulo</label>
            <input id="titulo" name = "titulo" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="subtitulo">Subtitulo</label>
            <input id="subtitulo" name= "subtitulo" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="cuerpo">Noticia</label>
            <textarea  id="cuerpo" name = "cuerpo" type="text" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="imagen">Imagen</label>
            <input id="imagen" name = "imagen" type="file" class="form-control">
        </div>
        <button class = 'btn btn-primary' type ='submit'>Crear</button>
    </form>
</section>
@endsection