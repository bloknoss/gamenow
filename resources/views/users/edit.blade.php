    @extends('auth.layouts')
    @section('content')
        <div class="flex w-[100vw] justify-center mt-6">
            <div class="w-full max-w-2xl">
                <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                    <div class="mb-4 flex justify-between items-center">
                        <div>Modificar Usuario</div>
                    </div>
                    <div>
                        <form action="{{ route('users.update', $user->id) }}" method="post">
                            @csrf @method('PUT')

                            <div class="mb-4 flex flex-col flex-wrap">
                                <label for="nombre_usuario"
                                    class="block text-gray-700 text-sm font-bold mb-2 pr-4 align-middle">Nombre de
                                    Usuario</label>
                                <div class="">
                                    <input type="text"
                                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('nombre') border-red-500 @enderror"
                                        id="nombre_usuario" name="nombre_usuario"
                                        value="{{ old('nombre_usuario', $user->nombre_usuario) }}" />
                                    @error('nombre')
                                        <p class="text-red-500 text-xs italic">
                                            {{ $message }}
                                        </p>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-4 flex flex-col flex-wrap">
                                <label for="apellidos"
                                    class="block text-gray-700 text-sm font-bold mb-2 md:w-1/4 pr-4 align-middle">Nombre</label>
                                <div class="">
                                    <input type="text"
                                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('apellidos') border-red-500 @enderror"
                                        id="nombre" name="nombre" value="{{ old('nombre', $user->nombre) }}" />
                                    @error('apellidos')
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
                                        id="apellidos" name="apellidos" value="{{ old('apellidos', $user->apellidos) }}" />
                                    @error('apellidos')
                                        <p class="text-red-500 text-xs italic">
                                            {{ $message }}
                                        </p>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-4 flex flex-col flex-wrap">
                                <label for="edad"
                                    class="block text-gray-700 text-sm font-bold mb-2 md:w-1/4 pr-4 align-middle">Edad</label>
                                <div class="">
                                    <input type="number"
                                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('edad') border-red-500 @enderror"
                                        id="edad" name="edad" value="{{ old('edad', $user->edad) }}" />
                                    @error('edad')
                                        <p class="text-red-500 text-xs italic">
                                            {{ $message }}
                                        </p>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-4 flex flex-col flex-wrap">
                                <label for="password"
                                    class="block text-gray-700 text-sm font-bold mb-2 pr-4 align-middle">Contraseña</label>
                                <div class="">
                                    <input type="password"
                                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('nota') border-red-500 @enderror"
                                        id="password" name="password" value="{{ old('password', $user->password) }}" />
                                    @error('nota')
                                        <p class="text-red-500 text-xs italic">
                                            {{ $message }}
                                        </p>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-4 flex flex-col flex-wrap">
                                <label for="descripcion"
                                    class="block text-gray-700 text-sm font-bold mb-2 md:w-1/4 pr-4 align-middle">Fecha de
                                    Registro</label>
                                <div class="">
                                    <input type="date"
                                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('descripcion') border-red-500 @enderror"
                                        id="descripcion" name="descripcion"
                                        value="{{ old('fecha_registro', $user->fecha_registro) }}" />
                                    @error('descripcion')
                                        <p class="text-red-500 text-xs italic">
                                            {{ $message }}
                                        </p>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-4 flex flex-col flex-wrap">
                                <label for="descripcion"
                                    class="block text-gray-700 text-sm font-bold mb-2 md:w-1/4 pr-4 align-middle">Fecha de
                                    Verificación</label>
                                <div class="">
                                    <input type="date"
                                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('descripcion') border-red-500 @enderror"
                                        id="email_verified_at" name="email_verified_at"
                                        value="{{ old('email_verified_at', $user->email_verified_at) }}" />
                                    @error('descripcion')
                                        <p class="text-red-500 text-xs italic">
                                            {{ $message }}
                                        </p>
                                    @enderror
                                </div>
                            </div>

                            <div class="text-center gap-5 mb-4 flex flex-col justify-center">
                                <input type="submit"
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                                    value="Actualizar Usuario" />
                                <a href="{{ route('users.index') }}"
                                    class="w-[auto] bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">&larr;
                                    Atras</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
