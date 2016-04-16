@extends('app')

@section('content')

    <h1>Reset Password</h1>

    <form role="form" method="POST" action="{{ url('/password/reset') }}">
        {!! csrf_field() !!}

        <input type="hidden" name="token" value="{{ $token }}">

        <div class="{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="email">E-Mail Address</label>

            <input type="email" class="form-control" name="email" id="email" value="{{ $email or old('email') }}">

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

        <div class="{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
            <label for="password_confirmation">Confirm Password</label>

            <input type="password" class="form-control" name="password_confirmation" id="password_confirmation">

            @if ($errors->has('password_confirmation'))
                <span class="help-block">
                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                </span>
            @endif
        </div>

        <button type="submit" class="btn btn-primary">
            Reset Password
        </button>
    </form>

@endsection
