@extends('layouts.app')
@section('title', 'Edition réservation')
@section('content')
    <div class="mx-auto mt-8 max-w-md ">
        <div class="flex flex-col mb-6">
            <h2 class="text-2xl font-semibold ">Modifier la Réservation</h2>
            <h4 class="text-gray-700">{{ $reservation->service->name }}</h4>
        </div>
        <form action="{{ route('reservations.update', $reservation->id) }}" method="POST"
            class="bg-white shadow-md rounded-lg p-6">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="reservation_date" class="block text-gray-700 font-semibold mb-2">Nouvelle Date de
                    Réservation:</label>
                <input id="reservation_date" type="datetime-local" name="reservation_date" required
                    value="{{ $reservation->reservation_date }}"
                    class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-[#34BDFF] ">
                @error('reservation_date')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit"
                class="w-full bg-blue-500 text-white font-semibold py-2 rounded-lg hover:bg-blue-600 transition duration-200">Mettre
                à jour</button>
        </form>
        <div class="mt-4">
            <a href="{{ route('dashboard.index') }}" class="text-blue-500 hover:underline">Retour à vos réservations</a>
        </div>
    </div>
@endsection
