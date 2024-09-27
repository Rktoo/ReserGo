@extends('layouts.app')

@section('title', __('messages.serviceShow.title'))

@section('content')
    <div class="container mx-auto my-10 px-4 lg:px-8">
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            @if ($service->image_url)
                <div class="h-64 w-full bg-contain bg-no-repeat bg-center"
                    style="background-image: url('{{ asset('storage/' . $service->image_url) }}')">
                </div>
            @endif

            <div class="p-6">
                <h1 class="text-3xl font-bold text-blue-600 mb-4">{{ $service->name }}</h1>

                <p class="text-gray-700 text-lg leading-relaxed mb-4">
                    {{ $service->description }}
                </p>

                <div class="bg-blue-50 p-4 rounded-lg mb-6">
                    <h2 class="text-xl font-semibold text-blue-600 mb-2">{{ __('messages.serviceShow.advantages') }}</h2>
                    <ul class="list-disc pl-5 text-gray-700">
                        <li>{{ __('messages.serviceShow.advantage_one') }}</li>
                        <li>{{ __('messages.serviceShow.advantage_two') }}</li>
                        <li>{{ __('messages.serviceShow.advantage_three') }}</li>
                    </ul>
                </div>

                {{-- Fonctionnalités clés du service --}}
                <div class="mb-6">
                    <h2 class="text-xl font-semibold text-blue-600 mb-2">{{ __('messages.serviceShow.key_features') }}</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="bg-white p-4 rounded-lg shadow-md">
                            <h3 class="font-semibold text-lg text-gray-800">{{ __('messages.serviceShow.feature_one') }}
                            </h3>
                            <p class="text-gray-600">{{ __('messages.serviceShow.feature_one_desc') }}</p>
                        </div>
                        <div class="bg-white p-4 rounded-lg shadow-md">
                            <h3 class="font-semibold text-lg text-gray-800">{{ __('messages.serviceShow.feature_two') }}
                            </h3>
                            <p class="text-gray-600">{{ __('messages.serviceShow.feature_two_desc') }}</p>
                        </div>
                    </div>
                </div>

                {{-- Témoignages clients --}}
                <div class="bg-blue-100 p-6 rounded-lg shadow-lg mb-6">
                    <h2 class="text-xl font-semibold text-blue-600 mb-4">{{ __('messages.serviceShow.testimonials') }}</h2>
                    <div class="space-y-4">
                        <blockquote class="text-gray-800">
                            <p class="italic">"{{ __('messages.serviceShow.testimonial_one') }}"</p>
                            <cite class="block text-right text-blue-600">{{ __('messages.serviceShow.client_one') }}</cite>
                        </blockquote>
                        <blockquote class="text-gray-800">
                            <p class="italic">"{{ __('messages.serviceShow.testimonial_two') }}"</p>
                            <cite class="block text-right text-blue-600">{{ __('messages.serviceShow.client_two') }}</cite>
                        </blockquote>
                    </div>
                </div>

                <div class="text-xl text-green-600 font-semibold mb-4">
                    {{ __('messages.serviceShow.service_price') }} : {{ $service->price }} €
                </div>

                <div class="mt-6 text-center">

                    <a href="{{ route('reservations.create', $service->id) }}"
                        class="inline-block py-3 px-4 bg-blue-500 hover:bg-blue-600 text-white rounded-md">
                        {{ __('messages.serviceShow.reserve_button') }}
                    </a>
                </div>

                <div class="mt-4 text-center">
                    <div class="grid grid-cols-2 justify-center items-center space-x-2">
                        <a href="{{ route('home') }}"
                            class="col-span-1 inline-block py-2 px-4 bg-gray-400 hover:bg-gray-500 text-white rounded-md">
                            <span class="flex max-md:hidden justify-center items-center">
                                {{ __('messages.serviceShow.back_button') }}
                            </span>
                            <span class="md:hidden flex justify-center items-center">

                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" class="w-6 h-6"
                                    aria-hidden="true" data-slot="icon">
                                    <path fill-rule="evenodd"
                                        d="M11.03 3.97a.75.75 0 0 1 0 1.06l-6.22 6.22H21a.75.75 0 0 1 0 1.5H4.81l6.22 6.22a.75.75 0 1 1-1.06 1.06l-7.5-7.5a.75.75 0 0 1 0-1.06l7.5-7.5a.75.75 0 0 1 1.06 0Z"
                                        clip-rule="evenodd" />
                                </svg>

                            </span>
                        </a>
                        <a href="{{ route('contact') }}"
                            class="inline-block py-2 px-6 bg-green-500 hover:bg-green-600 text-white font-semibold rounded-lg shadow-lg transition duration-200">
                            <span class="flex max-md:hidden justify-center items-center">
                                {{ __('messages.serviceShow.cta_button') }}
                            </span>
                            <span class="md:hidden flex justify-center items-center ">

                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white"
                                    aria-hidden="true" class="w-6 h-6" data-slot="icon">
                                    <path fill-rule="evenodd"
                                        d="M12.97 3.97a.75.75 0 0 1 1.06 0l7.5 7.5a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 1 1-1.06-1.06l6.22-6.22H3a.75.75 0 0 1 0-1.5h16.19l-6.22-6.22a.75.75 0 0 1 0-1.06Z"
                                        clip-rule="evenodd" />
                                </svg>

                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
