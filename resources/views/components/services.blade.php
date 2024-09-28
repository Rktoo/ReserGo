<h2 class="max-sm:text-center text-2xl max-sm:text-xl font-semibold mb-4">
    {{ __('messages.serviceList.popular_services') }}</h2>
<div class="grid grid-cols-1 md:grid-cols-2  gap-6 ">
    @foreach ($services as $service)
        <div
            class="service-card relative group flex flex-col justify-between items-stretch p-4 bg-white shadow rounded-lg overflow-hidden">
            <div class="w-full h-full flex flex-col justify-items-end items-start ">
                <div>
                    <h3 class="text-lg max-sm:text-md font-bold z-20">{{ $service->name }}</h3>
                    <p class="text-gray-600 z-20">{{ $service->description }}</p>
                </div>
                <div class="w-full h-full flex flex-col justify-end items-start gap-2 z-20">
                    <p class="max-sm:text-sm text-[#34BDFF] font-semibold mt-2">
                        {{ number_format((float) $service->price, 2) }} €</p>
                    <div class="w-full grid grid-cols-2 gap-1">
                        <a href="{{ route('reservations.create', $service->id) }}"
                            class="col-span-1 inline-block py-2 px-4 bg-green-400 hover:bg-green-500 text-white rounded-md">
                            <span class="flex max-lg:hidden justify-center items-center">
                                {{ __('messages.serviceList.book_service') }}
                            </span>
                            <span class="flex lg:hidden justify-center items-center">

                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="white"
                                    class="w-6 h-6" aria-hidden="true" data-slot="icon">
                                    <path
                                        d="M1 1.75A.75.75 0 0 1 1.75 1h1.628a1.75 1.75 0 0 1 1.734 1.51L5.18 3a65.25 65.25 0 0 1 13.36 1.412.75.75 0 0 1 .58.875 48.645 48.645 0 0 1-1.618 6.2.75.75 0 0 1-.712.513H6a2.503 2.503 0 0 0-2.292 1.5H17.25a.75.75 0 0 1 0 1.5H2.76a.75.75 0 0 1-.748-.807 4.002 4.002 0 0 1 2.716-3.486L3.626 2.716a.25.25 0 0 0-.248-.216H1.75A.75.75 0 0 1 1 1.75ZM6 17.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0ZM15.5 19a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3Z" />
                                </svg>


                            </span>
                        </a>
                        <a href="{{ route('services.show', $service->id) }}"
                            class="col-span-1 inline-block py-2 px-4 bg-[#34BDFF] hover:bg-[#0DB0FF] text-white rounded-md">
                            <span class="flex max-lg:hidden justify-center items-center">
                                {{ __('messages.serviceList.see_service') }}
                            </span>
                            <span class="flex lg:hidden justify-center items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white"
                                    aria-hidden="true" class="w-6 h-6" data-slot="icon">
                                    <path fill-rule="evenodd"
                                        d="M12.97 3.97a.75.75 0 0 1 1.06 0l7.5 7.5a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 1 1-1.06-1.06l6.22-6.22H3a.75.75 0 0 1 0-1.5h16.19l-6.22-6.22a.75.75 0 0 1 0-1.06Z"
                                        clip-rule="evenodd" />
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            @if ($service->image_url)
                <a href="{{ route('reservations.create', $service->id) }}"
                    class="text-[#34BDFF] hover:underline underline-offset-2 transition-all duration-200 ease-in-out mt-2 px-2 inline-block">
                    {{-- <img src="{{ asset('storage' . $service->image_url) }}" alt="Service image"
                        class="hidden group-hover:flex mt-2 max-w-[350px] max-h-[350px] rounded" /> --}}
                </a>
                {{-- <img src="{{ asset('storage/' . $service->image_url) }}" alt="Service image"
                    class="flex group-hover:hidden absolute top-0 left-1/3 mt-2 max-w-[350px] max-h-[350px] opacity-25 rounded z-10"
                    loading="lazy" /> --}}
            @endif
        </div>
    @endforeach
</div>
