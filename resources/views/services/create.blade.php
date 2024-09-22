@extends('layouts.app')

@section('content')
    <div class="max-w-lg mx-auto my-10 p-5 bg-white rounded shadow">
        <h1 class="text-xl font-semibold mb-4">Ajouter un Service</h1>
        <form action="{{ route('services.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Nom du Service</label>
                <input type="text" name="name" id="name"
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" placeholder="Indiquer le nom du service">
                @error('name')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                <textarea name="description" id="description" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
                    placeholder="Indiquer la description du service"></textarea>
                @error('description')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <label for="price" class="block text-sm font-medium text-gray-700">Prix</label>
                <input type="text" name="price" id="price"
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
                    placeholder="Indiquer le tarif du service" />
                @error('price')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" class="w-full py-2 px-4 bg-blue-600 text-white rounded-md hover:bg-blue-700">
                Créer le Service
            </button>
        </form>
    </div>
@endsection
