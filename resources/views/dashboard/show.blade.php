@extends('layouts.app')

@section('content')
    <div class="mx-auto mt-8">
        <h2 class="text-2xl font-semibold mb-4">Détails de la réservation</h2>
        <div class="bg-white shadow-md rounded-lg p-6">
            <p class="mb-2"><span class="font-semibold">Service:</span> {{ $reservation->service->name }}</p>
            <p class="mb-2"><span class="font-semibold">Date de la réservation:</span> {{ $reservation->reservation_date }}
            </p>
            <p class="mb-2"><span class="font-semibold">Nom du client:</span> {{ $reservation->user->name }}</p>
            <p class="mb-2"><span class="font-semibold">Email du client:</span> {{ $reservation->user->email }}</p>
            <a href="{{ route('reservations.edit', $reservation->id) }}" class="text-blue-500 hover:underline">Modifier</a>
        </div>
        <div class="mt-6">
            <a href="{{ route('dashboard.index', $reservation->id) }}" class="text-blue-500 hover:underline">Retour à vos
                réservations</a>
        </div>
    </div>
@endsection
