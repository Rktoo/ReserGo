@extends('layouts.app')
@section('title', __('messages.home.title'))
@section('content')
    <?php
    $servicePopulaires = [__('messages.home.services.cleaning'), __('messages.home.services.beauty'), __('messages.home.services.event'), __('messages.home.services.coaching'), __('messages.home.services.repair'), __('messages.home.services.others')];
    ?>
    <div class="my-2 py-4">
        <div
            class="w-auto mb-10 flex flex-col justify-center items-center space-y-2 bg-white p-4 rounded-lg shadow-sm overflow-hidden">
            <h1 class="title_ max-sm:text-center text-3xl font-bold opacity-0">@lang('messages.home.welcome')</h1>
            <p class="subtitle_ max-sm:text-center max-sm:text-sm text-gray-700 opacity-0">@lang('messages.home.subtitle')</p>
        </div>

        <div class="max-w-3xl mx-auto mb-10 p-4 rounded-lg text-center  bg-white shadow-sm">
            <h2 class="text-2xl max-sm:text-xl font-semibold text-black mb-4">@lang('messages.home.discover_services')</h2>
            <p class="max-sm:text-start text-md max-sm:text-sm text-gray-600 mb-4">@lang('messages.home.description')</p>
            <p class="max-sm:text-sm text-gray-600 max-sm:mb-2">@lang('messages.home.popular_services')</p>
            <ul class="flex flex-col justify-start items-start flex-wrap text-wrap list-disc list-inside text-gray-600 mb-4">
                @foreach ($servicePopulaires as $k => $v)
                    <li class="service-List text-start text-wrap max-sm:text-sm opacity-0 list-none">
                        <div class="flex items-center space-x-1">
                            <p class="relative ml-10">{{ $v }}

                            <div class="absolute transform top-[2px] left-0  w-10 h-10">
                                @include('components.svg.listing', [
                                    'fill' => '#4ADE80',
                                    'sc' => '#EBEDF0',
                                    'w' => 40,
                                    'h' => 40,
                                    'sw' => 4,
                                    'b' => $k - 1,
                                ])
                            </div>
                            </p>


                        </div>
                    </li>
                @endforeach
            </ul>
            <p class="max-sm:text-sm text-gray-600">@lang('messages.home.call_to_action')</p>
        </div>
        <div class="w-full flex justify-center items-center mb-6">
            <div class=" w-12 h-12 rounded-full bg-white/50 hover:bg-white active:bg-white cursor-pointer" id="scrollOver_">

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="black" aria-hidden="true"
                    data-slot="icon">
                    <path fill-rule="evenodd"
                        d="M10 3a.75.75 0 0 1 .75.75v10.638l3.96-4.158a.75.75 0 1 1 1.08 1.04l-5.25 5.5a.75.75 0 0 1-1.08 0l-5.25-5.5a.75.75 0 1 1 1.08-1.04l3.96 4.158V3.75A.75.75 0 0 1 10 3Z"
                        clip-rule="evenodd" />
                </svg>

            </div>
        </div>
        {{-- Listing des services --}}
        <div id="section_">
            @include('components.services')
        </div>
    </div>

    <div class="my-4">
        {{ $services->links() }}
    </div>
@endsection

@push('scripts')
    @vite('resources/js/animation.js')
@endpush
