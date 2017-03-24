@extends('layouts.app')
@section('content')

<section class="content">
    <h1>
        Create banner
    </h1>
    <form method = 'get'  action = '{!!url("banner")!!}'>
        <button class = 'btn btn-danger'>banner Index</button>
    </form>
    <br>
    <form enctype="multipart/form-data" method = 'POST' action = '{!!url("banner")!!}'>
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="titulo">titulo</label>
            <input id="titulo" name = "titulo" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="imagen">imagen</label>
            <input id="imagen" name = "imagen" type="file" class="form-control">
        </div>
        <div class="form-group">
            <label for="link">link</label>
            <input id="link" name = "link" type="text" class="form-control">
        </div>
        <button class = 'btn btn-primary' type ='submit'>Create</button>
    </form>
</section>
@endsection