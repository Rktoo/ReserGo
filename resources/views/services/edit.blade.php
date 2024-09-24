@extends('layouts.app')

@section('content')
    <div class="max-w-lg mx-auto my-10 p-5 bg-white rounded shadow">
        <h1 class="text-xl font-semibold mb-4">Modifier un Service</h1>
        <form action="{{ route('services.update', $service->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Nom du Service</label>
                <input type="text" name="name" id="name" value="{{ old('name', $service->name) }}"
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" placeholder="Indiquer le nom du service">
                @error('name')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                <textarea name="description" id="description" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
                    placeholder="Indiquer la description du service">{{ old('description', $service->description) }}</textarea>
                @error('description')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <label for="price" class="block text-sm font-medium text-gray-700">Prix</label>
                <input type="text" name="price" id="price" value="{{ old('price', $service->price) }}"
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
                    placeholder="Indiquer le tarif du service" />
                @error('price')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
                <input type="file" name="image" id="image" accept="image/*"
                    class="mt-1 block w-full text-sm text-gray-700 border border-gray-300 rounded-md shadow-sm 
                           file:mr-4 file:py-2 file:px-4
                           file:rounded-md file:border-0
                           file:text-sm file:font-semibold
                           file:bg-blue-50 file:text-blue-700
                           hover:file:bg-blue-100" />
                @error('image')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
                @if ($service->image_url)
                    <!-- Affiche l'image actuelle si elle existe -->
                    <div class="mt-2">
                        <p class="text-sm text-gray-600">Image actuelle :</p>
                        <img src="{{ asset('storage/' . $service->image_url) }}" alt="Image du service"
                            class="mt-2 max-w-full h-auto rounded" />
                    </div>
                @endif
            </div>

            <button type="submit" class="w-full py-2 px-4 bg-blue-600 text-white rounded-md hover:bg-blue-700">
                Mettre à jour le Service
            </button>
        </form>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('js/form.js') }}"></script>
@endpush
