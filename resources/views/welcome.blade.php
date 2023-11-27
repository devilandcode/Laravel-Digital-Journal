<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laravel</title>

        <!-- Fonts -->
        <!-- <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" /> -->

        <!-- Styles -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/main.css">
        <style>
            html {
                min-height: 100%;
                position: relative;
            }
            body {
                margin: 0;
                margin-bottom: 60px;
            }

            .site-header{
                background-color: #a9e598;
            }

            .logo__subtitle {
                margin-bottom: 0;
            }

            .site-nav{
                background-color: #eee;
                padding:10px 0;
            }

            .site-content{
                padding: 10px 0;
            }

            .site-footer {
                position: absolute;
                bottom: 0;
                width: 100%;
                height: 50px;
                line-height: 50px;
                background-color: #a9e598
            }

            .table tr td {
                border: 1px solid black;
                padding: 5px;
            }
    </style>
    </head>
    <body class="antialiased">
    <header class="site-header">
        <div class="container">
            <div class="logo">
                <div class="logo__title h2">Laravel Blog</div>
                <div class="logo__subtitle h6">Share last news</div>
            </div>            
        </div>
    </header>
    <nav class="site-nav">
        <div class="container">
            <ul class="nav">
                <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="index.php?c=add">Add</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Contacts</a></li>
            </ul>
        </div>
    </nav>
    <div class="site-content">
        <div class="container">
  
        </div>
    </div>
    <footer class="site-footer">
        <div class="container">
            &copy; 2022
        </div>
    </footer>
    </body>
</html>
