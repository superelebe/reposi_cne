@extends('layouts.app')
@section('content')

<section class="content">
    <h1>
        Event Index
    </h1>
    <form class = 'col s3' method = 'get' action = '{!!url("event")!!}/create'>
        <button class = 'btn btn-primary' type = 'submit'>Create New event</button>
    </form>
    <br>
    <br>
    <table class = "table table-striped table-bordered table-hover" style = 'background:#fff'>
        <thead>
            <th>title</th>
            <th>start</th>
            <th>end</th>
            <th>imagen</th>
            <th>color</th>
            <th>subtitulo</th>
            <th>descripcion</th>
            <th>actions</th>
        </thead>
        <tbody>
            @foreach($events as $event) 
            <tr>
                <td>{!!$event->title!!}</td>
                <td>{!!$event->start!!}</td>
                <td>{!!$event->end!!}</td>
                <td>{!!$event->imagen!!}</td>
                <td>{!!$event->color!!}</td>
                <td>{!!$event->subtitulo!!}</td>
                <td>{!!$event->descripcion!!}</td>
                <td>
                    <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/event/{!!$event->id!!}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                    <a href="{{ route('event.edit', $event->id) }}" class = 'viewEdit btn btn-primary btn-xs' data-link = '/event/{!!$event->id!!}/edit'><i class = 'material-icons'>edit</i></a>
                    <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/event/{!!$event->id!!}'><i class = 'material-icons'>info</i></a>
                </td>
            </tr>
            @endforeach 
        </tbody>
    </table>
    {!! $events->render() !!}

</section>
@endsection