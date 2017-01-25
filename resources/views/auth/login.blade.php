@extends('layouts.notauthenticated')

@section('content')
<div class="row">
    <div class="col-md-6">
        <br/>
        <span class="text-lg text-bold text-primary">LOGIN</span>
        <br/><br/>
        <form class="form floating-label" role="form" method="POST" action="{{ url('/login') }}">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif

                <label for="email" class="col-md-4 control-label">E-Mail Address</label>
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <input id="password" type="password" class="form-control" name="password" required>

                @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif

                <label for="password" class="col-md-4 control-label">Password</label>

                <p class="help-block">
                    <a class="" href="{{ url('/password/reset') }}">Forgotten?</a>
                </p>
            </div>

            <br/>

            <div class="row">
                <div class="col-xs-6 text-left">
                    <div class="checkbox checkbox-inline checkbox-styled">
                        <label>
                            <input type="checkbox" name="remember"><span>Remember Me</span>
                        </label>
                    </div>
                </div>
                <div class="col-xs-6 text-right">
                    <button class="btn btn-primary btn-raised" type="submit">Login</button>
                </div>
            </div>

        </form>
    </div>
    <div class="col-sm-5 col-sm-offset-1 text-center">
        <h3 class="text-light">
            No account created?
        </h3>
        <a class="btn btn-block btn-raised btn-primary" href="{{ url('/register') }}">Register</a>
    </div>
</div>
@endsection