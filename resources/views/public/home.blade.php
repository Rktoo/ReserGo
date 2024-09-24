@extends('layouts.app')

@section('content')
    <div class="py-4">

        <h1 class="max-sm:text-center text-3xl font-bold mb-6">Bienvenue sur ReserGo</h1>
        <p class="max-sm:text-center text-gray-700 mb-8">Réservez vos services facilement en ligne !</p>

        <h2 class="text-2xl font-semibold mb-4">Nos Services</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($services as $service)
                <div class="relative group flex flex-col justify-between p-4 bg-white shadow rounded-lg overflow-hidden">
                    <div>
                        <h3 class="text-lg font-bold z-20">{{ $service->name }}</h3>
                        <p class="text-gray-600 z-20">{{ $service->description }}</p>
                        <div class="flex flex-col justify-end z-20">
                            <p class="text-blue-600 font-semibold mt-2">{{ number_format((float) $service->price, 2) }} €</p>
                            <a href="{{ route('reservations.create', $service->id) }}"
                                class="text-blue-500 hover:underline underline-offset-2 transition-all duration-200 ease-in-out mt-2 px-2 inline-block">Réserver
                                ce service</a>

                        </div>
                    </div>
                    @if ($service->image_url)
                        <a href="{{ route('reservations.create', $service->id) }}"
                            class="text-blue-500 hover:underline underline-offset-2 transition-all duration-200 ease-in-out mt-2 px-2 inline-block">
                            <img src="{{ asset('storage/' . $service->image_url) }}" alt="Image du service"
                                class="hidden group-hover:flex mt-2 max-w-[350px] max-h-[350px] rounded" loading="lazy" />
                        </a>
                        <img src="{{ asset('storage/' . $service->image_url) }}" alt="Image du service"
                            class="flex group-hover:hidden absolute top-0 left-1/3 mt-2 max-w-[350px] max-h-[350px] opacity-25 rounded z-10"
                            loading="lazy" />
                    @endif
                </div>
            @endforeach
        </div>
    </div>
@endsection
