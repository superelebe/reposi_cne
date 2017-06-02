@extends('layouts.app')
@section('content')

<section class="content">
    <h1>
        Editar Calendario
    </h1>
    <form method = 'get' action = '{!!url("capacitacion")!!}'>
        <button class = 'btn btn-danger'>event Index</button>
    </form>
    <br>
    <form method = 'POST' action = '{!! url("calendario")!!}/{!!$cursos->
        id!!}/update' enctype="multipart/form-data" > 
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="title">Titulo</label>
            <input id="title" name = "titulo" type="text" class="form-control" value="{!!$cursos->
            titulo!!}"> 
        </div>
        <div class="form-group">
            <label for="subtitulo">subtitulo</label>
            <input id="subtitulo" name = "subtitulo" type="text" class="form-control" value="{!!$cursos->
            subtitulo!!}"> 
        </div>
        <div class="form-group">
            <label for="start">start</label>
            <input id="start" name = "start" type="text" class="form-control" value="{!!$cursos->
            start!!}"> 
        </div>
        <div class="form-group">
            <label for="end">end</label>
            <input id="end" name = "end" type="text" class="form-control" value="{!!$cursos->
            end!!}"> 
        </div>
        <div class="form-group">
            <label for="imagen">imagen</label>
            <img src="{!! url($dia->
                        imagen)!!}" alt="">
            <input id="imagen" name = "imagen" type="file" class="form-control" value="{!!$cursos->
            imagen!!}"> 
        </div>
        <div class="form-group">
            <label for="color">color</label>
            <input id="color" name = "color" type="text" class="form-control" value="{!!$cursos->
            color!!}"> 
        </div>
        <div class="form-group">
            <label for="descripcion">descripcion</label>
            <input id="descripcion" name = "descripcion" type="text" class="form-control" value="{!!$cursos->
            descripcion!!}"> 
        </div>
        <button class = 'btn btn-primary' type ='submit'>Actualizar</button>
    </form>
</section>
@endsection