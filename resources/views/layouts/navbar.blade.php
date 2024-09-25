<nav class="px-2  ">
    <div class="bg-white border rounded-tl-xl rounded-br-xl p-4 container mx-auto flex justify-between overflow-hidden">
        <div class="">
            <a href="{{ route('home') }}"
                class=" hover:bg-gray-200 text-slate-800 font-semibold py-4 px-4 max-sm:py-3 max-sm:px-2 transition-all duration-200 ease-in-out rounded-tl-md">Accueil</a>
            @can('user')
                <a href="{{ route('dashboard.index') }}"
                    class="hover:bg-gray-200 text-slate-800 font-semibold py-4 px-4 max-sm:py-3 max-sm:px-2 transition-all duration-200 ease-in-out ">Vos
                    réservations</a>
            @endcan
            @can('admin')
                <a href="{{ route('services.index') }}"
                    class="hover:bg-gray-200 text-slate-800 font-semibold py-4 px-4 max-sm:py-3 max-sm:px-2 transition-all duration-200 ease-in-out ">Services</a>
                <a href="{{ route('reservations.index') }}"
                    class="hover:bg-gray-200 text-slate-800 font-semibold py-4 px-4 max-sm:py-3 max-sm:px-2 transition-all duration-200 ease-in-out  ">Réservations</a>
            @endcan
        </div>
        <div class="">
            <a href="{{ route('about') }}"
                class="hover:bg-gray-200 text-slate-800 font-semibold py-4 px-4 max-sm:py-3 max-sm:px-2 transition-all duration-200 ease-in-out  @can('admin') max-[550px]:hidden @endcan">À
                propos</a>
            <a href="{{ route('contact') }}"
                class="hover:bg-gray-200 text-slate-800 font-semibold py-4 px-4 max-sm:py-3 max-sm:px-2 transition-all duration-200 ease-in-out rounded-br-md">Contact</a>
        </div>
    </div>
</nav>
