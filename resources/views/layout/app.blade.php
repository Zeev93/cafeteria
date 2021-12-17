<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/app.css">

    </head>
    <body class="antialiased">
        <nav class="bg-gray-700 rounded-sm h-16 w-full flex items-center px-5">
            <img src="{{ asset('images/coffe_logo.png') }}" alt="Logo" class="w-12 mx-3">
            <a href="#" class="text-white no-underline hover:opacity-80 ml-auto">Ingresar </a>
        </nav>
        @yield('menu_categorias')
        @yield('content')
    </body>
</html>
