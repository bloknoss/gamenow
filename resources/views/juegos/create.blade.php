@extends('auth.layouts')
@section('content')
    <div
        class="px-4 py-5 sm:px-6 w-[400px] rounded-md border border-gray-200 mb-10 flex flex-col text-black gap-5 border-blue-800">
        <form action="{{ route('juegos.store') }}" method="POST" class="w-full max-w-lg">
            @CSRF
            <div class="flex flex-wrap -mx-3 mb-3">
                <div class="w-full md:w-1/2 px-3 mb-5 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                        Nombre de Juego
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                        id="nombre_juego" name="nombre_juego" type="text" placeholder="Hollow Knight" />
                </div>
                <div class="w-full md:w-1/2 px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                        ID Editorial
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="grid-last-name" type="number" name="editorial_id" placeholder="5" />
                </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-2">
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
                        Fecha de Lanzamiento
                    </label>
                    <input name="fecha_lanzamiento"
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="grid-city" type="date" />
                </div>
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                        Numero de Ventas
                    </label>
                    <div class="relative">
                        <input type="number" name="ventas" placeholder="20000"
                            class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="grid-state" />
                    </div>
                </div>

                <div class="mt-5 w-full md:w-3/3 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                        Descripcion
                    </label>
                    <div class="relative">
                        <textarea
                            class="block text-left appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="grid-state" name="descripcion"
                            placeholder="Hollow Knight es una aventura de acción clásica en 2D ambientada en un vasto mundo interconectado. Explora cavernas tortuosas, ciudades antiguas y páramos mortales. Combate contra criaturas corrompidas, haz amistad con extraños insectos y resuelve los antiguos misterios que yacen en el corazón de reino."></textarea>
                    </div>
                </div>
            </div>
            <div class="w-full text-center">
                <button type="submit"
                    class="mt-5 inline-flex w-full text-center items-center px-4 py-2 bg-green-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase hover:bg-green-600 active:bg-green-700 focus:outline-none focus:border-green-700 focus:ring focus:ring-green-200 disabled:opacity-25 transition ease-in-out duration-150">
                    <i class="w-[100vw] text-center"> Crear </i>
                </button>
            </div>
        </form>
    </div>
@endsection
