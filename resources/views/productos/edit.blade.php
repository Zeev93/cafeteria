@extends('layout.app')

@section('content')
    <div class="container my-10 m-auto">
        <form action="{{ route('productos.update', ['producto' => $producto->id]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="flex justify-center align-middle">
                <div class="border-2 rounded-sm shadow-sm p-5 w-full">
                    <h2 class="text-gray-700 text-3xl text-center my-2 font-bold uppercase">Registrar producto</h2>
                    <div class="flex flex-col mt-5">
                        <label for="nombre" class="text-gray-700 font-bold uppercase">Nombre</label>
                        <input type="text" name="nombre" id="nombre" class="w-full border rounded-sm h-10 mb-2 p-2" value="{{ $producto->nombre }}">
                        @error('nombre')
                            <p class="text-red-500 text-center font-bold"> {{ $message }} </p>
                        @enderror
                    </div>
                    <div class="flex flex-col">
                        <label for="descripcion" class="text-gray-700 font-bold uppercase">descripcion</label>
                        <input type="text" name="descripcion" id="descripcion" class="w-full border rounded-sm h-10 mb-2 p-2" value="{{ $producto->descripcion }}">
                        @error('descripcion')
                            <p class="text-red-500 text-center font-bold"> {{ $message }} </p>
                        @enderror
                    </div>
                    <div class="flex flex-col">
                        <label for="precio" class="text-gray-700 font-bold uppercase">precio</label>
                        <input type="text" name="precio" id="precio" class="w-full border rounded-sm h-10 mb-2 p-2" value="{{ $producto->precio }}">
                        @error('precio')
                            <p class="text-red-500 text-center font-bold"> {{ $message }} </p>
                        @enderror
                    </div>
                    <div class="flex flex-col">
                        <label for="stock" class="text-gray-700 font-bold uppercase">stock</label>
                        <input type="tel" name="stock" id="stock" class="w-full border rounded-sm h-10 mb-2 p-2" value="{{ $producto->stock }}">
                        @error('stock')
                            <p class="text-red-500 text-center font-bold"> {{ $message }} </p>
                        @enderror
                    </div>
                    <div class="flex flex-col">
                        <label for="categoria" class="text-gray-700 font-bold uppercase">categoria</label>
                        <select name="categoria_id" id="categoria" class="w-full border rounded-sm h-10 mb-2 p-2">
                            <option value=""> - Selecciona Categoría -</option>
                            @foreach ($categorias as $categoria)
                            <option {{ $producto->categoria_id == $categoria->id ? 'selected' : ''}}
                            value="{{$categoria->id}}">{{$categoria->descripcion}}</option>

                            @endforeach

                        </select>
                        @error('categoria')
                            <p class="text-red-500 text-center font-bold"> {{ $message }} </p>
                        @enderror
                    </div>

                    <button type="submit" class="block p-3 rounded-sm bg-gray-600 text-white w-full my-5 font-bold uppercase">Guardar</button>
                </div>
            </div>
        </form>
    </div>
@endsection