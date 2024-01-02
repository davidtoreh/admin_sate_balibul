<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>

    <link rel="shortcut icon" href="logobalibul.png" type="image/png">

    <link rel="stylesheet" href="{{ asset('frontend') }}/css/animate.css">

    <link rel="stylesheet" href="{{ asset('frontend') }}/css/bootstrap.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/bootstrap.min.css.map">

    <link rel="stylesheet" href="{{ asset('frontend') }}/css/default.css">

    <link rel="stylesheet" href="{{ asset('frontend') }}/css/LineIcons-min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/LineIcons.css">

    <link rel="stylesheet" href="{{ asset('frontend') }}/css/slick.css">

    <link rel="stylesheet" href="{{ asset('frontend') }}/css/style-min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/style.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/style.css.map">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
    <script type="text/javascript">
        (function() {
            emailjs.init("tUE_v0SiBx11r1AHy");
        })();
    </script>

</head>

<body>

    @include('layouts.partial.header')

    @yield('content')

    @include('layouts.partial.footer')

    <script src="{{ asset('frontend') }}/js/vendor/jquery-3.5.1.min.js"></script>
    <script src="{{ asset('frontend') }}/js/vendor/modernizr-3.7.1.min.js"></script>

    <script src="{{ asset('frontend') }}/js/boostrap.js"></script>
    <script src="{{ asset('frontend') }}/js/jquery.easing.min.js"></script>
    <script src="{{ asset('frontend') }}/js/mail.js"></script>
    <script src="{{ asset('frontend') }}/js/main.js"></script>
    <script src="{{ asset('frontend') }}/js/popper.min.js"></script>
    <script src="{{ asset('frontend') }}/js/scrolling-nav.js"></script>
    <script src="{{ asset('frontend') }}/js/slick.min.js"></script>
    <script src="{{ asset('frontend') }}/js/wow.min.js"></script>

</html>
