@extends('layouts.errorLayout')
@section('title', __('messages.errors.403_title'))
@section('content')
    <div class="text-center">
        <h1 class="text-6xl font-bold text-red-600">{{ __('messages.errors.403_title') }}</h1>
        <p class="text-xl text-gray-700 mt-4">{{ __('messages.errors.403_message') }}</p>
        <a href="{{ route('home') }}" class="mt-6 inline-block px-4 py-2 bg-[#34BDFF] hover:bg-[#0DB0FF] text-white rounded">
            {{ __('messages.errors.back_home') }}
        </a>
    </div>
@endsection
