@extends('layouts.app')
@section('content')
<script src="//cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea',plugins: "lists" });</script>
<section class="content">
    <h1>
        Editar Vacante
    </h1>
    <form method = 'get' action = '{!!url("bolsa_de_trabajo")!!}'>
        <button class = 'btn btn-danger'>Bolsa de Trabajo Index</button>
    </form>
    <br>
    <form method = 'POST' action = '{!! url("bolsa_de_trabajo")!!}/{!!$vacante->
        id!!}/update'> 
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="titulo">titulo</label>
            <input id="titulo" name = "titulo" type="text" class="form-control" value="{!!$vacante->titulo!!}"> 
        </div>
        <div class="form-group">
            <label for="empresa">empresa</label>
            <input id="empresa" name = "empresa" type="text" class="form-control" value="{!!$vacante->empresa!!}"> 
        </div>
        <div class="form-group">
            <label for="start">start</label>
            <input id="start" name = "start" type="text" class="form-control" value="{!!$vacante->start!!}"> 
        </div>
        <div class="form-group">
            <label for="end">end</label>
            <input id="end" name = "end" type="text" class="form-control" value="{!!$vacante->end!!}"> 
        </div>
        <div class="form-group">
            <label for="descripcion">descripcion</label>
            <textarea rows="5"  id="descripcion" name = "descripcion" class="form-control" >{!!$vacante->descripcion!!}</textarea>
        </div>
        <button class = 'btn btn-primary' type ='submit'>Update</button>
    </form>
</section>
@endsection