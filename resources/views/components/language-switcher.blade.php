<div>
    <div class="flex justify-start items-center space-x-2">
        <form action="{{ route('change.language', ['lang' => 'fr']) }}" method="GET" class="inline">
            <button type="submit"
                class="@if (session('locale') === 'fr') scale-105 @else opacity-60 @endif flex justify-center items-center hover:opacity-100 transition-all duration-200 ease-in-out">
                <img src="{{ asset('images/flags/fr.png') }}" alt="drapeau français" class="w-7 h-[1.10rem]" />
            </button>
        </form>

        <form action="{{ route('change.language', ['lang' => 'en']) }}" method="GET" class="inline">
            <button type="submit"
                class="@if (session('locale') === 'en') scale-105 @else opacity-60 @endif flex justify-center items-center hover:opacity-100 transition-all duration-200 ease-in-out">
                <img src="{{ asset('images/flags/en.png') }}" alt="drapeau anglais" class="w-7 h-7" />
            </button>
        </form>

        <form action="{{ route('change.language', ['lang' => 'mg']) }}" method="GET" class="inline">
            <button
                type="submit"class="@if (session('locale') === 'mg') scale-105 @else opacity-60 @endif flex justify-center items-center hover:opacity-100 transition-all duration-200 ease-in-out">
                <img src="{{ asset('images/flags/mg.png') }}" alt="drapeau malagasy" class="w-7 h-7" />
            </button>
        </form>
    </div>
    @if (session('success'))
        <p class="p-2 max-sm:text-xs text-sm bg-white text-green-500 text-center  rounded-tl-xl rounded-br-xl">
            {{ session('success') }}</p>
    @endif
</div>
