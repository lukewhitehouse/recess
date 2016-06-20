<div class="container container--flush">
    <header class="header">
        <div class="logo | header__logo">
            <a href="/" class="beta headline | logo__heading">Recess</a>
            <div class="logo__subheading | u-size-small">Holiday management made simple</div>
        </div>

        <button class="toggle | js-toggle-nav | header__toggle" role="button" aria-label="Toggle navigation">
            <span class="toggle__label | is-hidden">Toggle navigation</span>
            <span class="toggle__icon | icon icon--menu"></span>
        </button>

        <nav class="nav | header__nav" id="navigation" role="navigation">
            @unless( Auth::user() )
                <li class="nav__item">
                    <a href="{{ route('auth.register') }}" class="nav__link">Register</a>
                </li>

                <li class="nav__item">
                    <a href="{{ route('auth.login') }}" class="btn btn--secondary">Login</a>
                </li>
            @else
                <li class="nav__item">
                    <a href="{{ route('auth.logout') }}" class="btn btn--secondary">Logout</a>
                </li>
            @endif
        </nav>
    </header>
</div>
