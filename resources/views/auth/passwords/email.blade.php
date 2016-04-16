@extends('app')

@section('content')

    <h1>Reset Password</h1>

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <form role="form" method="POST" action="{{ url('/password/email') }}">
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

        <button type="submit" class="btn btn-primary">
            Send Password Reset Link
        </button>
    </form>

@endsection
