@extends('app')

@section('content')

    <h1>Login</h1>

    <form role="form" method="POST" action="{{ url('/login') }}">
        {!! csrf_field() !!}

        <div class="{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="email">E-Mail Address</label>

            <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}">

            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>

        <div class="{{ $errors->has('password') ? ' has-error' : '' }}">
            <label for="password">Password</label>

            <input type="password" class="form-control" name="password" id="password">

            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>

        <div class="checkbox">
            <label for="remember">Remember Me</label>
            <input type="checkbox" name="remember" id="remember">
        </div>

        <button type="submit" class="btn btn-primary">
            Login
        </button>

        <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
    </form>

@endsection
