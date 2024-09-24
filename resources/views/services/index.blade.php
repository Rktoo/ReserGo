@extends('layouts.app')

@section('content')
    <div class="">
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mx-2">
            <h1 class="text-2xl max-sm:text-xl mt-2 font-semibold">Services</h1>
            @can('admin')
                <a href="{{ route('services.create') }}"
                    class="inline-block mt-2 py-2 px-4 max-sm:text-sm text-nowrap bg-blue-600 text-white rounded-md hover:bg-blue-700">Ajouter
                    un Service</a>
            @endcan
        </div>
        <div class="mt-4">
            @foreach ($services as $service)
                <div class="flex justify-between items-end p-4 bg-white rounded shadow-md mb-4">
                    <div>
                        <h3 class="text-lg font-medium">{{ $service->name }}</h3>
                        <p>{{ $service->description }}</p>
                    </div>
                    <div class="flex text-xs ml-4">
                        <a href="{{ route('services.edit', $service->id) }}"
                            class="text-white bg-blue-500 hover:bg-blue-600 px-4 py-2 rounded-l-md">Modifier</a>

                        <button type="button" id="annuler_"
                            class="text-white bg-red-500 hover:bg-red-600 px-4 py-2 rounded-r-md">Supprimer</button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
