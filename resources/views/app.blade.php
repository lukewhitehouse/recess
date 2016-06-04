<!DOCTYPE html>
<!--[if lt IE 9]><html class="no-js ie lt-ie9 " lang="en"><![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js " lang="en"><!--<![endif]-->
<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta http-equiv="cleartype" content="on">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Titles/Descriptions -->
    <title>Recess - Holiday management made simpel</title>

    <!-- Favicons -->

    <!-- Styles -->
    <link rel="stylesheet" href="{{ elixir("css/app.css") }}">

    <!-- font-face declarations -->
    <!-- insert here -->

    <!-- Scripts -->
</head>
<body class="debug">

<div class="container">
    @include('partials.header')
</div>

<div class="container container--small">
    @yield('content')
</div>

<div class="container">
    @include('partials.footer')
</div>

<!-- Footer scripts -->
</body>
</html>
