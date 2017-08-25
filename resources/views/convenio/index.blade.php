@extends('layouts.app')
@section('content')


    <div class="contenedor">
        <div class="row row-centered">
            <div class="col-md-12 col-centered img_centrada">
                <img src="{{asset('img/banner-cursos.png')}}" alt="">
            </div>
        </div>
    </div>



<section class="content">

    <div class="row row-centered">
        <div class="col-md-8 col-xs-12 col-centered">
            <div class="col-xs-12 col-centered">
                <div class="row">
                    <div class="col-xs-6 col-centered">
                        <form  method = 'get' action = '{{url("/admincnec/dashboard")}}'>
                            <button class="button-two" type = 'submit'><span class="texto_blanco">ADMIN DASHBOARD</span></button>
                        </form>
                    </div>
                    <div class="col-xs-6 col-centered">
                        <form class = 'col s3' method = 'get' action = '{!!url("convenio")!!}/create'>
                            <button class = 'btn btn-primary' type = 'submit'>Crear Nuevo Capacitacion</button>
                        </form>
                    </div>
                </div>
                
            </div>

            <div id="paginacion">{!! $convenios->render() !!} </div>
              <div class="col-md-12 col-centered">
                <div class="table-responsive">
                    <table class='table table-striped' cellpadding="10">
                        <thead>
                            <th>nombre</th>
                            <th>imagen</th>
                            <th>descripcion</th>
                            <th>convenio</th>
                            <th>dirección</th>
                            <th>vigencia</th>
                        </thead>

                        <tbody>
                            @foreach($convenios as $convenio) 
                            <tr>
                                <td>{!!$convenio->nombre!!}</td>
                                <td><img class='imagen_al_100' src="{{asset($convenio->imagen)}}" alt=""></td>
                                <td>{!!$convenio->descripcion!!}</td>
                                <td>{!!$convenio->convenio!!}</td>
                                <td>{!!$convenio->vigencia!!}</td>
                                <td>
                                    <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/trabajo/{!!$convenio->id!!}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                                    <a href="{{ route('curso.edit', $convenio->id) }}" class = 'viewEdit btn btn-primary btn-xs' data-link = '/trabajo/{!!$convenio->id!!}/edit'><i class = 'material-icons'>edit</i></a>
                                    <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/trabajo/{!!$convenio->id!!}'><i class = 'material-icons'>info</i></a>
                                </td>
                            </tr>
                            @endforeach 
                        </tbody>
                    </table>    
                </div>    
            </div>
            {!! $convenios->links() !!}
        </div>

    </div>
</section>

@endsection