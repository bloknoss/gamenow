@extends('auth.layouts')
@section('content')
    <div class="flex flex-col w-[90vw]">
        <div class="mb-8 bg-white shadow overflow-hidden sm:rounded-lg">
            <div class="px-4 py-5 sm:px-6 border-b border-gray-200">Usuarios</div>
            <div class="p-4">
                <table class="min-w-full divide-y divide-gray-200 mt-4">
                    <thead>
                        <tr>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                ID
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Nombre de Usuario
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Nombre
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Apellidos
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Edad
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Correo Electronico
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Fecha de Registro
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Acciones
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($users as $user)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ $user->id }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    <a class="text-blue-400 hover:text-yellow-600 mx-1"
                                        href="{{ route('users.show', $user->id) }}">
                                        {{ $user->nombre_usuario }}
                                    </a>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ $user->nombre }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ $user->apellidos }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ $user->edad }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ $user->email }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ $user->fecha_registro }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">

                                    <div class="flex">
                                        <a href="{{ route('users.edit', $user->id) }}"
                                            class="border rounded-md p-3 text-blue-400 hover:text-blue-600 mx-1">
                                            <i class="bi bi-pencil-square"> Editar</i>
                                        </a>

                                        <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                                            @CSRF
                                            @method('DELETE')
                                            <button type="submit"
                                                class="bg-red-300 border rounded-md p-3 text-blue-400 hover:text-blue-600 mx-1">
                                                <i>Eliminar</i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <a href="{{ route('users.create') }}"
            class=" mb-8 inline-flex items-center w-[90vw] text-center px-4 py-2 bg-green-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-600 active:bg-green-700 focus:outline-none focus:border-green-700 focus:ring focus:ring-green-200 disabled:opacity-25 transition ease-in-out duration-150">
            <i class="w-[90vw] bi bi-plus-circle mr-2 text-centerº"> Nuevo Usuario</i>
        </a>
    </div>
@endsection
