<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <!-- Styles -->
    @vite('resources/css/app.css')

    <title>@yield('title')</title>
</head>
<body>
@yield('header')

@yield('menu')
<main class="main">
    @yield('content')
</main>

@include('blocks.footer.index')
</body>
</html>

