<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Título por defecto')</title>
</head>
<body>
    <h1>Layout</h1>
    <nav>
    <ul>
    <li><a href="/">Home</a></li>
    <li><a href="/acerca">About</a></li>
    <li><a href="/portafolio">Portafolio</a></li>
    <li><a href="/contacto">Contacto</a></li>
    </ul>
    </nav>
    @yield('content')
</body>
</html>