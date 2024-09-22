@extends('layouts.app')

@section('content')
    <div class="max-w-lg mx-auto my-10 p-5 bg-white rounded shadow">
        <h1 class="text-xl font-semibold mb-4">Faire une Réservation</h1>


        @guest
            <!-- Modal pour inviter à se connecter -->
            @component('components.auth-modal')
            @endcomponent

        @endguest

        <form action="{{ route('reservations.store') }}" method="POST">
            @csrf

            @if (isset($service))
                <input type="hidden" name="service_id" value="{{ $service->id }}">
                <p class="text-lg font-medium">{{ $service->name }} - {{ number_format((float) $service->price, 2) }} €</p>
            @else
                <div class="mb-4">
                    <label for="service" class="block text-sm font-medium text-gray-700">Service</label>
                    <select name="service_id" id="service" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
                        required>
                        <option value="-1">Sélectionner votre service</option>
                        @foreach ($services as $serviceOption)
                            <option value="{{ $serviceOption->id }}"
                                {{ old('service_id') == $serviceOption->id ? 'selected' : '' }}>
                                {{ $serviceOption->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('service_id')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
            @endif

            <div class="mb-4">
                <label for="date" class="block text-sm font-medium text-gray-700">Date de réservation</label>
                <input type="datetime-local" name="reservation_date" id="date" value="{{ old('reservation_date') }}"
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                @error('reservation_date')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" class="w-full py-2 px-4 bg-blue-600 text-white rounded-md hover:bg-blue-700">
                Réserver
            </button>
        </form>
    </div>
@endsection
