@extends('auth.layouts') @section('content')
<div class="flex justify-center mt-20">
    <div class="w-full max-w-2xl">
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <div class="mb-4 font-bold text-xl">Register</div>
            <form action="{{ route('store') }}" method="post">
                @csrf
                <div class="mb-6">
                    <label
                        for="name"
                        class="block text-gray-700 text-sm font-bold mb-2"
                        >Nombre de Usuario</label
                    >
                    <input
                        type="text"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('name') border-red-500 @enderror"
                        id="name"
                        name="nombre_usuario"
                        value="{{ old('nombre_usuario') }}"
                    />
                    @error('name')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label
                        for="name"
                        class="block text-gray-700 text-sm font-bold mb-2"
                        >Nombre</label
                    >
                    <input
                        type="text"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('name') border-red-500 @enderror"
                        id="name"
                        name="nombre"
                        value="{{ old('nombre') }}"
                    />
                    @error('name')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label
                        for="name"
                        class="block text-gray-700 text-sm font-bold mb-2"
                        >Apellidos</label
                    >
                    <input
                        type="text"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('name') border-red-500 @enderror"
                        id="name"
                        name="apellidos"
                        value="{{ old('apellidos') }}"
                    />
                    @error('apellidos')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label
                        for="name"
                        class="block text-gray-700 text-sm font-bold mb-2"
                        >Edad</label
                    >
                    <input
                        type="text"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('name') border-red-500 @enderror"
                        id="name"
                        name="edad"
                        value="{{ old('edad') }}"
                    />
                    @error('name')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label
                        for="email"
                        class="block text-gray-700 text-sm font-bold mb-2"
                        >Email Address</label
                    >
                    <input
                        type="email"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('email') border-red-500 @enderror"
                        id="email"
                        name="email"
                        value="{{ old('email') }}"
                    />
                    @error('email')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label
                        for="password"
                        class="block text-gray-700 text-sm font-bold mb-2"
                        >Password</label
                    >
                    <input
                        type="password"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('password') border-red-500 @enderror"
                        id="password"
                        name="password"
                    />
                    @error('password')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label
                        for="password_confirmation"
                        class="block text-gray-700 text-sm font-bold mb-2"
                        >Confirm Password</label
                    >
                    <input
                        type="password"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="password_confirmation"
                        name="password_confirmation"
                    />
                </div>

                <div class="flex items-center justify-center">
                    <button
                        type="submit"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    >
                        Register
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
