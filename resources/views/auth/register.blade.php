@extends('app')

@section('content')

    <h1>Register</h1>
        <form role="form" method="POST" action="{{ url('/register') }}">
            {!! csrf_field() !!}

            <div class="{{ $errors->has('name') ? ' has-error' : '' }}">
                <label for="name">Name</label>

                <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}">

                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>

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
                Register
            </button>
        </form>

@endsection
