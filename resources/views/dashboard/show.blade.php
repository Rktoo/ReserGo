@extends('layouts.app')
@section('title', $reservation->service->name)
@section('content')
    <div class="mx-auto mt-8">
        <h2 class="text-2xl font-semibold mb-4">{{ __('messages.dashboardShow.title') }}</h2>
        <div class="bg-white shadow-md rounded-lg p-6">
            <p class="mb-2"><span class="font-semibold">{{ __('messages.dashboardShow.service') }}</span>
                {{ $reservation->service->name }}</p>
            <p class="mb-2"><span class="font-semibold">{{ __('messages.dashboardShow.reservation_date') }}</span>
                {{ $reservation->reservation_date }}</p>
            <p class="mb-2"><span class="font-semibold">{{ __('messages.dashboardShow.client_name') }}</span>
                {{ $reservation->user->name }}</p>
            <p class="mb-2"><span class="font-semibold">{{ __('messages.dashboardShow.client_email') }}</span>
                {{ $reservation->user->email }}</p>
            <a href="{{ route('reservations.edit', $reservation->id) }}"
                class="text-white bg-blue-500 hover:bg-blue-600 px-4 py-2 rounded-md">{{ __('messages.dashboardShow.edit') }}</a>
        </div>
        <div class="mt-6">
            <a href="{{ route('dashboard.index', $reservation->id) }}"
                class="text-blue-500 hover:underline">{{ __('messages.dashboardShow.back_to_reservations') }}</a>
        </div>
    </div>
@endsection
