@extends('layouts.app')
@section('title', 'Paramètres')
@section('content')
    <div class="container mx-auto my-8 max-w-lg">
        <h2 class="text-2xl font-bold mb-6 text-center">Paramètres du compte</h2>
        <!-- Formulaire pour la mise à jour du nom -->
        <section>
            <!-- Checkbox pour modifier le nom -->
            <div class="mb-4">
                <label class="inline-flex items-center">
                    <input type="checkbox" id="changeNameCheckbox" class="form-checkbox text-blue-500">
                    <span class="ml-2 text-gray-700 font-medium">Modifier votre nom d'utilisateur</span>
                </label>
            </div>
            <form action="{{ route('dashboard.updateName') }}" method="POST" class="bg-white shadow-md rounded-lg p-6 mb-6">
                @csrf
                @method('PUT')

                <div class="mb-4 hidden" id="nameField">
                    <label for="name" class="block text-gray-700 font-medium mb-2">Nom</label>
                    <input type="text" name="name" id="name" value="{{ old('name', $user->name) }}"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:border-blue-300">
                    @error('name')
                        <span class="text-red-500 inline-block">{{ $message }}</span>
                    @enderror
                </div>

                <button type="submit" id="submitbtn_"
                    class="submit w-full bg-blue-500 text-white font-bold py-2 px-4 rounded-lg hover:bg-blue-600 transition-colors">
                    Mettre à jour le nom
                </button>
            </form>
        </section>
        <!-- Formulaire pour la mise à jour du mot de passe -->
        <section>

            <div class="mb-4">
                <label class="inline-flex items-center">
                    <input type="checkbox" id="changePasswordCheckbox" class="form-checkbox text-blue-500">
                    <span class="ml-2 text-gray-700 font-medium">Modifier le mot de passe</span>
                </label>
            </div>
            <form action="{{ route('dashboard.updatePassword') }}" method="POST"
                class="bg-white shadow-md rounded-lg p-6 mb-6">
                @csrf
                @method('PUT')

                <div id="passwordFields">
                    <div class="mb-4">
                        <label for="password" class="block text-gray-700 font-medium mb-2">Nouveau mot de passe</label>
                        <input type="password" name="password" id="password"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:border-blue-300">
                    </div>

                    <div class="mb-6">
                        <label for="password_confirmation" class="block text-gray-700 font-medium mb-2">Confirmer le mot de
                            passe</label>
                        <input type="password" name="password_confirmation" id="password_confirmation"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:border-blue-300">
                        @error('password_confirmation')
                            <span class="text-red-500 inline-block">{{ $message }}</span>
                        @enderror
                        @error('password')
                            <span class="text-red-500 inline-block">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <button type="submit"
                    class="submit w-full bg-blue-500 text-white font-bold py-2 px-4 rounded-lg hover:bg-blue-600 transition-colors">
                    Mettre à jour le mot de passe
                </button>
            </form>
        </section>

        <!-- Formulaire pour supprimer le compte -->

        <button type="submit" id="deleteAccount_"
            class="bg-red-500 text-white font-bold py-2 px-4 rounded-lg hover:bg-red-600 transition-colors">
            Supprimer le compte
        </button>

    </div>
    @include('components.confirmation-modal', [
        'title' => 'Confirmer la suppresion',
        'message' => 'Êtes-vous sûr de vouloir supprimer votre compte ?',
    ])
@endsection

@push('scripts')
    <script type="module" src="{{ asset('js/settings.js') }}"></script>
@endpush
