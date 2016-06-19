@extends('app')

@section('content')
    <main class="section section--banner">
        <div class="container container--small u-align-center">
            <h1 class="headline">Recess</h1>

            <div class="content">
                <p class="intro">Holiday management made simple</p>

                <p class="u-push-bottom@2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dapibus vulputate diam eu pretium. Mauris elit orci, ultricies id fermentum vel, porta et eros. Vestibulum condimentum lectus in convallis feugiat. Sed vulputate fringilla felis. Aliquam ut arcu et dui feugiat scelerisque eu quis diam. Mauris placerat congue dui sit amet blandit. Phasellus condimentum libero vel velit auctor, sit amet tincidunt velit varius.</p>

                <a href="{{ route('auth.login') }}" class="btn btn--large btn--primary">Login</a>
            </div>
        </div>
    </main>
@stop
