@extends('layouts.app')
@section('title', __('messages.dashboardIndex.title'))
@section('content')
    <div class="flex justify-between mx-auto px-4">
        <div class="flex flex-col justify-center items-center">
            <img src="{{ asset('images/icons/user.png') }}" alt="user icon" class="w-10 h-10">
            <h4 class="text-xl font-semibold">{{ Auth::user()->name }}</h4>
        </div>
        <a href="{{ route('dashboard.edit') }}" class="group mr-4 flex items-center space-x-1 text-sm max-sm:text-xs ">
            <img src="{{ asset('images/icons/setting.png') }}" alt="user setting icon"
                class="w-10 h-8 group-hover:scale-110 transition-transform duration-150 ease-in-out">
            <span class="max-sm:hidden group-hover:font-semibold">{{ __('messages.dashboardIndex.settings') }}</span>
        </a>
    </div>
    <div class="container mx-auto my-8">
        <h2 class="text-2xl font-semibold mb-4">{{ __('messages.dashboardIndex.future_reservations') }}</h2>
        <ul class="bg-white shadow-md rounded-lg p-4 mb-8">
            @forelse ($futureReservations as $reservation)
                <li class="flex justify-between items-end border-b border-gray-200 py-2">
                    <div class="flex flex-col">
                        <span class="font-medium">{{ $reservation->service->name }}</span>
                        <p class="max-lg:w-10/12 my-2 transition-all duration-200 ease-in-out">
                            {{ $reservation->service->description }}</p>
                        <div>
                            <span class="text-gray-600">{{ $reservation->reservation_date->format('d-m-Y') }}</span>
                            <span class="text-gray-600">à {{ $reservation->reservation_date->format('H:i') }}h</span>
                        </div>
                    </div>
                    <div class="flex text-xs">
                        <a href="{{ route('dashboard.reservations.show', $reservation->id) }}"
                            class="text-white bg-blue-500 hover:bg-blue-600 px-4 py-2 rounded-l-md">{{ __('messages.dashboardIndex.details') }}</a>

                        <button type="button" id="annuler_"
                            class="text-white bg-red-500 hover:bg-red-600 px-4 py-2 rounded-r-md"
                            data-id="{{ $reservation->id }}">{{ __('messages.dashboardIndex.cancel') }}</button>
                    </div>
                </li>
            @empty
                <li class="text-gray-500">{{ __('messages.dashboardIndex.no_future_reservations') }}</li>
            @endforelse
        </ul>

        <h2 class="text-2xl font-semibold mb-4">{{ __('messages.dashboardIndex.past_reservations') }}</h2>
        <ul class="bg-white/50 shadow-md rounded-lg p-4">
            @forelse ($pastReservations as $reservation)
                <li class="flex justify-between items-center border-b border-gray-200 py-2">
                    <div class="flex flex-col">
                        <span class="font-medium">{{ $reservation->service->name }}</span>
                        <span class="text-gray-600">{{ $reservation->reservation_date }}</span>
                    </div>
                    <div>
                        <a href="{{ route('dashboard.reservations.show', $reservation->id) }}"
                            class="text-white bg-blue-500 hover:bg-blue-600 px-4 py-2 rounded-l-md">{{ __('messages.dashboardIndex.details') }}</a>
                    </div>
                </li>
            @empty
                <li class="text-gray-500">{{ __('messages.dashboardIndex.no_past_reservations') }}</li>
            @endforelse
        </ul>
    </div>
    @include('components.confirmation-modal', [
        'title' => __('messages.dashboardIndex.confirm_cancel_title'),
        'message' => __('messages.dashboardIndex.confirm_cancel_message'),
    ])
@endsection

@push('scripts')
    @vite('resources/js/dashboard.js')
@endpush
