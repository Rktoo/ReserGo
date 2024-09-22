@extends('layouts.app')

@section('content')
    <div class="max-w-md mx-auto my-10 bg-white p-5 rounded-lg shadow-md">
        <h2 class="text-2xl font-semibold text-center text-blue-600 mb-5">S'enregistrer</h2>

        @if (session('status'))
            <div class="mb-4 text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Adresse e-mail</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Votre adresse email">
                @error('email')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">Mot de passe</label>
                <input id="password" type="password" name="password" required
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Votre mot de passe">
                @error('password')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="confirm_password" class="block text-sm font-medium text-gray-700">Confirmation</label>
                <input id="confirm_password" type="password" name="confirm_password" required
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Confirmer le mot de passe">
                @error('password')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="flex justify-between">

                <div class="flex text-sm gap-1">
                    <p class="text-gray-800">Vous avez déjà un compte ?</p>
                    <a href="{{ route('login') }}"
                        class="text-blue-400 hover:underline hover:underline-offset-2 transition-all duration-200 ease-in-out">Cliquer
                        ici</a>
                </div>
            </div>
            <div class="mt-2 mb-4">
                <button type="submit" class="w-full py-2 px-4 bg-blue-600 text-white rounded-md hover:bg-blue-700">
                    Créer un compte
                </button>
            </div>
        </form>
    </div>
@endsection
