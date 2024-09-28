@extends('layouts.app')

@section('title', __('messages.serviceEdit.title'))
@section('content')
    <div class="max-w-lg mx-auto my-10 p-5 bg-white rounded shadow">
        <h1 class="text-xl font-semibold mb-4">{{ __('messages.serviceEdit.edit_service') }}</h1>
        <form action="{{ route('services.update', $service->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="name"
                    class="block text-sm font-medium text-gray-700">{{ __('messages.serviceEdit.service_name') }}</label>
                <input type="text" name="name" id="name" value="{{ old('name', $service->name) }}"
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" placeholder="Indiquer le nom du service">
                @error('name')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <label for="description"
                    class="block text-sm font-medium text-gray-700">{{ __('messages.serviceEdit.service_description') }}</label>
                <textarea name="description" id="description" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
                    placeholder="Indiquer la description du service">{{ old('description', $service->description) }}</textarea>
                @error('description')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <label for="price"
                    class="block text-sm font-medium text-gray-700">{{ __('messages.serviceEdit.service_price') }}</label>
                <input type="text" name="price" id="price" value="{{ old('price', $service->price) }}"
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
                    placeholder="Indiquer le tarif du service" />
                @error('price')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <label for="image"
                    class="block text-sm font-medium text-gray-700">{{ __('messages.serviceEdit.service_image') }}</label>
                <input type="file" name="image" id="image" accept="image/*"
                    class="mt-1 block w-full text-sm text-gray-700 border border-gray-300 rounded-md shadow-sm 
                           file:mr-4 file:py-2 file:px-4
                           file:rounded-md file:border-0
                           file:text-sm file:font-semibold
                           file:bg-blue-50 file:text-[#34BDFF]
                           hover:file:bg-blue-100" />
                @error('image')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
                @if ($service->image_url)
                    <div class="mt-2">
                        <p class="text-sm text-gray-600">{{ __('messages.serviceEdit.current_image') }}</p>
                        <img src="{{ asset('storage/' . $service->image_url) }}" alt="Image du service"
                            class="mt-2 max-w-full h-auto rounded" />
                    </div>
                @endif
            </div>

            <button type="submit" class="w-full py-2 px-4 bg-[#34BDFF] hover:bg-[#0DB0FF] text-white rounded-md">
                {{ __('messages.serviceEdit.update_button') }}
            </button>
        </form>
    </div>
@endsection

@push('scripts')
    @vite('resources/js/form.js')
@endpush
