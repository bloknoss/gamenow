@extends('auth.layouts')
@section('content')
    <div class="w-[90vw]">
        <div class="mb-8 bg-white gap-5 shadow overflow-hidden sm:rounded-lg">
            <div class="px-4 py-5 sm:px-6 border-b border-gray-200">Juegos</div>
            <div class="p-4">
                <table class="overflow-scroll min-w-[auto] divide-y divide-gray-200 mt-4">
                    <thead>
                        <tr>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                ID
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Nombre de Juego
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                ID de Editorial
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Fecha de Lanzamiento
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Numero de Ventas
                            </th>

                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Descripcion
                            </th>

                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Acciones
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($juegos as $juego)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ $juego->id }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    <a class="text-blue-400 hover:text-yellow-600 mx-1"
                                        href="{{ route('juegos.show', $juego->id) }}">
                                        {{ $juego->nombre_juego }}
                                    </a>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ $juego->editorial_id }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ $juego->fecha_lanzamiento }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ $juego->ventas }}
                                </td>
                                <td class="px-6 min-w-[10vw] py-4 whitespace-nowrap text-sm text-wrap text-gray-500">
                                    {{ $juego->descripcion }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <div class="flex">
                                        <a href="{{ route('juegos.edit', $juego->id) }}"
                                            class="border rounded-md p-3 text-blue-400 hover:text-blue-600 mx-1">
                                            <i class="bi bi-pencil-square">
                                                Editar</i>
                                        </a>

                                        <form action="{{ route('juegos.destroy', $juego->id) }}" method="POST">
                                            @CSRF @method('DELETE')
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
        <a href="{{ route('juegos.create') }}"
            class=" mb-8 inline-flex items-center w-[90vw] text-center px-4 py-2 bg-green-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-600 active:bg-green-700 focus:outline-none focus:border-green-700 focus:ring focus:ring-green-200 disabled:opacity-25 transition ease-in-out duration-150">
            <i class="text-center w-[90vw] bi bi-plus-circle mr-2"> Nuevo Juego </i>
        </a>
    </div>
@endsection
