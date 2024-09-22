@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mx-2">
    <h1 class="text-2xl max-sm:text-xl mt-2 font-semibold">Services</h1>
    <a href="{{ route('services.create') }}" class="inline-block mt-2 py-2 px-4 max-sm:text-sm text-nowrap bg-blue-600 text-white rounded-md hover:bg-blue-700">Ajouter un Service</a>
</div>
    <div class="mt-4">
        @foreach($services as $service)
            <div class="p-4 bg-white rounded shadow-sm mb-4">
                <h3 class="text-lg font-medium">{{ $service->name }}</h3>
                <p>{{ $service->description }}</p>
            </div>
        @endforeach
    </div>
</div>
@endsection
