@extends('layouts.app')
    <script src="//cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea',plugins: "lists" });</script>
@section('content')



<script src="//cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea',plugins: "lists" });</script>
@section('content')
 
<section class="contenedor">
    <section class="row row-centered">
        <div class="col-md-8 col-xs-12 col-centered">
            <div class="row">
                <div class="col-xs-6 col-centered">
                    <form  method = 'get' action = '{{url("/admincnec/dashboard")}}'>
                        <button class="button-two" type = 'submit'><span class="texto_blanco">ADMIN DASHBOARD</span></button>
                    </form>
                </div>
                <div class="col-xs-6 col-centered">
                    <form method = 'get' action = '{!!url("bolsa_trabajo")!!}'>
                        <button class = 'btn btn-danger'>Ver Todas las Vacantes</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-8 col-centered">
            <div class='titulo_seccion'>
               Editar Vacante
            </div class='titulo_seccion'>
        </div>
        <div class="col-xs-12 col-md-8 col-centered formularios">
            <form method = 'POST' action = "{!! url('bolsa_trabajo')!!}/{!!$vacante->id!!}/update" enctype="multipart/form-data">
                <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
                <div class="form-group">
                    <label for="titulo">Titulo Vacante</label>
                    <input id="titulo" name = "titulo" type="text" class="form-control" value="{!!$vacante->titulo!!}">
                </div>
                <div class="form-group">
                    <label for="empresa">Empresa</label>
                    <input id="empresa" name= "empresa" type="text" class="form-control" value="{!!$vacante->empresa!!}">
                </div>
                <div class="form-group">
                    <label for="imagen">Logo Empresa</label>
                    <img src="{{asset($vacante->imagen)}}" alt="">
                    <input id="imagen" name = "imagen" type="file" class="form-control">
                </div>
                <div class="form-group">
                    <label for="sueldo">Sueldo</label>
                    <input id="sueldo" name= "sueldo" type="text" class="form-control" value="{!!$vacante->sueldo!!}">
                </div>
                <div class="form-group">
                    <label for="imagen">Ciudad</label>
                    <input id="imagen" name = "ciudad" type="text" class="form-control"  value="{!!$vacante->empresa!!}">
                </div>
                <div class="form-group">
                    <label for="start">Inicio vacante</label>
                    <input id="start" name = "start" type="text" class="form-control" value="{!!$vacante->start!!}">
                </div>
                <div class="form-group">
                    <label for="end">Fin vacante</label>
                    <input id="end" name = "end" type="text" class="form-control" value="{!!$vacante->end!!}">
                </div>
                <div class="form-group">
                    <label for="color">Activo</label><br>
                    <input type="radio" name="activo" value=1 checked> Activo <br>
                    <input type="radio" name="activo" value=0> Inactivo <br>
                </div>
                <div class="form-group">
                    <label for="descripcion">Descripcion</label>
                    <textarea  id="descripcion" name = "descripcion" type="text" class="form-control">{!!$vacante->descripcion!!}</textarea>
                </div>
                <div class="sub-main_crear">
                  <button class="button-two_crear" type = 'submit'><span class="texto_blanco">Actualizar</span></button>
                </div>
            </form>
        </div>

    </section>  
</section>

@endsection