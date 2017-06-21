@extends('layouts.app')
@section('content')

<section class="content">
    <h1>
        Edit article
    </h1>
    <form method = 'get' action = '{!!url("organigrama")!!}'>
        <button class = 'btn btn-danger'>article Index</button>
    </form>
    <br>
    <form method = 'POST' action = '{!! url("organigrama")!!}/{!!$organigrama->id!!}/update' enctype="multipart/form-data"> 
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="titulo">titulo</label>
            <input id="titulo" name = "titulo" type="text" class="form-control" value="{!!$organigrama->
            titulo!!}"> 
        </div>
        <div class="form-group">
            <label for="subtitulo">Puesto</label>
            <select name="puesto_id" id="">
                <option value=""></option>
                @foreach( $puestos as $puesto ) 
                    <option value="{{$puesto->id}}">{{$puesto->titulo}}</option>
                @endforeach
            </select>
            <input id="subtitulo" name = "subtitulo" type="text" class="form-control" value="{!!$organigrama->puesto->nombre!!}"> 
        </div>
        <div class="form-group">
            <label for="cuerpo">cuerpo</label>
            <input id="cuerpo" name = "imagen" type="file" class="form-control" value="{!!$organigrama->cuerpo!!}"> 
        </div>
        <button class = 'btn btn-primary' type ='submit'>Update</button>
    </form>
</section>
@endsection