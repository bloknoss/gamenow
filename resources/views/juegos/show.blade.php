@extends('auth.layouts')
@section('content')

    <div class="max-w-[90vw] flex flex-col justify-center mt-6 mb-6">
        <div class="w-full max-w-2xl">
            <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                <div class="mb-4 flex justify-between items-center">
                    <div>Información del Videojuego</div>
                </div>
                <div>
                    <div class="mb-4 flex flex-wrap flex-col">
                        <div class="block text-gray-700 text-sm font-bold mb-2 pr-4">
                            Nombre de Juego:
                        </div>
                        <div class="md:w-3/4 text-gray-600">
                            {{ $juego->nombre_juego }}
                        </div>
                    </div>

                    <div class="mb-4 flex flex-wrap flex-col">
                        <div class="block text-gray-700 text-sm font-bold mb-2 md:w-1/4 pr-4">
                            Editorial:
                        </div>
                        <div class="md:w-3/4 text-gray-600">
                            {{ $editorial }}
                        </div>
                    </div>

                    <div class="mb-4 flex flex-wrap flex-col">
                        <div class="block text-gray-700 text-sm font-bold mb-2 md:w-1/4 pr-4">
                            Fecha de Lanzamiento:
                        </div>
                        <div class="md:w-3/4 text-gray-600">
                            {{ $juego->fecha_lanzamiento }}
                        </div>
                    </div>

                    <div class="mb-4 flex flex-wrap flex-col">
                        <div class="block text-gray-700 text-sm font-bold mb-2 md:w-1/4 pr-4">
                            Ventas:
                        </div>
                        <div class="md:w-3/4 text-gray-600">
                            {{ $juego->ventas }}
                        </div>
                    </div>



                    <div class="mb-4 flex flex-wrap flex-col">
                        <div class="block text-gray-700 text-sm font-bold mb-2 md:w-1/4 pr-4">
                            Descripción:
                        </div>
                        <div class="md:w-3/4 text-gray-600">
                            {{ $juego->descripcion }}
                        </div>
                    </div>


                    @if (count($imagenes) > 0)
                        <div class="mb-4 flex flex-wrap flex-col">
                            <div class="block text-gray-700 text-sm font-bold mb-2 md:w-1/4 pr-4">
                                Imagenes:
                            </div>
                            <div class="flex md:flex-row lg:flex-row sm:flex-col gap-3">
                                @foreach ($imagenes as $imagen)
                                    <div class="flex sm:flex-col pt-2 pb-3 gap-5">
                                        <img class="rounded-xl" src="{{ $imagen->url }}">
                                    </div>
                                @endforeach
                            </div>
                    @endif

                </div>
            </div>
        </div>



        @if (count($usuarios) > 0)
            @foreach ($usuarios as $usuario)
                <div class="w-full max-w-2xl">
                    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">

                        <div class="mb-4 flex justify-between items-center">
                            <div>Información del Usuario Asociado</div>
                        </div>

                        <div class="mb-4 flex flex-wrap flex-col">
                            <div class="block text-gray-700 text-sm font-bold mb-2 pr-4">
                                Nombre de usuario:
                            </div>
                            <div class="md:w-3/4 text-gray-600">
                                {{ $usuario->nombre_usuario }}
                            </div>
                        </div>

                        <div class="mb-4 flex flex-wrap flex-col">
                            <div class="block text-gray-700 text-sm font-bold mb-2 md:w-1/4 pr-4">
                                Editorial:
                            </div>
                            <div class="md:w-3/4 text-gray-600">
                                {{ $usuario->nombre }}
                            </div>
                        </div>

                        <div class="mb-4 flex flex-wrap flex-col">
                            <div class="block text-gray-700 text-sm font-bold mb-2 pr-4">
                                Fecha de Lanzamiento:
                            </div>
                            <div class="md:w-3/4 text-gray-600">
                                {{ $usuario->apellidos }}
                            </div>
                        </div>

                        <div class="mb-4 flex flex-wrap flex-col">
                            <div class="block text-gray-700 text-sm font-bold mb-2 md:w-1/4 pr-4">
                                Ventas:
                            </div>
                            <div class="md:w-3/4 text-gray-600">
                                {{ $usuario->edad }}
                            </div>
                        </div>

                        <div class="mb-4 flex flex-wrap flex-col">
                            <div class="block text-gray-700 text-sm font-bold mb-2 md:w-1/4 pr-4">
                                Descripción:
                            </div>
                            <div class="md:w-3/4 text-gray-600">
                                {{ $usuario->email }}
                            </div>
                        </div>

                        <div class="mb-4 flex flex-wrap flex-col">
                            <div class="block text-gray-700 text-sm font-bold mb-2 pr-4">
                                Fecha de Registro:
                            </div>
                            <div class="md:w-3/4 text-gray-600">
                                {{ $usuario->fecha_registro }}
                            </div>
                        </div>

                        <div class="mb-4 flex flex-wrap flex-col">
                            <div class="block text-gray-700 text-sm font-bold mb-2 pr-4">
                                Fecha de Verificación:
                            </div>
                            <div class="md:w-3/4 text-gray-600">
                                {{ $usuario->email_verified_at }}
                            </div>
                        </div>

                    </div>
                </div>
            @endforeach
        @endif

        <div class="">
            <a href="{{ route('juegos.index') }}">

                <button class="w-full max-w-xl bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">&larr;
                    Atrás</button>
            </a>
        </div>
    </div>
@endsection
