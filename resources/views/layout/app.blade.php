<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    </head>
    <body class="antialiased">
        @if ( session('status') )
            <div class="bg-gray-500 flex justify-center align-middle py-4 status">
               <p class="m-0 font-bold text-white">{{ session('status') }}</p>
            </div>
        @endif
        <nav class="bg-gray-700 rounded-sm h-16 w-full flex items-center px-5">
            <img src="{{ asset('images/coffe_logo.png') }}" alt="Logo" class="w-12 mx-3">
            @guest
                <a href="{{ route('acceso') }}" class="text-white no-underline hover:opacity-80 ml-auto">Ingresar </a>
            @else

            <a href="{{ route('home') }}" class="text-white no-underline hover:opacity-80 ml-auto">Menú</a>


            <form action="{{ route('logout') }}" method="POST" class="inline-block">
                @csrf
                <a href="#" onclick="this.closest('form').submit()" class="text-white no-underline hover:opacity-80 ml-5">Logout</a>
            </form>
            @endguest
        </nav>
        <div class="flex flex-row flex-wrap">
            <aside class="w-1/12 h-screen">
                <ul class="shadow-md">
                    <li class="my-5">
                        <a href="{{ route('categorias.index') }}" class="text-gray-700 no-underline hover:opacity-80 ml-5">Categorías</a>
                    </li>
                    <li class="my-5">
                        <a href="{{ route('productos.index') }}" class="text-gray-700 no-underline hover:opacity-80 ml-5">Productos</a>
                    </li>
                </ul>
            </aside>
            <div class="w-11/12">
                @yield('content')
            </div>
        </div>

    <script>
        if(document.querySelector('.status')){
            setTimeout(() => {
                let status = document.querySelector('.status')
                parent = status.parentNode
                parent.removeChild(status)

            }, 3000);
        }
    </script>

    </body>
</html>

