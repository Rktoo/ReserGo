@extends('layouts.app')

@section('content')
    <div class="container mx-auto my-8">
        <h2 class="text-2xl font-semibold mb-4">Réservations futures</h2>
        <ul class="bg-white shadow-md rounded-lg p-4 mb-8">
            @forelse ($futureReservations as $reservation)
                <li class="flex justify-between items-end border-b border-gray-200 py-2">
                    <div class="flex flex-col">
                        <span class="font-medium">{{ $reservation->service->name }}</span>
                        <p class="max-lg:w-10/12 my-2 transition-all duration-200 ease-in-out">
                            {{ $reservation->service->description }}</p>
                        <div>
                            <span class="text-gray-600">{{ $reservation->reservation_date->format('d-m-Y') }}</span>
                            <span class="text-gray-600">à {{ $reservation->reservation_date->format('H:i') }}h</span>
                        </div>
                    </div>
                    <div class="flex text-xs">
                        <a href="{{ route('dashboard.reservations.show', $reservation->id) }}"
                            class="text-white bg-blue-500 hover:bg-blue-600 px-4 py-2 rounded-l-md">Détails</a>

                        <button type="button" id="annuler_"
                            class="text-white bg-red-500 hover:bg-red-600 px-4 py-2 rounded-r-md"
                            data-id="{{ $reservation->id }}">Annuler</button>
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

    <div id="confirmation-modal" class="fixed inset-0 bg-gray-600 bg-opacity-75 items-center justify-center hidden">
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h2 class="text-xl font-bold mb-4">Confirmer l'annulation</h2>
            <p>Êtes-vous sûr de vouloir annuler cette réservation ?</p>
            <div class="mt-6 flex justify-end space-x-1">
                <button id="cancel-btn" class="px-4 py-2 bg-gray-400 text-white rounded-md hover:bg-gray-500">Non</button>
                <form method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button id="confirm-delete-btn"
                        class="px-4 py-2 bg-red-500 text-white rounded-md hover:bg-red-600">Oui</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('js/dashboard.js') }}"></script>
@endpush
