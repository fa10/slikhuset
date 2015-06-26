<!DOCTYPE html>
<html lang="en">
<head>
    <title>Slikhuset Horsens & Kolding</title>
    <!-- META TAGS -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="description" content="Slikhuset i Horsens og Kolding. I Slikhuset kan du finde lige hvad du har lyst. Danmarks st�rste udvalg af slik, sodavand og is." />
    <meta name="keywords" content="" />
    <meta name="robots" content="index, follow" />

    <link href='http://fonts.googleapis.com/css?family=Bitter:400,700|Lobster+Two:400,700,400italic,700italic|Oswald:400,700' rel='stylesheet' type='text/css'>

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

@yield('parallex')

@include('partials.footer')



<a href="#0" class="cd-top">Top</a>


<script type="text/javascript">
    ;( function( $ ) {
        $( '.swipebox' ).swipebox();
    } )( jQuery );
</script>

</body>
</html>

