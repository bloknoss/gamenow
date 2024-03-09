@extends('auth.layouts')

@section('content')
    <div class="flex mb-10 justify-center mt-10">
        <div class="w-full max-w-lg">
            <div class="bg-white shadow-md rounded-lg">
                <div class="px-4 py-3 border-b border-gray-200 text-gray-900 font-bold">Verifique su correo electrónico</div>
                <div class="p-4">
                    @if ($message = Session::get('success'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative"
                            role="alert">
                            {{ $message }}
                        </div>
                    @endif
                    <p class="my-3">Antes de continuar por favor verifique su correo electrónico.
                        Si desea que le enviemos un nuevo correo de verificación, </p>
                    <form class="inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="text-blue-500 underline p-0 m-0 align-baseline">Haga click
                            aquí</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
