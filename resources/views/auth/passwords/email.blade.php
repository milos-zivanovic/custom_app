@extends('layouts.notauthenticated')

@section('content')
<div class="row">
    <div class="col-md-6">
        <br/>
        <span class="text-lg text-bold text-primary">SEND PASSWORD RESET LINK</span>
        <br/><br/>
        
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <form class="form floating-label" role="form" method="POST" action="{{ url('/password/email') }}">
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

            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        Send
                    </button>
                </div>
            </div>
        </form>
    </div>
    <div class="col-sm-5 col-sm-offset-1 text-center">
        <h3 class="text-light">
            Go back?
        </h3>
        <a class="btn btn-block btn-raised btn-primary" href="{{ url('/login') }}">Login</a>
    </div>
</div>
@endsection
