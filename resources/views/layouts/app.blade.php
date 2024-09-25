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

<body class="relative min-h-screen antialiased bg-gradient-to-tr from-gray-50 to-gray-100">
    @include('components.header')
    <div class="container mx-auto mb-4 px-4 flex flex-col z-20">
        <main class="master_ max-w-6xl w-full mx-auto py-6 sm:px-6 lg:px-8 ">
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

    <div class="fixed -bottom-20
    {{-- max-sm:top-[40%] sm:top-[60%] md:top-[50%] lg:top-[40%] xl:top-[10%] --}}
     w-full  
    -z-10">
        @include('components.animations.vague', [
            'height' => 600,
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
