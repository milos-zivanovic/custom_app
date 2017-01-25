@extends('layouts.notauthenticated')

@section('content')
<div class="row">
    <div class="col-md-6">
        <br/>
        <span class="text-lg text-bold text-primary">REGISTER</span>
        <br/><br/>
        <form class="form floating-label" role="form" method="POST" action="{{ url('/register') }}">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif

                <label for="name" class="col-md-4 control-label">Name</label>
            </div>

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

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
            </div>

            <div class="form-group">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
            </div>
            
            <div class="row">
                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            Register
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="col-sm-5 col-sm-offset-1 text-center">
        <h3 class="text-light">
            Already have an account?
        </h3>
        <a class="btn btn-block btn-raised btn-primary" href="{{ url('/login') }}">Login</a>
    </div>
</div>
@endsection