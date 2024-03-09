@extends('auth.layouts')

@section('content')
    <div class="flex justify-center mt-20">
        <div class="w-full max-w-md">

            <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                <div class="mb-4 text-xl font-bold">Login</div>

                @if ($message = Session::get('success'))
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative text-center mb-4">
                        {{ $message }}
                    </div>
                @endif

                <form action="{{ route('authenticate') }}" method="post">
                    @csrf
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email Address</label>
                        <div>
                            <input type="email"
                                class="shadow appearance-none border @error('email') border-red-500 @enderror rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="email" name="email" value="{{ old('email') }}">
                            @error('email')
                                <span class="text-red-500 text-xs italic">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-6">
                        <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                        <div>
                            <input type="password"
                                class="shadow appearance-none border @error('password') border-red-500 @enderror rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                                id="password" name="password">
                            @error('password')
                                <span class="text-red-500 text-xs italic">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="flex items-center justify-center">
                        <input type="submit"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline cursor-pointer"
                            value="Login">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
