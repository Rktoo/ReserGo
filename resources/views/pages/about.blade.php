@extends('layouts.app')
@section('title', __('messages.about.title'))
@section('content')
    <div class="max-w-2xl mx-auto my-10 p-5 max-sm:text-sm bg-white rounded shadow">
        <h1 class="text-2xl max-sm:text-xl font-semibold mb-4">@lang('messages.about.heading')</h1>
        <p class="mb-4">@lang('messages.about.paragraph_1')</p>
        <p>@lang('messages.about.paragraph_2')</p>
    </div>
@endsection
