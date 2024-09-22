@extends('layouts.app')

@section('content')
    <div class="py-4">
        <h1 class="text-3xl font-bold mb-6">Bienvenue sur ReserGo</h1>
        <p class="text-gray-700 mb-8">Réservez vos services facilement en ligne !</p>

        <h2 class="text-2xl font-semibold mb-4">Nos Services</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($services as $service)
                <div class="flex flex-col justify-between p-4 bg-white shadow rounded-lg">
                    <h3 class="text-lg font-bold">{{ $service->name }}</h3>
                    <p class="text-gray-600">{{ $service->description }}</p>
                    <div class="flex flex-col justify-end">
                        <p class="text-blue-600 font-semibold mt-2">{{ number_format((float) $service->price, 2) }} €</p>
                        <a href="{{ route('reservations.create', $service->id) }}"
                            class="text-blue-500 mt-2 inline-block">Réserver ce service</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
