@extends('layouts.app')
@section('title', __('messages.contact.title'))
@section('content')
    <div class="max-w-lg mx-auto my-10 p-5 bg-white rounded shadow">
        <h1 class="text-2xl font-semibold mb-4">@lang('messages.contact.title')</h1>
        <p class="mb-4">Si vous avez des questions, des commentaires ou des préoccupations, n'hésitez pas à nous contacter.
            Remplissez le formulaire ci-dessous et nous vous répondrons dès que possible.</p>
        <form>
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Nom</label>
                <input type="text" id="name" name="name"
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" placeholder="Votre nom">
                <span class="text-red-400"></span>
            </div>
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="email" name="email"
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" placeholder="Votre adresse email">
                <span class="text-red-400"></span>
            </div>
            <div class="mb-4">
                <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                <textarea id="message" name="message" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm min-h-12 max-h-64"
                    rows="4" placeholder="Votre message"></textarea>
                <span class="text-red-400"></span>
            </div>
            <button type="submit" class="w-full py-2 px-4 bg-[#34BDFF] hover:bg-[#0DB0FF] text-white rounded-md ">
                Envoyer
            </button>
        </form>
    </div>
@endsection

@push('scripts')
    @vite('resources/js/contact.js')
@endpush
