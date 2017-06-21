@extends('layouts.app')
@section('content')


<section class="content">

    <div class="row row-centered">
        <div class="col-md-8 col-xs-12 col-centered">
            <div class="empresa">
                    <div id="paginacion">{!! $puestos->render() !!} </div>
                    <form class = '' method = 'get' action = '{!!url("puesto")!!}/create'>
                        
                          <button class="button-two" type = 'submit'><span class="texto_blanco">Crear Nuevo Puesto</span></button>
                        
                    </form>


                        <div class="col-md-12 col-centered">
                            <div class="table-responsive">
                                <table class='table table-striped' cellpadding="10">
                                    <thead>
                                        <tr>
                                            <td>TITULO</td>
                                            <td>BORRAR</td>
                                            <td>EDITAR</td>
                                            <td>INFO</td>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach($puestos as $puesto) 
                                            <tr>
                                                    <td>{!!$puesto->titulo!!}</td>
                                                    <td>
                                                        <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/puesto/{!!$puesto->id!!}/deleteMsg" ><i class = 'material-icons'>Borrar</i></a>
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('puesto.edit', $puesto->id) }}" class = 'viewEdit btn btn-primary btn-xs' data-link = '/puesto/{!!$puesto->id!!}/edit'><i class = 'material-icons'>Editar</i></a>
                                                    </td>
                                                    <td>
                                                        <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/puesto/{!!$puesto->id!!}'><i class = 'material-icons'>Info</i></a>
                                                    </td>

                                            </tr>
                                         @endforeach 
                                    </tbody>
                                </table> 
                            </div>    
                        </div>
                    {{$puestos->render()}}
            </div> 
        </div>

    </div>
</section>

@endsection