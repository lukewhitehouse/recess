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
    <title>Recess - Holiday management made simple</title>

    <!-- Favicons -->

    <!-- Styles -->
    <link rel="stylesheet" href="/assets/css/styles.css">

    <!-- font-face declarations -->
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,300italic' rel='stylesheet' type='text/css'>

    <!-- Scripts -->
    <noscript><link href="/assets/grunticon/icons.fallback.css" rel="stylesheet"></noscript>
    <script src="/assets/js/head.min.js"></script>
</head>
<body class="debug">

    @include('partials.header')

    @yield('content')

    @include('partials.footer')

</body>
</html>
