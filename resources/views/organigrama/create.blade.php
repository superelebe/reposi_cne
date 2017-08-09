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
                    <form method = 'get' action = '{!!url("organigrama")!!}'>
                        <button class = 'btn btn-danger'>Ver organigrama</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-8 col-centered">
            <div class='titulo_seccion'>
                Crear Organigrama
            </div class='titulo_seccion'>
        </div>
        <div class="col-xs-12 col-md-8 col-centered formularios">
            <form method = 'POST' action = '{!!url("organigrama")!!}' enctype="multipart/form-data">
                <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input id="nombre" name = "nombre" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="subtitulo">Puesto</label>
                    <select name="puesto_id" id="puesto">
                        <option value="" selected disabled >Selecciona un puesto</option>
                        @foreach($puestos as $puesto)
                            <option value="{{$puesto->id}}">{{$puesto->titulo}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="imagen">Fotografia</label>
                    <input id="imagen" name = "imagen" type="file" class="form-control">
                </div>
                <div class="sub-main_crear">
                  <button class="button-two_crear" type = 'submit'><span class="texto_blanco">Crear</span></button>
                </div>
            </form>
        </div>x

    </section>  
</section>

<script>
    $('#puesto').on('change',function(e){
        console.log(e.target.value)
    });
</script>

@endsection