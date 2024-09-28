@extends('layouts.app')
@section('title', __('messages.about.title'))

@section('content')
    <div class="max-w-4xl mx-auto my-10 p-6 bg-white rounded-lg shadow-lg max-sm:text-sm">
        <h1 class="text-2xl max-sm:text-xl font-bold text-center mb-6 text-[#34BDFF] ">@lang('messages.about.heading')</h1>

        <div class="mb-8">
            <p class="text-md max-sm:text-sm text-gray-700 mb-4 leading-relaxed">
                @lang('messages.about.paragraph_1')
            </p>
            <p class="text-md max-sm:text-sm text-gray-700 leading-relaxed">
                @lang('messages.about.paragraph_2')
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-8 mb-8">
            <div class="bg-blue-100 p-5 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                <h2 class="text-xl max-sm:lg font-semibold text-[#34BDFF] mb-3">@lang('messages.about.feature_title_1')</h2>
                <p class="text-md max-sm:text-sm text-gray-600">@lang('messages.about.feature_description_1')</p>
            </div>
            <div class="bg-blue-100 p-5 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                <h2 class="text-xl max-sm:lg  font-semibold text-[#34BDFF] mb-3">@lang('messages.about.feature_title_2')</h2>
                <p class="text-gray-600">@lang('messages.about.feature_description_2')</p>
            </div>
        </div>

        <div class="text-center">
            <p class="text-md max-sm:text-sm text-gray-700 mb-6">@lang('messages.about.cta_text')</p>
            <a href="{{ route('contact') }}"
                class="inline-block py-2 px-4 bg-[#34BDFF] hover:bg-[#0DB0FF] text-white font-semibold rounded-lg shadow  transition-colors duration-300">
                @lang('messages.about.cta_button')
            </a>
        </div>
    </div>
@endsection
