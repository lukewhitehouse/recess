@extends('app')

@section('content')
    <main class="section section--large">
        <div class="container container--small">
            <h1 class="headline u-align-center">Register</h1>

            <div class="content">
                <p class="intro u-align-center">Fill the form in below to request registration to Mixd's holiday manager.</p>
            </div> <!-- .content -->
        </div> <!-- .container -->

        <form role="form" method="POST" action="{{ route('auth.password.reset') }}" class="form u-push-top@2">
            {!! csrf_field() !!}

            <input type="hidden" name="token" value="{{ $token }}">

            <label for="email">Email address</label>

            <input type="email" class="form-control{{ $errors->has('email') ? ' is-error' : '' }}" name="email" id="email" value="{{ $email or old('email') }}" placeholder="a.skywalker@deathstar.com">

            @if ($errors->has('email'))
                <div class="note note--error">{{ $errors->first('email') }}</div>
            @endif

            <label for="password">Password</label>

            <input type="password" class="form-control{{ $errors->has('password') ? ' is-error' : '' }}" name="password" id="password" placeholder="****************">

            @if ($errors->has('password'))
                <div class="note note--error">{{ $errors->first('password') }}</div>
            @endif

            <label for="password_confirmation">Confirm password</label>

            <input type="password" class="form-control{{ $errors->has('password_confirmation') ? ' is-error' : '' }}" name="password_confirmation" id="password_confirmation" placeholder="****************">

            @if ($errors->has('password_confirmation'))
                <div class="note note--error">{{ $errors->first('password_confirmation') }}</div>
            @endif

            <button type="submit" class="btn btn--primary | u-push-top/2">Register</button>
        </form>
    </main>
@endsection
