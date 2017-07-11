@extends('layouts.app')
@section('content')

<section class="content">
    <h1>
        Capacitaciones Index
    </h1>
    <form class = 'col s3' method = 'get' action = '{!!url("curso")!!}/create'>
        <button class = 'btn btn-primary' type = 'submit'>Crear Nuevo Capacitacion</button>
    </form>
    <br>
    <br>
    <div class='table-responsive'>
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
                @foreach($capacitaciones as $capa) 
                <tr>
                    <td>{!!$capa->titulo!!}</td>
                    <td>{!!$capa->start!!}</td>
                    <td>{!!$capa->end!!}</td>
                    <td>{!!$capa->url!!}</td>
                    <td>{!!$capa->pdf!!}</td>
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

    {!! $capacitaciones->render() !!}

</section>
@endsection