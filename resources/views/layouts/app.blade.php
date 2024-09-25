<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @hasSection('title')
            @yield('title') - ReserGo
        @else
            ReserGo Application de Réservation
        @endif
    </title>
    @vite('resources/css/app.css')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
</head>

<body class="relative min-h-screen antialiased bg-gradient-to-tr from-gray-50 to-gray-100">
    <header
        class=" flex justify-between items-center gap-2 max-sm:text-xs bg-gradient-to-tr from-[#34BDFF] to-[#2EB9FF] text-white ">
        <div class="max-w-6xl w-full mx-auto py-4 px-4 flex flex-col gap-2">
            <div class="grid grid-cols-3 justify-between items-center">
                <div class="col-span-1">
                    @include('components.language-switcher')
                </div>
                <a href="/" class="ml-4 col-span-1">
                    <h1 class="text-3xl max-sm:text-lg text-center font-semibold mr-4">ReserGo </h1>
                </a>
                <ul class="flex justify-end items-center space-x-0  mr-2">
                    @auth
                        <li class="py-1 rounded-tl-xl bg-gray-50 hover:bg-white text-gray-800 cursor-pointer"><a
                                href="{{ route('dashboard.index') }}" class="px-2 max-sm:px-0">Dashboard</a></li>
                        <li>
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <button type="submit"
                                    class="p-1 rounded-br-xl bg-red-400 hover:bg-red-500 text-white cursor-pointer">Logout</button>

                            </form>
                        </li>
                    @endauth
                    @guest
                        <li class="py-1 rounded-tl-xl bg-white text-gray-800 cursor-pointer"><a href="{{ route('login') }}"
                                class="px-2">Login</a>
                        </li>
                        <li class="py-1 rounded-br-xl bg-green-400 text-white cursor-pointer"><a
                                href="{{ route('register') }}" class="px-2">Register</a>
                        </li>
                    @endguest
                </ul>
            </div>
            @include('layouts.navbar')
        </div>
    </header>
    <div class="container mx-auto mb-4 px-4 flex flex-col">
        <main class="master_ max-w-6xl w-full mx-auto py-6 sm:px-6 lg:px-8">
            @if ($errors->any() && url()->current() === '/')
                <div class="mb-4 text-red-500">
                    <ul id="errors_">
                        @foreach ($errors->all() as $error)
                            <li class="text-center">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @yield('content')
        </main>
    </div>
    <footer
        class="absolute -bottom-4 left-0 py-2 w-full bg-gradient-to-tr from-[#34BDFF] to-[#2EB9FF] text-white border-t-2 border-white z-30">
        <div class="max-w-6xl mx-auto w-full  sm:px-6 lg:px-8 text-center  ">
            <p class=" text-start text-gray-50">&copy; {{ date('Y') }} ReserGo. Tous droits réservés.</p>
        </div>
    </footer>

    @vite('resources/js/errorHandling.js')
    @stack('scripts')
</body>

</html>
