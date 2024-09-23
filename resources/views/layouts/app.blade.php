<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ReserGo Application de Réservation</title>
    @vite('resources/css/app.css')
</head>

<body class="relative bg-gray-100">
    <header
        class=" flex justify-between items-center gap-2 max-sm:text-xs bg-gradient-to-tr from-blue-400 to-blue-700 text-white ">
        <div class="max-w-6xl w-full mx-auto py-4 px-4 flex flex-col gap-2">
            <div class="grid  grid-cols-3 justify-between">
                <div class="col-span-1"></div>
                <a href="/" class="ml-4 col-span-1">
                    <h1 class="text-3xl max-sm:text-lg text-center font-semibold mr-4">ReserGo </h1>
                </a>
                <ul class="flex justify-end items-center space-x-0 max-sm:space-x-2 mr-2">
                    @auth
                        <li><a href="{{ route('dashboard.index') }}" class="px-2 max-sm:px-0">Dashboard</a></li>
                        <li>
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <button type="submit" class="px-2 max-sm:px-0">Logout</button>

                            </form>
                        </li>
                    @endauth
                    @guest
                        <li><a href="{{ route('login') }}" class="px-2">Login</a></li>
                        <li><a href="{{ route('register') }}" class="px-2">Register</a></li>
                    @endguest
                </ul>
            </div>
            @include('layouts.navbar')
        </div>
    </header>
    <div class="container mx-auto mb-4 px-4 flex flex-col">
        <main class="max-w-6xl w-full mx-auto py-6 sm:px-6 lg:px-8">
            @if ($errors->any())
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
        class="fixed bottom-0 left-0 w-full py-2 text-center border-t-2 border-white bg-gradient-to-tr from-blue-400 to-blue-700 text-white z-30">
        <p class="text-gray-50">&copy; {{ date('Y') }} ReserGo. Tous droits réservés.</p>
    </footer>

    <script src="{{ asset('js/errorHandling.js') }}"></script>
    @stack('scripts')
</body>

</html>
