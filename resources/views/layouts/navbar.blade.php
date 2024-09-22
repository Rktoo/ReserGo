<nav class="px-2">
    <div class="bg-blue-600 p-4 container mx-auto flex justify-between">
        <div class=""> 
            <a href="{{ route('services.index') }}" class="bg-blue-600 hover:bg-blue-300 text-white font-semibold p-4">Services</a>
            <a href="{{ route('reservations.index') }}" class="bg-blue-600 hover:bg-blue-300 text-white font-semibold p-4">Réservations</a>
        </div>
        <div>
            <a href="{{ route('about') }}" class="bg-blue-600 hover:bg-blue-300 text-white font-semibold p-4">À propos</a>
            <a href="{{ route('contact') }}" class="bg-blue-600 hover:bg-blue-300 text-white font-semibold p-4">Contact</a>
        </div>
    </div>
</nav>
