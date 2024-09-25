<div id="authModal" class="fixed inset-0 z-50 flex items-center justify-center bg-gray-800 bg-opacity-75">
    <div class="bg-white p-5 rounded shadow-lg max-w-md mx-auto text-center">
        <h2 class="text-lg font-semibold mb-4">Connectez-vous pour réserver un service</h2>
        <p class="mb-4">Vous pourrez réserver en quelques clics.</p>
        <div class="flex justify-center space-x-2">
            <a href="{{ route('login') }}" class="bg-blue-600 text-white py-2 px-4 rounded-md">Se connecter</a>
            <a href="{{ route('register') }}" class="bg-green-600 text-white py-2 px-4 rounded-md">S'inscrire</a>
        </div>
    </div>
</div>

@push('scripts')
    @vite('resources/js/modal.js')
@endpush
