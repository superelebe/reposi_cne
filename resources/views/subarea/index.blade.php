@extends('layouts.app')
@section('content')

<section class="content">
    <h1>
        Subareas Index
    </h1>
    <form class = 'col s3' method = 'get' action = '{!!url("subarea")!!}/create'>
        <button class = 'btn btn-primary' type = 'submit'>Crear Nuevo Sub Area</button>
    </form>
    <br>
    <br>
    <table class = "table table-striped table-bordered table-hover" style = 'background:#fff'>
        <thead>
            <th>nombre</th>
            <th>servicio</th>

            <th>opciones</th>
        </thead>
        <tbody>
            @foreach($subareas as $subarea)
            <tr>

                <td>{!!$subarea->nombre!!}</td>
                <td>{!!$subarea->servicios->nombre!!}</td>
                <td>
                    <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/trabajo/{!!$subarea->id!!}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                    <a href="{{ route('bolsa_trabajo.edit', $subarea->id) }}" class = 'viewEdit btn btn-primary btn-xs' data-link = '/trabajo/{!!$subarea->id!!}/edit'><i class = 'material-icons'>edit</i></a>
                    <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/trabajo/{!!$subarea->id!!}'><i class = 'material-icons'>info</i></a>
                </td>
            </tr>
            @endforeach 
        </tbody>
    </table>
    {!! $subareas->render() !!}

</section>
@endsection