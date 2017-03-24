@extends('layouts.app')
@section('content')

<section class="content">
    <h1>
        Edit event
    </h1>
    <form method = 'get' action = '{!!url("event")!!}'>
        <button class = 'btn btn-danger'>event Index</button>
    </form>
    <br>
    <form method = 'POST' action = '{!! url("event")!!}/{!!$event->
        id!!}/update' enctype="multipart/form-data" > 
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="title">title</label>
            <input id="title" name = "title" type="text" class="form-control" value="{!!$event->
            title!!}"> 
        </div>
        <div class="form-group">
            <label for="start">start</label>
            <input id="start" name = "start" type="text" class="form-control" value="{!!$event->
            start!!}"> 
        </div>
        <div class="form-group">
            <label for="end">end</label>
            <input id="end" name = "end" type="text" class="form-control" value="{!!$event->
            end!!}"> 
        </div>
        <div class="form-group">
            <label for="imagen">imagen</label>
            <img src="{!! url($event->
                        imagen)!!}" alt="">
            <input id="imagen" name = "imagen" type="file" class="form-control" value="{!!$event->
            imagen!!}"> 
        </div>
        <div class="form-group">
            <label for="color">Activo</label><br>
            <input type="radio" name="activo" value=1> Activo <br>
            <input type="radio" name="activo" value=0> Inactivo <br>
        </div>
        <div class="form-group">
            <label for="color">color</label>
            <input id="color" name = "color" type="text" class="form-control" value="{!!$event->
            color!!}"> 
        </div>
        <div class="form-group">
            <label for="subtitulo">subtitulo</label>
            <input id="subtitulo" name = "subtitulo" type="text" class="form-control" value="{!!$event->
            subtitulo!!}"> 
        </div>
        <div class="form-group">
            <label for="descripcion">descripcion</label>
            <input id="descripcion" name = "descripcion" type="text" class="form-control" value="{!!$event->
            descripcion!!}"> 
        </div>
        <button class = 'btn btn-primary' type ='submit'>Update</button>
    </form>
</section>
@endsection