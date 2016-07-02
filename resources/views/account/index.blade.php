@extends('app')

@section('content')
    <div class="section section--large">
        <div class="container container--small">
            <h1 class="headline u-align-center">Account area</h1>

            <div class="content | u-align-center">
                <p class="intro">Welcome back to your account area {{ $user->first_name }}</p>
                <a href="#" class="btn btn--primary">Request a holiday</a>
            </div> <!-- .content -->
        </div> <!-- .container -->
    </div> <!-- .section -->

    <main class="section section--large">
        <div class="container">
            <div class="grid">
                <article class="grid__item grid__item--6-12-bp4">
                    <h1 class="beta">Your recent requests</h1>
                    <div class="content">
                        <p>An overview of your most recent holiday requests and all the information you could require about them.</p>
                        <a href="#" class="link">View all holiday requests</a>
                    </div>

                    @if($holidays)
                        <ul class="list--unset | holidays">
                            @foreach($holidays as $i)
                                @include('holidays.partials.holiday')
                            @endforeach
                        </ul>
                    @endif
                </article>

                <article class="grid__item grid__item--6-12-bp4">
                    <h1 class="beta">Compulsory holidays</h1>
                    <div class="content">
                        <p>Here’s a list of compulsory holidays that are taken off your total holiday limit of 25 as Mixd closes the office for Christmas.</p>
                        <a href="#" class="link">Read the FAQ for more information</a>
                    </div>
                </article>
            </div>
        </div>

    </main>
@endsection
