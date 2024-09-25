@extends('layouts.app')
@section('title', __('messages.reservationIndex.title'))
@section('content')
    <div class="">
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mx-2">
            <h1 class="text-2xl max-sm:text-xl mt-2 font-semibold">@lang('messages.reservationIndex.heading')</h1>
            <a href="{{ route('reservations.create') }}"
                class="inline-block mt-2 py-2 px-4 max-sm:text-sm text-nowrap bg-[#34BDFF] hover:bg-[#0DB0FF] text-white rounded-md ">
                @lang('messages.reservationIndex.create')</a>
        </div>
        <div class="mt-4 max-sm:text-sm">
            @foreach ($reservations as $reservation)
                <div class="reservation-card group flex justify-between p-4 bg-white rounded shadow-md mb-4 opacity-0">
                    <div>
                        <h3 class="text-lg font-medium">{{ $reservation->service->name }}</h3>
                        <p class="max-lg:w-10/12 hidden group-hover:flex my-2 transition-all duration-200 ease-in-out">
                            {{ $reservation->service->description }}</p>
                        <p>@lang('messages.reservationIndex.date') : {{ $reservation->reservation_date->format('d-m-Y') }}</p>
                        <p>@lang('messages.reservationIndex.time') : {{ $reservation->reservation_date->format('H:i') }}</p>
                    </div>
                    <div
                        class="flex flex-row max-sm:flex-col justify-start max-sm:justify-end max-sm:items-end items-center gap-1">
                        <p class="text-sm font-thin">@lang('messages.reservationIndex.reserved_by') </p>
                        <p class="text-nowrap text-blue-400 ">{{ $reservation->user->name }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

@push('scripts')
    @vite('resources/js/animation.js')
@endpush
