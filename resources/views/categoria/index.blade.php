@extends('layout.app')

@section('content')


<div class="w-2/6 mx-auto my-10">
    <h1 class="text-center font-bold text-gray-700 text-3xl">Categorías</h1>
    <a href="{{ route('categorias.create') }}" class="rounded-md border bg-gray-700 text-white p-2 "> Agregar </a>
    <table class="table-auto w-full my-10">
        <thead class="h-12">
            <tr class="border-2">
                <th class="m-5">Categoría</th>
                <th></th>
            </tr>
        </thead>
        <tbody class="border-2">
            @foreach ($categorias as $categoria)
            <tr class="border h-10 text-center">
                <td class="w-3/6">{{ $categoria->descripcion }}</td>
                <td class="w-3/6">
                    <div class="flex flex-row justify-center">
                        <a href="{{ route('categorias.edit', ['categoria' => $categoria->id ]) }}" class="p-2 inline-flex border rounded-md bg-orange-500 text-white"><i class="fa-solid fa-pen"></i></a>
                        <form onsubmit="return confirmar(event, this);" action=" {{ route('categorias.destroy', ['categoria' => $categoria->id])}}" method="POST">
                            @csrf
                            @method("DELETE")
                        <button  type="submit" class="p-2 inline-flex border rounded-md bg-red-500 text-white"><i class="fa-solid fa-trash"></i></button></form>
                    </div>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>

    {{ $categorias->links() }}
</div>

<script>

    const confirmar = (e, form) => {
        e.preventDefault();

        const validate = confirm('Desea eliminar, se eliminarán los productos asociados?')
        if (validate) {
            form.submit();
        }
        return false;
    }

</script>
@endsection

