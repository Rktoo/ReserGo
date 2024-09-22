@extends('layouts.app')

@section('content')
<div class="max-w-lg mx-auto my-10 p-5 bg-white rounded shadow">
    <h1 class="text-xl font-semibold mb-4">Faire une Réservation</h1>
    <form action="{{ route('reservations.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="service" class="block text-sm font-medium text-gray-700">Service</label>
            <select name="service_id" id="service" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                @foreach($services as $service)
                    <option value="{{ $service->id }}">{{ $service->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-4">
            <label for="date" class="block text-sm font-medium text-gray-700">Date de réservation</label>
            <input type="datetime-local" name="reservation_date" id="date" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
        </div>
        <button type="submit" class="w-full py-2 px-4 bg-blue-600 text-white rounded-md hover:bg-blue-700">
            Réserver
        </button>
    </form>
</div>
@endsection
