<nav class="px-2  ">
    <div class="bg-blue-600 border p-4 container mx-auto flex justify-between">
        <div class="">
            <a href="{{ route('home') }}"
                class="bg-blue-600 hover:bg-blue-300 text-white font-semibold py-4 px-4 max-sm:py-4 max-sm:px-2">Accueil</a>
            <a href="{{ route('services.index') }}"
                class="bg-blue-600 hover:bg-blue-300 text-white font-semibold py-4 px-4 max-sm:py-4 max-sm:px-2">Services</a>
            <a href="{{ route('reservations.index') }}"
                class="bg-blue-600 hover:bg-blue-300 text-white font-semibold py-4 px-4 max-sm:py-4 max-sm:px-2 ">Réservations</a>
        </div>
        <div class="">
            <a href="{{ route('about') }}"
                class="bg-blue-600 hover:bg-blue-300 text-white font-semibold py-4 px-4 max-sm:py-4 max-sm:px-2 max-[550px]:hidden">À
                propos</a>
            <a href="{{ route('contact') }}"
                class="bg-blue-600 hover:bg-blue-300 text-white font-semibold py-4 px-4 max-sm:py-4 max-sm:px-2">Contact</a>
        </div>
    </div>
</nav>
