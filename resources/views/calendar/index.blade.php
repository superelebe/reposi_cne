    @extends('layouts.app')
@section('content')

<section class="content">
    <h1>
        Calendario Index
    </h1>
    <form class = 'col s3' method = 'get' action = '{!!url("calendario")!!}/create'>
        <button class = 'btn btn-primary' type = 'submit'>Nuevo Evento</button>
    </form>
    <br>
    <br>
    <table class = "table table-striped table-bordered table-hover" style = 'background:#fff'>
        <thead>
            <th>Titulo</th>
            <th>start</th>
            <th>end</th>
            <th>imagen</th>
            <th>subtitulo</th>
            <th>descripcion</th>
            <th>actions</th>
        </thead>
        <tbody>
            @foreach($dias as $evento)                                                                                             
            <tr>
                <td>{!!$evento->title!!}</td>
                <td>{!!$evento->start->format('d - m - Y')!!}</td>
                <td>{!!$evento->end->format('d - m - Y')!!}</td>
                <td> <img class='largo_imagenes' src="{!!$evento->imagen!!}" alt=""> </td>
                <td>{!!$evento->subtitulo!!}</td>
                <td>{!!$evento->descripcion!!}</td>
                <td>
                    <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/calendario/{!!$evento->id!!}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                    <a href="{{ route('calendario.edit', $evento->id) }}" class = 'viewEdit btn btn-primary btn-xs' data-link = '/calendario/{!!$evento->id!!}/edit'><i class = 'material-icons'>edit</i></a>
                    <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/calendario/{!!$evento->id!!}'><i class = 'material-icons'>info</i></a>
                </td>
            </tr>
            @endforeach 
        </tbody>
    </table>
    {!! $dias->render() !!}

</section>
@endsection