@extends('layouts.app')
@section('content')

<section class="content">
    <h1>
        Edit event
    </h1>
    <form method = 'get' action = '{!!route("home")!!}'>
        <button class = 'btn btn-danger'>event Index</button>
    </form>
    <br>
    <form method = 'POST' action = '{!! url("usuarios")!!}/{!!$usuario->
        id!!}/update' enctype="multipart/form-data" > 
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="representante">Representante</label>
            <input id="representante" name = "representante" type="text" class="form-control" value="{!!$usuario->
            representante!!}"> 
        </div>
        <div class="form-group">
            <label for="direccion">Direccion</label>
            <input id="direccion" name = "direccion" type="text" class="form-control" value="{!!$usuario->
            direccion!!}">
        </div>
        <div class="form-group">
            <label for="imagenes">imagenes</label>
            <img src="{!! url($usuario->
                        imagenes)!!}" alt="">
            <input id="imagenes" name = "imagenes" type="file" class="form-control" value="{!!$usuario->
            imagenes!!}"> 
        </div>
        <div class="form-group">
            <label for="rfc">RFC</label>
            <input id="rfc" name = "rfc" type="text" class="form-control" value="{!!$usuario->
            rfc!!}"> 
        </div>

        <div class="form-group">
            <label for="ciudad_id">Ciudad</label>
            <select name="ciudad_id" class="form-control">
                <option value="{!!$usuario->ciudad_id!!}" selected style="display:none">Ciudad</option>
                @foreach($ciudades as $ciudad)
                    <option value="{{ $ciudad->id }}">{{ $ciudad->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="servicio_id">Servicio</label>
            <select name="servicio_id" class="form-control">
                <option value="" selected disabled style="display:none">Servicio</option>
                @foreach($servicios as $servico)
                    <option value="{{ $servico->id }}">{{ $servico->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input id="email" name = "email" type="email" class="form-control" value="{!!$usuario->
            email!!}"> 
        </div>

        <div class="form-group">
            <label for="certificados">Certificados</label>
            <input id="certificados" name = "certificados" type="file" class="form-control" value="{!!$usuario->
            certificados!!}">
        </div>
        <div class="form-group">
            <label for="cvs">Curriculum Vitae</label>
            <input id="cvs" name = "cvs" type="text" class="form-control" value="{!!$usuario->
            cvs!!}"> 
        </div>
        <div class="form-group">
            <label for="descripcion">descripcion</label>
            <input id="descripcion" name = "descripcion" type="text" class="form-control" value="{!!$usuario->
            descripcion!!}"> 
        </div>
        <button class = 'btn btn-primary' type ='submit'>Update</button>
    </form>
</section>
@endsection