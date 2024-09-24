@extends('layouts.app')
@section('title', 'Accueil')
@section('content')
    <?php
    $servicePopulaires = ['Service de nettoyage professionnel', 'Coiffure et soins de beauté', "Organisation d'événements et de fêtes", 'Consultation et coaching personnel', "Services de réparation et d'entretien à domicile", "Et bien d'autres encore !"];
    ?>
    <div class="my-2 py-4 ">
        <h1 class="max-sm:text-center text-3xl font-bold mb-6">Bienvenue sur ReserGo</h1>
        <p class="max-sm:text-center text-gray-700 mb-6">Réservez vos services facilement en ligne !</p>

        <div class="max-w-3xl mx-auto text-center mb-8">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Découvrez Nos Services</h2>
            <p class="max-sm:text-start text-gray-600 mb-4">Nous offrons une gamme variée de services adaptés à vos besoins.
                Que vous soyez à
                la recherche d'un service de qualité pour un événement spécial ou d'une simple prestation, nous avons ce
                qu'il vous faut.</p>
            <p class="text-sm text-gray-600 max-sm:mb-2"> Voici quelques-uns de nos services populaires :</p>
            <ul class="flex flex-col justify-start items-start flex-wrap text-wrap list-disc list-inside text-gray-600 mb-4">
                @foreach ($servicePopulaires as $s)
                    <li class="service-List text-start text-wrap">{{ $s }}</li>
                @endforeach
            </ul>
            <p class="text-gray-600">N'attendez plus pour profiter de nos offres exceptionnelles. Choisissez le service qui
                vous convient le mieux et réservez dès maintenant !</p>
        </div>

        {{-- Listing des services --}}
        @include('components.services')
    </div>

    <div class="my-4">
        {{ $services->links() }}
    </div>
@endsection

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    @vite('resources/js/animation.js')
@endpush
