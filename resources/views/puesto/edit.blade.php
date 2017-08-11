@extends('layouts.app')
@section('content')

<section class="content">
    <h1>
        Edit article
    </h1>
    <form method = 'get' action = '{!!url("puesto")!!}'>
        <button class = 'btn btn-danger'>article Index</button>
    </form>
    <br>
    <form method = 'POST' action = '{!! url("puesto")!!}/{!!$puesto->id!!}/update' enctype="multipart/form-data"> 
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="titulo">titulo</label>
            <input id="titulo" name = "titulo" type="text" class="form-control" value="{!!$puesto->titulo!!}"> 
        </div>
        <button class = 'btn btn-primary' type ='submit'>Update</button>
    </form>
</section>
@endsection