@extends('layouts.app')
<script src="//cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea',plugins: "lists" });</script>
@section('content')

<section class="contenedor">
    <section class="row row-centered">
        <div class="col-md-8 col-xs-12 col-centered">
            <form method = 'get' action = '{!!url("bolsa_trabajo")!!}'>
                <button class = 'btn btn-danger'>Ver Todas las Vacantes</button>
            </form>
        </div>
        <div class="col-xs-12 col-md-8 col-centered">
            <div class='titulo_seccion'>
                Crear Vacantes
            </div class='titulo_seccion'>
        </div>
        <div class="col-xs-12 col-md-8 col-centered formularios">
            <form method = 'POST' action = '{!!url("bolsa_trabajo")!!}' enctype="multipart/form-data">
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
                    <label for="imagen">Ciudad</label>
                    <input id="imagen" name = "ciudad" type="text" class="form-control">
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
                <div class="sub-main_crear">
                  <button class="button-two_crear" type = 'submit'><span class="texto_blanco">Crear</span></button>
                </div>
            </form>
        </div>

    </section>  
</section>





@endsection
@extends('layouts.js')