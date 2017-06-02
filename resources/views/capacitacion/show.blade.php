@extends('layouts.app')
@section('content')


    <div class="contenedor">
        <div class="row row-centered">
            <div class="col-md-12 col-centered img_centrada">
                <img src="{{asset('img/banner-cal.png')}}" alt="">
            </div>
        </div>
    </div>

	<section class="content">
	    <h1>
	        Show Cursos
	    </h1>
	    <table class = 'table table-bordered'>
	        <thead>
	            <th>Key</th>
	            <th>Value</th>
	        </thead>
	        <tbody>
	            <tr>
	                <td>
	                    <b><i>title : </i></b>
	                </td>
	                <td>{!!$cursos->title!!}</td>
	            </tr>
	            <tr>
	                <td>
	                    <b><i>start : </i></b>
	                </td>
	                <td>{!!$cursos->start->format('d \- F \- Y')!!}</td>
	            </tr>
	            <tr>
	                <td>
	                    <b><i>end : </i></b>
	                </td>
	                <td>{!!$cursos->end->format('d \- F \- Y')!!}</td>
	            </tr>
	            <tr>
	                <td>
	                    <b><i>imagen : </i></b>
	                </td>
	                <td> <img src="{!!$cursos->pdf!!}" alt=""></td>
	            </tr>
	        </tbody>
	    </table>
	</section>
@endsection