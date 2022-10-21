<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Título por defecto')</title>
    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/estilo.css') }}">
    <style>
        .active a{
            color: red;
            text-decoration: none;
        }
        
    </style>
</head>
<body >
    <h1>Layout</h1>
    <nav>
    <ul>
    <li class="{{ request()->routeIs('home') ? 'active' : '' }}"><a href="/">Home</a></li>
    <li class="{{ request()->routeIs('about') ? 'active' : '' }}"><a href="/acerca">About</a></li>
    <li class="{{ request()->routeIs('portafolio') ? 'active' : '' }}"><a href="/portafolio">Portafolio</a></li>
    <li class="{{ request()->routeIs('contacto') ? 'active' : '' }}"><a href="/contacto">Contacto</a></li>
    </ul>
    </nav>
    @yield('content')
</body>
</html>