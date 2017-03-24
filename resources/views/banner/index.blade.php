@extends('layouts.app')
@section('content')

<section class="content">
    <h1>
        Banner Index
    </h1>
    <form class = 'col s3' method = 'get' action = '{!!url("banner")!!}/create'>
        <button class = 'btn btn-primary' type = 'submit'>Create New banner</button>
    </form>
    <br>
    <br>
    <table class = "table table-striped table-bordered table-hover" style = 'background:#fff'>
        <thead>
            <th>titulo</th>
            <th>imagen</th>
            <th>thumb</th>
            <th>link</th>
            <th>actions</th>
        </thead>
        <tbody>
            @foreach($banners as $banner) 
            <tr>
                <td>{!!$banner->titulo!!}</td>
                <td>{!!$banner->imagen!!}</td>
                <td>{!!$banner->thumb!!}</td>
                <td>{!!$banner->link!!}</td>
                <td>
                    <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/banner/{!!$banner->id!!}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                    <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/banner/{!!$banner->id!!}/edit'><i class = 'material-icons'>edit</i></a>
                    <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/banner/{!!$banner->id!!}'><i class = 'material-icons'>info</i></a>
                </td>
            </tr>
            @endforeach 
        </tbody>
    </table>
    {!! $banners->render() !!}

</section>
@endsection