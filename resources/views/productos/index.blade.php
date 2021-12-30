@extends('layout.app')

@section('content')


<div class="w-auto my-10 mx-10 m-auto">
    <h1 class="text-center font-bold text-gray-700 text-3xl">Productos</h1>
    <a href="{{ route('productos.create') }}" class="rounded-md border bg-gray-700 text-white p-2 "> Agregar </a>
    <table class="table-auto  my-10">
        <thead class="h-12">
            <tr class="border-2">
                <th class="m-5">Nombre</th>
                <th>Descripcion</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Categoria</th>
                <th></th>
            </tr>
        </thead>
        <tbody class="border-2">
            @foreach ($productos as $producto)
            <tr class="border h-10 text-center">
                <td class="w-1/6">{{ $producto->nombre }}</td>
                <td class="w-2/6">{{ Str::of($producto->descripcion)->words(10, '...') }}</td>
                <td class="w-1/6">$ {{ $producto->precio }}</td>
                <td class="w-1/6">{{ $producto->stock }}</td>
                <td class="w-1/6">{{ $producto->categoria->descripcion }}</td>
                <td class="w-1/6">
                    <div class="flex flex-row">
                        <a href="{{ route('productos.edit', ['producto' => $producto->id ]) }}" class="p-2 w-full inline-flex border rounded-md bg-orange-500 text-white"><i class="fa-solid fa-pen"></i></a>
                        <form  onsubmit="return confirmar(event, this);" action=" {{ route('productos.destroy', ['producto' => $producto->id])}}" method="POST">
                            @csrf
                            @method("DELETE")
                        <button onclick="confirmar()" type="button" class="p-2 w-full inline-flex border rounded-md bg-red-500 text-white"><i class="fa-solid fa-trash"></i></button></form>
                    </div>
                </td>
                <td class="w-1/6">
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>

    {{ $productos->links() }}
</div>

<script>

    const confirmar = (e, form) => {
        e.preventDefault();

        const validate = confirm('Desea Eliminar?')
        if (validate) {
            form.submit();
        }
        return false;
    }

</script>
@endsection

