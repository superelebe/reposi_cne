@extends('layouts.app')
@section('content')

<section class="content">
    <h1>
        Noticia Index
    </h1>
    <form class = 'col s3' method = 'get' action = '{!!url("bolsa_trabajo")!!}/create'>
        <button class = 'btn btn-primary' type = 'submit'>Crear Nuevo Trabajo</button>
    </form>
    <br>
    <br>
    <table class = "table table-striped table-bordered table-hover" style = 'background:#fff'>
        <thead>
            <th>titulo</th>
            <th>empresa</th>
            <th>sueldo</th>
            <th>descripcion</th>
            <th>imagen</th>
            <th>actions</th>
        </thead>
        <tbody>
            @foreach($trabajos as $trabajo) 
            <tr>
                <td>{!!$trabajo->titulo!!}</td>
                <td>{!!$trabajo->empresa!!}</td>
                <td>{!!$trabajo->sueldo!!}</td>
                <td><img src="{!!url($trabajo->imagen)!!}" alt=""></td>
                <td>{!!$trabajo->descripcion!!}</td>
                <td>
                    <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/trabajo/{!!$trabajo->id!!}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                    <a href="{{ route('bolsa_trabajo.edit', $trabajo->id) }}" class = 'viewEdit btn btn-primary btn-xs' data-link = '/trabajo/{!!$trabajo->id!!}/edit'><i class = 'material-icons'>edit</i></a>
                    <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/trabajo/{!!$trabajo->id!!}'><i class = 'material-icons'>info</i></a>
                </td>
            </tr>
            @endforeach 
        </tbody>
    </table>
    {!! $trabajos->render() !!}


        <div id="trabajo">
            <div class="ocho80">
                <div id="selects"></div>
                <div id="paginacion"> </div>
                <form class = 'col s3' method = 'get' action = '{!!url("bolsa_trabajo")!!}/create'>
                    <div class="sub-main">
                      <button class="button-two" type = 'submit'><span class="texto_blanco">Crear Nuevo Trabajo</span></button>
                    </div>
                </form>
                <table cellpadding="10">
                    <thead>
                        <tr>
                            <td>TITULO</td>
                            <td>EMPRESA</td>
                            <td>SUELDO</td>
                            <td>DESCRIPCIÓN</td>
                            <td>IMAGEN</td>
                            <td>BORRAR</td>
                            <td>EDITAR</td>
                            <td>INFO</td>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($trabajos as $trabajo) 
                            <tr>
                                    <td>{!!$trabajo->titulo!!}</td>
                                    <td>{!!$trabajo->sueldo!!}</td>
                                    <td>{!!$trabajo->empresa!!}</td>
                                    <td>{!!$trabajo->descripcion!!}</td>
                                    <td><img src="{!!url($trabajo->imagen)!!}" alt=""></td>
                                    <td>
                                        <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/trabajo/{!!$trabajo->id!!}/deleteMsg" ><i class = 'material-icons'>Borrar</i></a>
                                    </td>
                                    <td>
                                        <a href="{{ route('bolsa_trabajo.edit', $trabajo->id) }}" class = 'viewEdit btn btn-primary btn-xs' data-link = '/trabajo/{!!$trabajo->id!!}/edit'><i class = 'material-icons'>edit</i></a>
                                    </td>
                                    <td>
                                        <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/trabajo/{!!$trabajo->id!!}'><i class = 'material-icons'>info</i></a>
                                    </td>

                            </tr>
                         @endforeach 
                    </tbody>
                </table>
                {!! $trabajos->render() !!}
            </div>
        </div>

</section>
@endsection