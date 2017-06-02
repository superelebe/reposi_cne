@extends('layouts.app')

@section('content')
<div class="contenedor">
    <div class="row row-centered">
        <div class="col-md-12 col-centered img_centrada"><img src="{{asset('img/banner-iniciar-sesion.png')}}" alt=""></div>
    </div>
    <div class="row row-centered">
        <div class="col-md-8 col-centered">
            <div class="panel panel-default">
                <div class="titulo_seccion">Admin Login</div>
                <div class="panel-body">
                    <form class="form-horizontal formularios" role="form" method="POST" action="{{ route('admincnec.login.submit') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="control-label">E-Mail</label>

                            <div class="col-md-8 col-xs-12">
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="control-label">Password</label>

                            <div class="col-md-8 col-xs-12">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-xs-12">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-xs-12">
                                <button type="submit" class="btn btn_cnec">
                                    Login
                                </button>
                                <a class="btn btn-link" href="{{ url('/') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
