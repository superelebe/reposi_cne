@extends('layouts.app')
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
                        <form method = 'get' action = '{!!url("convenio")!!}'>
                            <button class = 'btn btn-danger'>Ver todos los convenios</button>
                        </form>
                    </div>
                </div>
        </div>
        <div class="col-md-8 col-xs-12 col-centered">
            <div class='titulo_seccion'>
                Crear Convenio
            </div class='titulo_seccion'>
        </div>
        <div class="col-xs-12 col-md-8 col-centered formularios">
            <form method = 'POST' action = '{!!url("convenio")!!}' enctype="multipart/form-data">
                <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
                <div class="form-group">
                    <label for="nombre">Empresa</label>
                    <input id="nombre" name = "nombre" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="direccion">Direccion</label>
                    <input id="direccion" name = "direccion" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="vigencia">Vigencia</label>
                    <input id="vigencia" name = "vigencia" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="convenio">Tipo Convenio</label>
                    <input id="convenio" name = "convenio" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="imagen">Imagen</label>
                    <input id="imagen" name = "imagen" type="file" class="form-control">
                </div>

                <div class="form-group">
                    <label for="imagen">Activar convenio</label>
                      <input type="radio" name="vigente" value="1" checked> Vigente<br>
                      <input type="radio" name="vigente" value="0"> Inactivo<br>
                </div>
                <div class="form-group">
                    <label for="descripcion">Descripcion</label>
                    <textarea rows="5"  id="descripcion" name = "descripcion" class="form-control"></textarea>
                </div>
                <button class = 'btn btn-primary' type ='submit'>Crear</button>
            </form>
        </div>

    </section>  
</section>

@endsection
@extends('layouts.js')