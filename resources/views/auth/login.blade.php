@extends('layout.app')

@section('content')

        <div class="container my-40 m-auto">
            <form action="{{ url('/login') }}" method="POST" >
                @csrf
                <div class="flex justify-center align-middle">
                    <div class="border-2 rounded-sm shadow-sm p-5 w-4/12">
                        <h2 class="text-gray-700 text-3xl text-center my-2 font-bold uppercase">Acceso</h2>
                        <div class="flex flex-col mt-5">
                            <label for="email" class="text-gray-700 font-bold uppercase">Email</label>
                            <input type="text" name="email" id="email" class="w-full border rounded-sm h-10 mb-2 p-2" value="{{ old('email')}}">
                            @error('email')
                                <p class="text-red-500 text-center font-bold"> {{ $message }} </p>
                            @enderror
                        </div>
                        <div class="flex flex-col">
                            <label for="password" class="text-gray-700 font-bold uppercase">Password</label>
                            <input type="text" name="password" id="password" class="w-full border rounded-sm h-10 mb-2 p-2">
                            @error('password')
                                <p class="text-red-500 text-center font-bold"> {{ $message }} </p>
                            @enderror
                        </div>
                        <div class="my-3">
                            <input type="checkbox" name="remember" id="remember">
                            <label for="remember">Recordarme</label>
                        </div>
                        <button type="submit" class="block p-3 rounded-sm bg-gray-600 text-white w-full my-5 font-bold uppercase">Login</button>
                    </div>
                </div>
            </form>
        </div>


@endsection
