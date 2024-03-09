@extends('auth.layouts')
@section('content')
    <div class="flex w-[100vw] justify-center mt-6">
        <div class="w-full max-w-2xl">
            <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                <div class="mb-4 flex justify-between items-center">
                    <div>Modificar Videojuego</div>
                </div>
                <div>
                    <form action="{{ route('juegos.update', $juego->id) }}" method="post">
                        @CSRF
                        @method('PUT')
                        <div class="mb-4 flex flex-col">
                            <label for="nombre"
                                class="block text-gray-700 text-sm font-bold mb-2 md:w-1/4 pr-4 align-middle">Nombre de
                                Videojuego</label>
                            <div class="">
                                <input type="text"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('nombre') border-red-500 @enderror"
                                    id="nombre_juego" name="nombre_juego"
                                    value="{{ old('nombre_juego', $juego->nombre_juego) }}" />
                                @error('nombre')
                                    <p class="text-red-500 text-xs italic">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-4 flex flex-col flex-wrap">
                            <label for="apellidos"
                                class="block text-gray-700 text-sm font-bold mb-2 md:w-1/4 pr-4 align-middle">Apellidos</label>
                            <div class="">
                                <input type="text"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('apellidos') border-red-500 @enderror"
                                    id="editorial_id" name="editorial_id"
                                    value="{{ old('editorial_id', $juego->editorial_id) }}" />
                                @error('editorial_id')
                                    <p class="text-red-500 text-xs italic">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-4 flex flex-col">
                            <label for="fecha_lanzamiento"
                                class="block text-gray-700 text-sm font-bold mb-2 pr-4 align-middle">Fecha de
                                Lanzamiento</label>
                            <div class="">
                                <input type="date"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('edad') border-red-500 @enderror"
                                    id="fecha_lanzamiento" name="fecha_lanzamiento"
                                    value="{{ old('fecha_lanzamiento', $juego->fecha_lanzamiento) }}" />
                                @error('fecha_lanzamiento')
                                    <p class="text-red-500 text-xs italic">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-4 flex flex-col flex-wrap">
                            <label for="nota"
                                class="block text-gray-700 text-sm font-bold mb-2 md:w-1/4 pr-4 align-middle">Ventas</label>
                            <div class="">
                                <input type="number"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('nota') border-red-500 @enderror"
                                    id="ventas" name="ventas" value="{{ old('ventas', $juego->ventas) }}" />
                                @error('nota')
                                    <p class="text-red-500 text-xs italic">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-4 flex flex-col flex-wrap">
                            <label for="descripcion"
                                class="block text-gray-700 text-sm font-bold mb-2 md:w-1/4 pr-4 align-middle">Descripcion</label>
                            <div class="">
                                <textarea
                                    class="h-[90px] shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('descripcion') border-red-500 @enderror"
                                    id="descripcion" name="descripcion">{{ old('descripcion', $juego->descripcion) }}
                                    </textarea>
                                @error('descripcion')
                                    <p class="text-red-500 text-xs italic">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-4 flex flex-col gap-5 justify-center">
                            <input type="submit"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                                value="Actualizar Videojuego" />
                            <a href="{{ route('juegos.index') }}"
                                class="text-center bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">&larr;
                                Atras</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection