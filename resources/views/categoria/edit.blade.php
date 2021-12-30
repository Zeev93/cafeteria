@extends('layout.app')

@section('content')
    <div class="w-auto my-10 mx-10 m-auto">
        <form action="{{ route('categorias.update', ['categoria' => $categoria->id]) }}" method="POST" >
            @csrf
            @method('PUT')
            <div class="flex justify-center align-middle">
                <div class="border-2 rounded-sm shadow-sm p-5 w-full">
                    <h2 class="text-gray-700 text-3xl text-center my-2 font-bold uppercase">Registrar Categoría</h2>
                    <div class="flex flex-col mt-5">
                        <label for="descripcion" class="text-gray-700 font-bold uppercase">Descripcion</label>
                        <input type="text" name="descripcion" id="descripcion" class="w-full border rounded-sm h-10 mb-2 p-2" value="{{ $categoria->descripcion }}">
                        @error('nombre')
                            <p class="text-red-500 text-center font-bold"> {{ $message }} </p>
                        @enderror
                    </div>

                    <button type="submit" class="block p-3 rounded-sm bg-gray-600 text-white w-full my-5 font-bold uppercase">Guardar</button>
                </div>
            </div>
        </form>
    </div>
@endsection
