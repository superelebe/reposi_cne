@extends('layouts.app')
@section('content')

<section class="content">
    <h1>
        Create event
    </h1>
    <form method = 'get' action = '{!!url("event")!!}'>
        <button class = 'btn btn-danger'>event Index</button>
    </form>
    <br>
    <form method = 'POST' action = '{!!url("event")!!}' enctype="multipart/form-data">
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="title">title</label>
            <input id="title" name = "title" type="text" class="form-control">
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
            <label for="color">Activo</label>
            <input type="radio" name="activo" value=1> Activo <br>
            <input type="radio" name="activo" value=0> Inactivo <br>
        </div>
            <div class="form-group">
                <label for="color">color</label>
                <input id="color" name = "color" type="text" class="form-control">
            </div>
        <div class="form-group">
            <label for="subtitulo">subtitulo</label>
            <input id="subtitulo" name = "subtitulo" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="descripcion">descripcion</label>
            <textarea rows="5"  id="descripcion" name = "descripcion" class="form-control"></textarea>
        </div>
        <button class = 'btn btn-primary' type ='submit'>Create</button>
    </form>
</section>
@endsection
@extends('layouts.js')