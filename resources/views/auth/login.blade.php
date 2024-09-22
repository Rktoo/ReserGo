@extends('layouts.app')

@section('content')
    <div class="max-w-md mx-auto my-10 bg-white p-5 rounded-lg shadow-md">
        <h2 class="text-2xl font-semibold text-center text-blue-600 mb-5">Connexion</h2>

        @if (session('status'))
            <div class="mb-4 text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Adresse e-mail</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                @error('email')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">Mot de passe</label>
                <input id="password" type="password" name="password" required
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                @error('password')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4 flex items-center">
                <input type="checkbox" name="remember" id="remember"
                    class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                <label for="remember" class="ml-2 text-sm text-gray-900">Se souvenir de moi</label>
            </div>

            <div class="mb-4">
                <button type="submit" class="w-full py-2 px-4 bg-blue-600 text-white rounded-md hover:bg-blue-700">
                    Connexion
                </button>
            </div>

            @if (Route::has('password.request'))
                <div class="text-center">
                    <a href="{{ route('password.request') }}" class="text-sm text-blue-500 hover:underline">Mot de passe
                        oublié ?</a>
                </div>
            @endif
        </form>
    </div>
@endsection
