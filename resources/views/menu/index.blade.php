@extends('layout.app')

@section('content')

    <div class="w-2/5 my-10 mx-auto bg-gray-300 p-5 shadow-md rounded-md">
        <h1 class="text-4xl text-gray-700 text-center"> Menú </h1>
        <div class="flex mt-5">
            @foreach ($chunk as $categorias)
                <div class="w-1/2">
                    @foreach ($categorias as $categoria)
                        @if (count($categoria->productos))
                            <h2 class="text-3xl text-gray-700 mt-3"> {{$categoria->descripcion}} </h2>
                            <ul>
                                @foreach ($categoria->productos as $producto)
                                <li class="ml-3 mt-3 hover:list-disc flex">
                                    <div class="w-10/12">
                                        <p>{{$producto->nombre}} </p>
                                        <p class="text-sm">{{$producto->descripcion}}</p>
                                    </div>
                                    <div class="w-2/12">
                                        <p class="text-center font-bold"> $ {{$producto->precio}} </p>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        @endif
                    @endforeach
                </div>
            @endforeach
        </div>
    </div>
@endsection
