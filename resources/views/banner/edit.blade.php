@extends('layouts.app')
@section('content')

<section class="content">
    <h1>
        Edit banner
    </h1>
    <form method = 'get' action = '{!!url("banner")!!}'>
        <button class = 'btn btn-danger'>banner Index</button>
    </form>
    <br>
    <form method = 'POST' action = '{!! url("banner")!!}/{!!$banner->
        id!!}/update'> 
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="titulo">titulo</label>
            <input id="titulo" name = "titulo" type="text" class="form-control" value="{!!$banner->
            titulo!!}"> 
        </div>
        <div class="form-group">
            <label for="imagen">imagen</label>
            <input id="imagen" name = "imagen" type="text" class="form-control" value="{!!$banner->
            imagen!!}"> 
        </div>
        <div class="form-group">
            <label for="thumb">thumb</label>
            <input id="thumb" name = "thumb" type="text" class="form-control" value="{!!$banner->
            thumb!!}"> 
        </div>
        <div class="form-group">
            <label for="link">link</label>
            <input id="link" name = "link" type="text" class="form-control" value="{!!$banner->
            link!!}"> 
        </div>
        <button class = 'btn btn-primary' type ='submit'>Update</button>
    </form>
</section>
@endsection