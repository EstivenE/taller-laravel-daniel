<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title', 'Taller Laravel')</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <nav>
            <a href="{{ route( 'producto.index') }}">productos</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>
</body>
</html>