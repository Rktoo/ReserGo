<nav class="bg-blue-600 p-4">
    <div class="container mx-auto flex justify-between">
        <div>
            <a href="{{ route('services.index') }}" class="text-white font-semibold px-4">Services</a>
            <a href="{{ route('reservations.index') }}" class="text-white font-semibold px-4">Réservations</a>
        </div>
        <div>
            <a href="{{ route('about') }}" class="text-white font-semibold px-4">À propos</a>
            <a href="{{ route('contact') }}" class="text-white font-semibold px-4">Contact</a>
        </div>
    </div>
</nav>
