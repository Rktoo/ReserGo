<div id="confirmation-modal" class="fixed inset-0 bg-gray-600 bg-opacity-75 items-center justify-center hidden">
    <div class="bg-white p-6 rounded-lg shadow-lg">
        <h2 class="text-xl font-bold mb-4">{{ $title }}</h2>
        <p>{{ $message }}</p>
        <div class="mt-6 flex justify-end items-center space-x-1">
            <button id="cancel-btn" class="px-4 py-2 bg-gray-400 text-white rounded-md hover:bg-gray-500">Non</button>
            <form method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button id="confirm-delete-btn"
                    class="px-4 py-2 bg-red-500 text-white rounded-md hover:bg-red-600">Oui</button>
            </form>
        </div>
    </div>
</div>
