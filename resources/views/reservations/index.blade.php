@extends('layouts.app')
@section('title', 'Réservations')
@section('content')
    <div class="">
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mx-2">
            <h1 class="text-2xl max-sm:text-xl mt-2 font-semibold">Vos Réservations</h1>
            <a href="{{ route('reservations.create') }}"
                class="inline-block mt-2 py-2 px-4 max-sm:text-sm text-nowrap bg-blue-600 text-white rounded-md hover:bg-blue-700">Créer
                une réservation</a>
        </div>
        <div class="mt-4 max-sm:text-sm">
            @foreach ($reservations as $reservation)
                <div class="reservation-card group flex justify-between p-4 bg-white rounded shadow-md mb-4">
                    <div>
                        <h3 class="text-lg font-medium">{{ $reservation->service->name }}</h3>
                        <p class="max-lg:w-10/12 hidden group-hover:flex  my-2 transition-all duration-200 ease-in-out">
                            {{ $reservation->service->description }}</p>
                        <p>Date : {{ $reservation->reservation_date->format('d-m-Y') }}</p>
                        <p>Heure : {{ $reservation->reservation_date->format('H:i') }}</p>
                    </div>
                    <div class="flex flex-row max-sm:flex-col justify-start max-sm:justify-center items-center gap-1 ">
                        <p class="text-sm font-thin">Réservé par </p>
                        <p class="text-blue-400">{{ $reservation->user->name }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    @vite('resources/js/animation.js')
@endpush
