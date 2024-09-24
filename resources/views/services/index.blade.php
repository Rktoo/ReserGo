@extends('layouts.app')

@section('title', 'Services')
@section('content')
    <div class="">
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mx-2">
            <h1 class="text-2xl max-sm:text-xl mt-2 font-semibold">Services</h1>
            @can('admin')
                <a href="{{ route('services.create') }}"
                    class="inline-block mt-2 py-2 px-4 max-sm:text-sm text-nowrap bg-blue-600 text-white rounded-md hover:bg-blue-700">Ajouter
                    un Service</a>
            @endcan
        </div>
        <div class="mt-4">
            @foreach ($services as $service)
                <div class="service-card flex justify-between items-end p-4 bg-white rounded shadow-md mb-4 opacity-0">
                    <div>
                        <h3 class="text-lg font-medium">{{ $service->name }}</h3>
                        <p>{{ $service->description }}</p>
                    </div>
                    <div class="flex text-xs ml-4">
                        <a href="{{ route('services.edit', $service->id) }}"
                            class="text-white bg-blue-500 hover:bg-blue-600 px-4 py-2 rounded-l-md">Modifier</a>

                        <button type="button" id="annuler_"
                            class="text-white bg-red-500 hover:bg-red-600 px-4 py-2 rounded-r-md"
                            data-id="{{ $service->id }}">Supprimer</button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    @include('components.confirmation-modal', [
        'title' => "Confirmer l'annulation",
        'message' => 'Êtes-vous sûr de vouloir annuler cette réservation ?',
    ])
@endsection

@push('scripts')
    <script src="{{ asset('js/dashboard.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    @vite('resources/js/animation.js')
@endpush
