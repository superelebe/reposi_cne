@extends('layouts.app')
@section('content')

<section class="content">
    <h1>
        Editar Vacante
    </h1>
    <form method = 'get' action = '{!!url("article")!!}'>
        <button class = 'btn btn-danger'>article Index</button>
    </form>
    <br>
    <form method = 'POST' action = '{!! url("article")!!}/{!!$article->
        id!!}/update'> 
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="titulo">titulo</label>
            <input id="titulo" name = "titulo" type="text" class="form-control" value="{!!$article->
            titulo!!}"> 
        </div>
        <div class="form-group">
            <label for="subtitulo">subtitulo</label>
            <input id="subtitulo" name = "subtitulo" type="text" class="form-control" value="{!!$article->
            subtitulo!!}"> 
        </div>
        <div class="form-group">
            <label for="cuerpo">cuerpo</label>
            <input id="cuerpo" name = "cuerpo" type="text" class="form-control" value="{!!$article->
            cuerpo!!}"> 
        </div>
        <button class = 'btn btn-primary' type ='submit'>Update</button>
    </form>
</section>
@endsection