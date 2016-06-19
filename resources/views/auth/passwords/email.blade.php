@extends('app')

@section('content')
    <main class="section section--large">
        <div class="container container--small">
            <h1 class="headline u-align-center">Reset password</h1>

            <div class="content">
                <p class="intro u-align-center">Enter your email address below and we will send you a password reset link via email.</p>
            </div> <!-- .content -->
        </div> <!-- .container -->

        <form role="form" method="POST" action="{{ route('auth.password.email') }}" class="form u-push-top@2">
            {!! csrf_field() !!}

            <label for="email">Email address</label>

            <input type="email" class="form-control{{ $errors->has('email') ? ' is-error' : '' }}" name="email" id="email" value="{{ old('email') }}" placeholder="a.skywalker@deathstar.com">

            @if ($errors->has('email'))
                <div class="note note--error">{{ $errors->first('email') }}</div>
            @endif

            <button type="submit" class="btn btn--primary | u-push-top/2">Send Link</button>
        </form>
    </main>
@endsection
