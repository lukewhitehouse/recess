<hr>

<small>By <a href="http://twitter.com/_lukewh">Luke Whitehouse</a>. All rights reserved.</small>

<nav>
    @if ( Auth::user() )
        <li>
            <a href="/admin">Admin Area</a>
        </li>

        <li>
            <a href="/logout">Logout</a>
        </li>
    @else
        <li>
            <a href="/login">Login</a>
        </li>

        <li>
            <a href="/register">Register</a>
        </li>
    @endif

</nav>
