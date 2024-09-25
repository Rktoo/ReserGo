<h2 class="max-sm:text-center text-2xl max-sm:text-xl font-semibold mb-4">
    {{ __('messages.serviceList.popular_services') }}</h2>
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 ">
    @foreach ($services as $service)
        <div
            class="service-card relative group flex flex-col justify-between p-4 bg-white shadow rounded-lg overflow-hidden">
            <div class="flex flex-col justify-items-end items-start">
                <div>
                    <h3 class="text-lg max-sm:text-md font-bold z-20">{{ $service->name }}</h3>
                    <p class="text-gray-600 z-20">{{ $service->description }}</p>
                </div>
                <div class="flex flex-col justify-end z-20">
                    <p class="max-sm:text-sm text-blue-600 font-semibold mt-2">
                        {{ number_format((float) $service->price, 2) }} €</p>
                    <a href="{{ route('reservations.create', $service->id) }}"
                        class="text-blue-500 hover:underline underline-offset-2 transition-all duration-200 ease-in-out mt-2 px-2 inline-block">
                        {{ __('messages.serviceList.book_service') }}
                    </a>
                </div>
            </div>
            @if ($service->image_url)
                <a href="{{ route('reservations.create', $service->id) }}"
                    class="text-blue-500 hover:underline underline-offset-2 transition-all duration-200 ease-in-out mt-2 px-2 inline-block">
                    {{-- <img src="{{ asset('storage' . $service->image_url) }}" alt="Service image"
                        class="hidden group-hover:flex mt-2 max-w-[350px] max-h-[350px] rounded" loading="lazy" /> --}}
                </a>
                {{-- <img src="{{ asset('storage/' . $service->image_url) }}" alt="Service image"
                    class="flex group-hover:hidden absolute top-0 left-1/3 mt-2 max-w-[350px] max-h-[350px] opacity-25 rounded z-10"
                    loading="lazy" /> --}}
            @endif
        </div>
    @endforeach
</div>
