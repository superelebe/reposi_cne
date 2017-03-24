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
                <td>{!!$trabajo->sueldo!!}</td>
                <td>{!!$trabajo->empresa!!}</td>
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

</section>
@endsection