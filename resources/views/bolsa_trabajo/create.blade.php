@extends('layouts.app')
<script src="//cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea',plugins: "lists" });</script>
@section('content')

        <div id="crear_vacante">
            <div class="ocho80">
                <div id="selects"></div>
                <div id="paginacion"> </div>
                <form enctype="multipart/form-data" method = 'get' action = '{!!url("todas_las_vacantes")!!}'>
                    <div class="sub-main">
                      <button class="button-two" type = 'submit'><span class="texto_blanco">VER VACANTES</span></button>
                    </div>
                </form>
                <br>
                <table style="margin:45px 0 -25px;" width="882">
                    <thead>
                        <tr>
                            <td>CREAR VACANTE</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td bgcolor="#455560">
                                <form class="forma3" enctype="multipart/form-data" method = 'POST' action = '{!!url("bolsa_trabajo")!!}'>
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
                                    <div class="sub-main_crear">
                                      <button class="button-two_crear" type = 'submit'><span class="texto_blanco">Crear</span></button>
                                    </div>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>



@endsection
@extends('layouts.js')