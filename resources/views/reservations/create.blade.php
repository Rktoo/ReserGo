@extends('layouts.app')
@section('title', __('messages.reservationCreate.title'))
@section('content')
    <div class="max-w-lg mx-auto my-10 p-5 bg-white rounded shadow">
        <h1 class="text-xl font-semibold mb-4">{{ __('messages.reservationCreate.heading') }}</h1>

        @guest
            <!-- Modal pour inviter à se connecter -->
            @component('components.auth-modal')
                <p>{{ __('messages.reservationCreate.guest_modal') }}</p>
            @endcomponent
        @endguest

        <form action="{{ route('reservations.store') }}" method="POST">
            @csrf

            @if (isset($service))
                <input type="hidden" name="service_id" value="{{ $service->id }}">
                <p class="text-lg font-medium">{{ $service->name }} - {{ number_format((float) $service->price, 2) }} €</p>
            @else
                @can('admin')
                    <div class="mb-4">
                        <label for="user"
                            class="block text-sm font-medium text-gray-700">{{ __('messages.reservationCreate.select_user') }}</label>
                        <select name="user" id="user" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
                            required>
                            <option value="-1">{{ __('messages.reservationCreate.select_user') }}</option>
                            @foreach ($users as $user)
                                <option value="{{ $user->id }}" {{ old('user') == $user->id ? 'selected' : '' }}>
                                    {{ $user->email }}
                                </option>
                            @endforeach
                        </select>
                        @error('user')
                            <span class="text-red-500 text-sm">{{ __('messages.reservationCreate.errors.user') }}</span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="service"
                            class="block text-sm font-medium text-gray-700">{{ __('messages.reservationCreate.select_service') }}</label>
                        <select name="service_id" id="service" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
                            required>
                            <option value="-1">{{ __('messages.reservationCreate.select_service') }}</option>
                            @foreach ($services as $serviceOption)
                                <option value="{{ $serviceOption->id }}"
                                    {{ old('service_id') == $serviceOption->id ? 'selected' : '' }}>
                                    {{ $serviceOption->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('service_id')
                            <span class="text-red-500 text-sm">{{ __('messages.reservationCreate.errors.service_id') }}</span>
                        @enderror
                    </div>
                @endcan
            @endif

            <div class="mb-4">
                <label for="date"
                    class="block text-sm font-medium text-gray-700">{{ __('messages.reservationCreate.reservation_date') }}</label>
                <input type="datetime-local" name="reservation_date" id="date" value="{{ old('reservation_date') }}"
                    class="mt-1 block w-full border-gray-300 focus:ring-[#34BDFF] rounded-md shadow-sm" required>
                @error('reservation_date')
                    <span class="text-red-500 text-sm">{{ __('messages.reservationCreate.errors.reservation_date') }}</span>
                @enderror
            </div>
            <button type="submit" class="w-full py-2 px-4 bg-[#34BDFF] hover:bg-[#0DB0FF] text-white rounded-md ">
                {{ __('messages.reservationCreate.submit') }}
            </button>
        </form>
    </div>

    @include('components.redirect-modal')
@endsection

@can('user')
    @push('scripts')
        @vite('resources/js/reservation.js')
    @endpush
@endcan
