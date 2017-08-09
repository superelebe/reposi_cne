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
                        <form method = 'get' action = '{!!url("cursos")!!}'>
                            <button class = 'btn btn-danger'>Ver todos los cursos</button>
                        </form>
                    </div>
                </div>
        </div>
        <div class="col-md-8 col-xs-12 col-centered">
            <div class='titulo_seccion'>
                Crear Curso
            </div class='titulo_seccion'>
        </div>
        <div class="col-xs-12 col-md-8 col-centered formularios">
            <form method = 'POST' action = '{!!url("curso")!!}' enctype="multipart/form-data">
                <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
                <div class="form-group">
                    <label for="title">Titulo</label>
                    <input id="title" name = "title" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="start">Inicia</label>
                    <input id="start" name = "start" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="end">Termina</label>
                    <input id="end" name = "end" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="horarios">Horario</label>
                    <input id="horarios" name = "horarios" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="end">Inversion</label>
                    <input id="end" name = "inversion" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="imagen">Imagen</label>
                    <input id="imagen" name = "pdf" type="file" class="form-control">
                </div>
                <div class="form-group">
                    <label for="lugar">Lugar</label>
                    <input id="lugar" name = "lugar" type="text" class="form-control">
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