@extends('layouts.app')
@section('title', __('messages.dashboardEdit.title'))
@section('content')
    <div class="container mx-auto my-8 max-w-lg">
        <h2 class="text-2xl font-bold mb-6 text-center">{{ __('messages.dashboardEdit.account_settings') }}</h2>
        @if ($errors->any())
            <div class="mb-4 text-red-500">
                <ul id="messages_">
                    @foreach ($errors->all() as $error)
                        <li class="text-center">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <!-- Formulaire pour la mise à jour du nom -->
        <section>
            <div class="m-4">
                <label class="inline-flex items-center">
                    <input type="checkbox" id="changeNameCheckbox" class="form-checkbox text-[#34BDFF] outline-[#0DB0FF]">
                    <span class="ml-2 text-gray-700 font-medium">{{ __('messages.dashboardEdit.change_name') }}</span>
                </label>
            </div>
            <form action="{{ route('dashboard.updateName') }}" method="POST"
                class="bg-white shadow-md rounded-lg p-6 mb-6">
                @csrf
                @method('PUT')

                <div class="mb-4 hidden" id="nameField">
                    <label for="name"
                        class="block text-gray-700 font-medium mb-2">{{ __('messages.dashboardEdit.name') }}</label>
                    <input type="text" name="name" id="name" value="{{ old('name', $user->name) }}"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:border-[#34BDFF]">
                    @error('name')
                        <span class="text-red-500 inline-block">{{ $message }}</span>
                    @enderror
                </div>

                <button type="submit" id="submitbtn_"
                    class="submit w-full bg-[#34BDFF] hover:bg-[#0DB0FF] text-white font-bold py-2 px-4 rounded-lg transition-colors duration-200 ease-in-out">
                    {{ __('messages.dashboardEdit.update_name') }}
                </button>
            </form>
        </section>

        <!-- Formulaire pour la mise à jour du mot de passe -->
        <section>
            <div class="m-4">
                <label class="inline-flex items-center">
                    <input type="checkbox" id="changePasswordCheckbox"
                        class="form-checkbox text-[#34BDFF] outline-[#0DB0FF]">
                    <span class="ml-2 text-gray-700 font-medium">{{ __('messages.dashboardEdit.change_password') }}</span>
                </label>
            </div>
            <form action="{{ route('dashboard.updatePassword') }}" method="POST"
                class="bg-white shadow-md rounded-lg p-6 mb-6">
                @csrf
                @method('PUT')

                <div id="passwordFields">
                    <div class="mb-4">
                        <label for="password"
                            class="block text-gray-700 font-medium mb-2">{{ __('messages.dashboardEdit.new_password') }}</label>
                        <input type="password" name="password" id="password"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:border-[#34BDFF]">
                    </div>

                    <div class="mb-6">
                        <label for="password_confirmation"
                            class="block text-gray-700 font-medium mb-2">{{ __('messages.dashboardEdit.confirm_password') }}</label>
                        <input type="password" name="password_confirmation" id="password_confirmation"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:border-[#34BDFF]">
                        @error('password_confirmation')
                            <span class="text-red-500 inline-block">{{ $message }}</span>
                        @enderror
                        @error('password')
                            <span class="text-red-500 inline-block">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <button type="submit"
                    class="submit w-full bg-[#34BDFF] hover:bg-[#0DB0FF] text-white font-bold py-2 px-4 rounded-lg transition-colors">
                    {{ __('messages.dashboardEdit.update_password') }}
                </button>
            </form>
        </section>

        <!-- Formulaire pour supprimer le compte -->
        <button type="submit" id="deleteAccount_"
            class="bg-red-500 text-white font-bold py-2 px-4 rounded-lg hover:bg-red-600 transition-colors">
            {{ __('messages.dashboardEdit.delete_account') }}
        </button>

    </div>
    @include('components.confirmation-modal', [
        'title' => __('messages.dashboardEdit.confirm_deletion_title'),
        'message' => __('messages.dashboardEdit.confirm_deletion_message'),
    ])
@endsection

@push('scripts')
    @vite('resources/js/settings.js')
@endpush
