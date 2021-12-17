@extends('layout.app')

@section('content')

    <div class="container m-auto my-10">
        <button class=" flex ml-auto border rounded-md bg-gray-700 text-white p-2">Agregar Nueva</button>
        <div class="flex w-full flex-wrap">
            @foreach ( $categorias as $categoria)
                <div class="rounded-sm shadow-md shadow-gray-200 w-1/3 p-5 my-3 flex justify-between">
                    <h2>{{ $categoria->descripcion }}</h2>
                    <div>
                        <button class="rounded-md bg-orange-400 text-white p-2 hover:opacity-80">Editar</button>
                        <button class="rounded-md bg-red-600 text-white p-2 hover:opacity-80">Eliminar</button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
