<!DOCTYPE html>
<html lang="{{ session('locale') ?? 'en' }}">

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

<body class="relative flex flex-col min-h-screen antialiased bg-gradient-to-tr from-gray-50 to-gray-100">
    @include('components.header')
    <div class="container mx-auto mb-4 px-4 flex-1 z-20">
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

    <div
        class="fixed max-[500px]:-bottom-[4.5rem] max-md:-bottom-[8rem] max-lg:-bottom-[12rem]
         max-xl:-bottom-[16rem]  
         max-2xl:-bottom-[20rem]  
        2xl:-bottom-[26rem]

        -bottom-40 w-full -z-10">
        @include('components.animations.vague', [
            'height' => 800,
            'fillColor' => '#34BDFF',
            'startY' => 250,
            'controlY1' => 450,
            'controlY2' => 100,
            'controlY3' => 350,
            'controlY4' => 150,
            'endY' => 550,
        ])
    </div>

    @include('components.footer')

    @vite('resources/js/errorHandling.js')
    @stack('scripts')
</body>

</html>
