@extends('layouts.app')

@section('content')
<div class="max-w-lg mx-auto my-10 p-5 bg-white rounded shadow">
    <h1 class="text-2xl font-semibold mb-4">Contactez-nous</h1>
    <p class="mb-4">Si vous avez des questions, des commentaires ou des préoccupations, n'hésitez pas à nous contacter. Remplissez le formulaire ci-dessous et nous vous répondrons dès que possible.</p>
    <form>
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Nom</label>
            <input type="text" id="name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
        </div>
        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <input type="email" id="email" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
        </div>
        <div class="mb-4">
            <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
            <textarea id="message" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" rows="4" required></textarea>
        </div>
        <button type="submit" class="w-full py-2 px-4 bg-blue-600 text-white rounded-md hover:bg-blue-700">
            Envoyer
        </button>
    </form>
</div>
@endsection
