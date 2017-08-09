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
                        <form class = 'col s3' method = 'get' action = '{!!url("curso")!!}/create'>
                            <button class = 'btn btn-primary' type = 'submit'>Crear Nuevo Capacitacion</button>
                        </form>
                    </div>
                </div>
                
            </div>

            <div id="paginacion">{!! $capacitaciones->render() !!} </div>
              <div class="col-md-12 col-centered">
                <div class="table-responsive">
                    <table class='table table-striped' cellpadding="10">
                        <thead>
                            <th>titulo</th>
                            <th>inicio</th>
                            <th>descripcion</th>
                            <th>url</th>
                            <th>imagen</th>
                            <th>actions</th>
                        </thead>

                        <tbody>
                            @foreach($capacitaciones as $capa) 
                            <tr>
                                <td>{!!$capa->title!!}</td>
                                <td>{!!$capa->start!!}</td>
                                <td>{!!$capa->descripcion!!}</td>
                                <td>{!!$capa->url!!}</td>
                                <td>{!!$capa->imagen!!}</td>
                                <td>
                                    <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/trabajo/{!!$capa->id!!}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                                    <a href="{{ route('curso.edit', $capa->id) }}" class = 'viewEdit btn btn-primary btn-xs' data-link = '/trabajo/{!!$capa->id!!}/edit'><i class = 'material-icons'>edit</i></a>
                                    <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/trabajo/{!!$capa->id!!}'><i class = 'material-icons'>info</i></a>
                                </td>
                            </tr>
                            @endforeach 
                        </tbody>
                    </table>    
                </div>    
            </div>
            {!! $capacitaciones->links() !!}
        </div>

    </div>
</section>

@endsection