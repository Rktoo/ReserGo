@extends('layouts.app')

@section('content')
    <div class="container mx-auto mt-8">
        <h2 class="text-2xl font-semibold mb-4">Réservations futures</h2>
        <ul class="bg-white shadow-md rounded-lg p-4 mb-8">
            @forelse ($futureReservations as $reservation)
                <li class="flex justify-between items-center border-b border-gray-200 py-2">
                    <div class="flex flex-col">
                        <span class="font-medium">{{ $reservation->service->name }}</span>
                        <p class="max-lg:w-10/12 my-2 transition-all duration-200 ease-in-out">
                            {{ $reservation->service->description }}</p>
                        <div>
                            <span class="text-gray-600">{{ $reservation->reservation_date->format('d-m-Y') }}</span>
                            <span class="text-gray-600">à {{ $reservation->reservation_date->format('H:i') }}h</span>
                        </div>
                    </div>
                    <div class="flex items-center space-x-2">
                        <a href="{{ route('dashboard.reservations.show', $reservation->id) }}"
                            class="text-blue-500 hover:underline">Détails</a>
                        <form action="{{ route('dashboard.reservations.destroy', $reservation->id) }}" method="POST"
                            style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:text-red-700">Annuler</button>
                        </form>
                    </div>
                </li>
            @empty
                <li class="text-gray-500">Aucune réservation future.</li>
            @endforelse
        </ul>

        <h2 class="text-2xl font-semibold mb-4">Réservations passées</h2>
        <ul class="bg-white/50 shadow-md rounded-lg p-4">
            @forelse ($pastReservations as $reservation)
                <li class="flex justify-between items-center border-b border-gray-200 py-2">
                    <div class="flex flex-col">
                        <span class="font-medium">{{ $reservation->service->name }}</span>
                        <span class="text-gray-600">{{ $reservation->reservation_date }}</span>
                    </div>
                    <div>
                        <a href="{{ route('dashboard.reservations.show', $reservation->id) }}"
                            class="text-blue-500 hover:underline">Détails</a>
                    </div>
                </li>
            @empty
                <li class="text-gray-500">Aucune réservation passée.</li>
            @endforelse
        </ul>
    </div>
@endsection
