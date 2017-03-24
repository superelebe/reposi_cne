@extends('layouts.app')
<script src="//cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea',plugins: "lists" });</script>
@section('content')

<section class="content">
    <h1>
        Crear Vacante
    </h1>
    <form method = 'get' action = '{!!url("article")!!}'>
        <button class = 'btn btn-danger'>Noticia Index</button>
    </form>
    <br>
    <form enctype="multipart/form-data" method = 'POST' action = '{!!url("bolsa_trabajo")!!}'>
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="titulo">Titulo Vacante</label>
            <input id="titulo" name = "titulo" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="sueldo">Sueldo</label>
            <input id="sueldo" name= "sueldo" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="empresa">Empresa</label>
            <input id="empresa" name= "empresa" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="imagen">Logo Empresa</label>
            <input id="imagen" name = "imagen" type="file" class="form-control">
        </div>
        <div class="form-group">
            <label for="start">Inicio vacante</label>
            <input id="start" name = "start" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="end">Fin vacante</label>
            <input id="end" name = "end" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="color">Activo</label><br>
            <input type="radio" name="activo" value=1> Activo <br>
            <input type="radio" name="activo" value=0> Inactivo <br>
        </div>
        <div class="form-group">
            <label for="descripcion">Descripcion</label>
            <textarea  id="descripcion" name = "descripcion" type="text" class="form-control"></textarea>
        </div>
        <button class = 'btn btn-primary' type ='submit'>Crear</button>
    </form>
</section>
@endsection
@extends('layouts.js')