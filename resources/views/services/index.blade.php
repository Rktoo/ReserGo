@extends('layouts.app')

@section('title', __('messages.serviceIndex.title'))
@section('content')
    <div class="">
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mx-2">
            <h1 class="text-2xl max-sm:text-xl mt-2 font-semibold">{{ __('messages.serviceIndex.title') }}</h1>
            @can('admin')
                <a href="{{ route('services.create') }}"
                    class="inline-block mt-2 py-2 px-4 max-sm:text-sm text-nowrap bg-[#34BDFF] hover:bg-[#0DB0FF] text-white rounded-md">
                    {{ __('messages.serviceIndex.add_service') }}</a>
            @endcan
        </div>
        <div class="mt-4">
            @foreach ($services as $service)
                <div class="service-card flex justify-between items-end p-4 bg-white rounded shadow-md mb-4 opacity-0">
                    <div>
                        <h3 class="text-lg font-medium">{{ $service->name }}</h3>
                        <p>{{ $service->description }}</p>
                    </div>
                    <div class="flex text-xs ml-4">
                        <a href="{{ route('services.edit', $service->id) }}"
                            class="text-white bg-[#34BDFF] hover:bg-[#0DB0FF] px-4 py-2 rounded-l-md">{{ __('messages.serviceIndex.modify') }}</a>

                        <button type="button" id="annuler_"
                            class="text-white bg-red-400 hover:bg-red-500 px-4 py-2 rounded-r-md"
                            data-id="{{ $service->id }}">{{ __('messages.serviceIndex.delete') }}</button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    @include('components.confirmation-modal', [
        'title' => __('messages.serviceIndex.confirm_cancel'),
        'message' => __('messages.serviceIndex.confirm_message'),
    ])
@endsection

@push('scripts')
    <script src="{{ asset('js/dashboard.js') }}"></script>
    @vite('resources/js/animation.js')
@endpush
