@extends('app')

@section('content')
    <main class="section section--large">
        <div class="container container--small">
            <h1 class="headline u-align-center">Login</h1>

            <div class="content">
                <p class="intro u-align-center">If you do not have an account please contact the Mixd holiday manager adminstrator.</p>
            </div> <!-- .content -->
        </div> <!-- .container -->

        <form role="form" method="POST" action="{{ route('auth.login') }}" class="form u-push-top@2">
            {!! csrf_field() !!}

            <label for="email">Email address</label>

            <input type="email" class="form-control{{ $errors->has('email') ? ' is-error' : '' }}" name="email" id="email" value="{{ old('email') }}" placeholder="a.skywalker@deathstar.com">

            @if ($errors->has('email'))
                <div class="note note--error">{{ $errors->first('email') }}</div>
            @endif

            <label for="password">Password</label>

            <input type="password" class="form-control{{ $errors->has('password') ? ' is-error' : '' }}" name="password" id="password" placeholder="****************">

            @if ($errors->has('password'))
                <div class="note note--error">{{ $errors->first('password') }}</div>
            @endif

            <div class="form__extra">
                <div class="checkbox | form__extra-left">
                    <label for="remember" class="checkbox__label">Remember Me</label>
                    <input type="checkbox" name="remember" id="remember" class="checkbox__input">
                </div>

                <a class="link | form__extra-right | u-size-small" href="{{ route('auth.password.reset') }}">Forgot password?</a>
            </div> <!-- .form__extra -->

            <button type="submit" class="btn btn--primary | u-push-top">Login</button>
        </form>
    </main>
@endsection
