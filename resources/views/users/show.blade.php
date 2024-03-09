@extends('auth.layouts')
@section('content')
    <div class="max-w-[90vw] flex flex-col justify-center mt-6 mb-6">
        <div class="w-full flex justify-center mt-6 mb-6">
            <div class="w-full">
                @if ($message = Session::get('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative"
                        role="alert">
                        {{ $message }}
                    </div>
                @endif

                <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                    <div class="mb-4 flex justify-between items-center">
                        <div>Información del Videojuego</div>
                        <div></div>
                    </div>
                    <div>
                        <div class="mb-4 flex flex-wrap flex-col">
                            <div class="block text-gray-700 text-sm font-bold mb-2 pr-4">
                                Nombre de user:
                            </div>
                            <div class="md:w-3/4 text-gray-600">
                                {{ $user->nombre_usuario }}
                            </div>
                        </div>

                        <div class="mb-4 flex flex-wrap flex-col">
                            <div class="block text-gray-700 text-sm font-bold mb-2 md:w-1/4 pr-4">
                                Editorial:
                            </div>
                            <div class="md:w-3/4 text-gray-600">
                                {{ $user->nombre }}
                            </div>
                        </div>

                        <div class="mb-4 flex flex-wrap flex-col">
                            <div class="block text-gray-700 text-sm font-bold mb-2 pr-4">
                                Fecha de Lanzamiento:
                            </div>
                            <div class="md:w-3/4 text-gray-600">
                                {{ $user->apellidos }}
                            </div>
                        </div>

                        <div class="mb-4 flex flex-wrap flex-col">
                            <div class="block text-gray-700 text-sm font-bold mb-2 md:w-1/4 pr-4">
                                Ventas:
                            </div>
                            <div class="md:w-3/4 text-gray-600">
                                {{ $user->edad }}
                            </div>
                        </div>

                        <div class="mb-4 flex flex-wrap flex-col">
                            <div class="block text-gray-700 text-sm font-bold mb-2 md:w-1/4 pr-4">
                                Descripción:
                            </div>
                            <div class="md:w-3/4 text-gray-600">
                                {{ $user->email }}
                            </div>
                        </div>

                        <div class="mb-4 flex flex-wrap flex-col">
                            <div class="block text-gray-700 text-sm font-bold mb-2 pr-4">
                                Fecha de Registro:
                            </div>
                            <div class="md:w-3/4 text-gray-600">
                                {{ $user->fecha_registro }}
                            </div>
                        </div>

                        <div class="mb-4 flex flex-wrap flex-col">
                            <div class="block text-gray-700 text-sm font-bold mb-2 pr-4">
                                Fecha de Verificación:
                            </div>
                            <div class="md:w-3/4 text-gray-600">
                                {{ $user->email_verified_at }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="">
            <a href="{{ route('users.index') }}">
                <button class="w-[100vw] max-w-xl bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    &larr; Atrás
                </button>
            </a>
        </div>
    </div>
@endsection
