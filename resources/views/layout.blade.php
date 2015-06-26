<!DOCTYPE html>
<html lang="en">
<head>
    <title>Slikhuset Horsens & Kolding</title>
    <!-- GOOGLE FONTS -->
    <link href='//fonts.googleapis.com/css?family=Yellowtail%7cCabin:400,500,600,700,400italic,700italic%7cLibre+Baskerville:400italic%7cGreat+Vibes%7cOswald:400,300,700%7cOpen+Sans:600italic,700' rel='stylesheet' type='text/css'>

    <!-- META TAGS -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="robots" content="index, follow" />

    <link rel="shortcut icon" href="{{ asset('images/favicon-16x16.png') }}">

    <link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-icon-180x180.png">

    <!-- CSS STYLESHEETS -->
    <link rel="stylesheet" href="/css/all.css" />
    <script src="/js/all.js"></script>

    <!--[if lt IE 9]>
    <meta http-equiv="X-UA-Compatible" content="IE=8" />
    <script src="./js/html5shiv.js"></script>
    <script src="./js/respond.js"></script>
    <![endif]-->

    @yield('page_specific_style')

</head>
<body>

@include('partials.home_header')

@yield('homeslider')

@yield('content')

@include('partials.footer')



<a href="#0" class="cd-top">Top</a>


<script type="text/javascript">
    ;( function( $ ) {
        $( '.swipebox' ).swipebox();
    } )( jQuery );
</script>

</body>
</html>

