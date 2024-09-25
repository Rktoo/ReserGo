<div>
    <div>
        <form action="{{ route('change.language', ['lang' => 'fr']) }}" method="GET" class="inline">
            <button type="submit" @if (session('locale') === 'fr') class="font-bold" @endif>FR</button>
        </form>

        <form action="{{ route('change.language', ['lang' => 'en']) }}" method="GET" class="inline">
            <button type="submit" @if (session('locale') === 'en') class="font-bold" @endif>EN</button>
        </form>

        <form action="{{ route('change.language', ['lang' => 'mg']) }}" method="GET" class="inline">
            <button type="submit" class="@if (session('locale') === 'mg') font-bold @endif">MG</button>
        </form>
    </div>
    @if (session('success'))
        <p class="p-2 bg-white text-green-500 text-center  rounded-tl-xl rounded-br-xl">{{ session('success') }}</p>
    @endif
</div>
