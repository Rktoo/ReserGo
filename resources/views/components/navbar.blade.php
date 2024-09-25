<nav class="px-2">
    <div
        class="bg-white border rounded-tl-xl rounded-br-xl p-4 max-sm:p-2 container mx-auto flex justify-between items-center overflow-hidden">
        <div class="my-[0.10rem] py-1">
            <a href="{{ route('home') }}"
                class="@if (Route::currentRouteName() === 'home') bg-gray-200 animate-pulse @endif hover:bg-gray-200 text-slate-800 font-semibold py-4 px-4 max-sm:py-3 max-sm:px-1 transition-all duration-200 ease-in-out rounded-tl-md">
                @lang('messages.navbar.home')
            </a>
            @can('user')
                <a href="{{ route('dashboard.index') }}"
                    class="@if (Route::currentRouteName() === 'dashboard.index') bg-gray-200 animate-pulse @endif  hover:bg-gray-200 text-slate-800 font-semibold py-4 px-4 max-sm:py-3 max-sm:px-1 transition-all duration-200 ease-in-out">
                    @lang('messages.navbar.dashboard')
                </a>
            @endcan
            @can('admin')
                <a href="{{ route('services.index') }}"
                    class="@if (Route::currentRouteName() === 'services.index') bg-gray-200 animate-pulse @endif hover:bg-gray-200 text-slate-800 font-semibold py-4 px-4 max-sm:py-3 max-sm:px-1 transition-all duration-200 ease-in-out">
                    @lang('messages.navbar.services')
                </a>
                <a href="{{ route('reservations.index') }}"
                    class="@if (Route::currentRouteName() === 'reservations.index') bg-gray-200 animate-pulse @endif hover:bg-gray-200 text-slate-800 font-semibold py-4 px-4 max-sm:py-3 max-sm:px-1 transition-all duration-200 ease-in-out">
                    @lang('messages.navbar.reservations')
                </a>
            @endcan
        </div>
        <div>
            <a href="{{ route('about') }}"
                class="@if (Route::currentRouteName() === 'about') bg-gray-200 animate-pulse @endif hover:bg-gray-200 text-slate-800 font-semibold py-4 px-4 max-sm:py-3 max-sm:px-1 transition-all duration-200 ease-in-out @can('admin') max-[550px]:hidden @endcan">
                @lang('messages.navbar.about')
            </a>
            <a href="{{ route('contact') }}"
                class="@if (Route::currentRouteName() === 'contact') bg-gray-200 animate-pulse @endif hover:bg-gray-200 text-slate-800 font-semibold py-4 px-4 max-sm:py-3 max-sm:px-1 transition-all duration-200 ease-in-out rounded-br-md">
                @lang('messages.navbar.contact')
            </a>
        </div>
    </div>
</nav>
