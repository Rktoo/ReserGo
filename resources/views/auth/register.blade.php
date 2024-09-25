@extends('layouts.app')

@section('content')
    <div class="max-w-md mx-auto my-10 bg-white p-5 rounded-lg shadow-md">
        <h2 class="text-2xl font-semibold text-center text-[#34BDFF] mb-5">{{ __('messages.register.title') }}</h2>

        @if (session('status'))
            <div class="mb-4 text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="mb-4">
                <label for="name"
                    class="block text-sm font-medium text-gray-700">{{ __('messages.register.name') }}</label>
                <input id="name" type="text" name="name" value="{{ old('name') }}" autofocus
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                    placeholder="{{ __('messages.register.name') }}">
                <span class="text-red-400 text-sm"></span>
                @error('name')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <label for="email"
                    class="block text-sm font-medium text-gray-700">{{ __('messages.register.email') }}</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" autofocus
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                    placeholder="{{ __('messages.register.email') }}">
                <span class="text-red-400 text-sm"></span>
                @error('email')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password"
                    class="block text-sm font-medium text-gray-700">{{ __('messages.register.password') }}</label>
                <input id="password" type="password" name="password"
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                    placeholder="{{ __('messages.register.password') }}">
                <span class="text-red-400 text-sm"></span>
                @error('password')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password_confirmation"
                    class="block text-sm font-medium text-gray-700">{{ __('messages.register.password_confirmation') }}</label>
                <input id="password_confirmation" type="password" name="password_confirmation"
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                    placeholder="{{ __('messages.register.password_confirmation') }}">
                <span class="text-red-400 text-sm"></span>
                @error('password_confirmation')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="flex justify-between text-sm max-sm:text-xs">
                <div class="mb-1 flex justify-end w-full px-6 gap-1">
                    <p class="text-gray-800">{{ __('messages.register.already_have_account') }}</p>
                    <a href="{{ route('login') }}"
                        class="text-blue-400 hover:underline hover:underline-offset-2 transition-all duration-200 ease-in-out">{{ __('messages.register.login_here') }}</a>
                </div>
            </div>
            <div class="mt-2 mb-2">
                <button type="submit" class="w-full py-2 px-4 bg-[#34BDFF] text-white rounded-md hover:bg-[#0DB0FF]">
                    {{ __('messages.register.register_button') }}
                </button>
            </div>
        </form>
    </div>
@endsection

@push('scripts')
    @vite('resources/js/auth/register.js')
@endpush
