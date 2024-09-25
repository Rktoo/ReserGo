<header
    class=" flex justify-between items-center gap-2 max-sm:text-xs bg-gradient-to-tr from-[#34BDFF] to-[#2EB9FF] text-white z-20">
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
                    <li class="py-1 max-sm:px-1  rounded-tl-xl bg-gray-50 hover:bg-white text-gray-800 cursor-pointer">
                        <a href="{{ route('dashboard.index') }}" class="px-2 max-sm:px-0">Dashboard</a>
                    </li>
                    <li>
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <button type="submit"
                                class="p-1 max-sm:px-1 rounded-br-xl bg-red-400 hover:bg-red-500 text-white cursor-pointer">Logout</button>

                        </form>
                    </li>
                @endauth
                @guest
                    <li class="py-1 max-sm:px-1  rounded-tl-xl bg-white text-gray-800 cursor-pointer"><a
                            href="{{ route('login') }}" class="px-2">Login</a>
                    </li>
                    <li class="py-1 max-sm:px-1  rounded-br-xl bg-green-400 text-white cursor-pointer"><a
                            href="{{ route('register') }}" class="px-2">Register</a>
                    </li>
                @endguest
            </ul>
        </div>
        @include('components.navbar')
    </div>
</header>
