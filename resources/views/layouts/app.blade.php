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
    @vite('resources/css/app.css')

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>@yield('title')</title>
</head>
<body>

@include('blocks.header.index')

@include('blocks.breadcrumbs.index')

<div class="container">
    <div class="jumbotron py-4 px-4">
        <h1 class="display-4">Digital Journal</h1>
        <p class="lead">Leave travel notes from the most unusual places on the planet that will help new tourists</p>
        <hr class="my-4">
        <a class="btn btn-primary btn-lg" href="/post/create" role="button">Add Note</a>
    </div>
</div>
<main>
    @yield('content')
</main>

@include('blocks.footer.index')
</body>
</html>
