@extends('layouts.app')
@section('content')

<section class="content">
    <h1>
        Status Usuario article
    </h1>
    <div class="form-group">
            <div>Empresa:</div>
            <div>{!!$usuario->empresa!!}</div>
        </div>
        <div class="form-group">
            <div>Representante:</div>
            <div>{!!$usuario->representante!!}</div>
        </div>
        <div class="form-group">
            <div>Domicilio:</div>
            <div>{!!$usuario->domicilio!!}</div>
        </div>
        <div class="form-group">
            <div>Telefono:</div>
            <div>{!!$usuario->telefono!!}</div>
        </div>

        <div class="form-group">
            <div>Estatus Actual:</div>
            <div>{!!$usuario->email!!}</div>
        </div>
        <div class="form-group">
            <div>Estatus Actual:</div>
            <div>{!!$usuario->certificaciones!!}</div>
        </div>
        <div class="form-group">
            <div>Estatus Actual:</div>
            <div>{!!$usuario->ciudad_id!!}</div>
        </div>
        <div class="form-group">
            <div>Estatus Actual:</div>
            <div>{!!$usuario->servicio_id!!}</div>
        </div>

    <br>
        <div class="form-group">
            <div>Estatus Actual:</div>
            <div>{!!$usuario->estatus!!}</div>
        </div>
    <form method = 'POST' action = '{!! url("ver_usuario")!!}/{!!$usuario->
        id!!}/update'>
        {{ csrf_field() }}
        Deseas agregarlo a la lista de afiliados?
        <div class="form-group">
            <input  name = "estatus" type="hidden"  class="form-control" value="afiliado"> 
        </div>
        <button class = 'btn btn-primary' type ='submit'>Agregar</button>
    </form>
</section>
@endsection