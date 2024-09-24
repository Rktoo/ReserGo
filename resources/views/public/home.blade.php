@extends('layouts.app')

@section('content')
    <?php
    $servicePopulaires = ['Service de nettoyage professionnel', 'Coiffure et soins de beauté', "Organisation d'événements et de fêtes", 'Consultation et coaching personnel', "Services de réparation et d'entretien à domicile", "Et bien d'autres encore !"];
    ?>
    <div class="py-4">

        <h1 class="max-sm:text-center text-3xl font-bold mb-6">Bienvenue sur ReserGo</h1>
        <p class="max-sm:text-center text-gray-700 mb-8">Réservez vos services facilement en ligne !</p>

        <div class="max-w-3xl mx-auto text-center mb-8">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Découvrez Nos Services</h2>
            <p class="text-gray-600 mb-4">Nous offrons une gamme variée de services adaptés à vos besoins. Que vous soyez à
                la recherche d'un service de qualité pour un événement spécial ou d'une simple prestation, nous avons ce
                qu'il vous faut.</p>
            <p class="text-gray-600 mb-0"> Voici quelques-uns de nos services populaires :</p>
            <ul class="flex flex-col justify-start items-start list-disc list-inside text-gray-600 mb-4">
                @foreach ($servicePopulaires as $s)
                    <li class="">{{ $s }}</li>
                @endforeach
            </ul>
            <p class="text-gray-600">N'attendez plus pour profiter de nos offres exceptionnelles. Choisissez le service qui
                vous convient le mieux et réservez dès maintenant !</p>
        </div>

        {{-- Listing des services --}}
        @include('components.services')
    </div>
@endsection
