@extends('layouts.app')

@section('content')
    <div class="relative max-w-md mx-auto my-10 bg-white p-5 rounded-lg shadow-md">
        <h2 class="text-2xl font-semibold text-center text-[#34BDFF] mb-5">{{ __('messages.login.title') }}</h2>

        @if (session('status'))
            <div class="mb-4 text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">{{ __('messages.login.email') }}</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" autofocus
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-[#34BDFF] focus:border-[#34BDFF]">
                <span class="text-red-400 text-sm"></span>
                @error('email')
                    <span class="laravelmessage_ text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password"
                    class="block text-sm font-medium text-gray-700">{{ __('messages.login.password') }}</label>
                <input id="password" type="password" name="password"
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-[#34BDFF] focus:border-[#34BDFF]">
                <span class="text-red-400 text-sm"></span>
                @error('password')
                    <span class="laravelmessage_ text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="flex justify-between text-sm max-sm:text-xs">
                <div class="mb-1 flex items-center">
                    <input type="checkbox" name="remember" id="remember"
                        class="h-4 w-4 text-[#34BDFF] focus:ring-[#34BDFF] border-gray-300 rounded">
                    <label for="remember" class="ml-2 text-gray-900">{{ __('messages.login.remember_me') }}</label>
                </div>
                <div class="flex gap-1">
                    <p class="text-gray-800">{{ __('messages.login.no_account') }}</p>
                    <a href="{{ route('register') }}"
                        class="text-blue-400 hover:underline hover:underline-offset-2 transition-all duration-200 ease-in-out">{{ __('messages.login.register_here') }}</a>
                </div>
            </div>
            <div class="mt-2 mb-2">
                <button type="submit" class="w-full py-2 px-4 bg-[#34BDFF] hover:bg-[#0DB0FF] text-white rounded-md ">
                    {{ __('messages.login.login_button') }}
                </button>
            </div>

            {{-- @if (Route::has('password.request'))
                <div class="text-center">
                    <a href="{{ route('password.request') }}" class="text-sm text-[#34BDFF] hover:underline">{{ __('messages.login.forgot_password') }}</a>
                </div>
            @endif --}}
        </form>
    </div>
@endsection

@push('scripts')
    @vite('resources/js/auth/login.js')
@endpush
