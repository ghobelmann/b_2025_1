<div class="container mx-auto py-8">
    @if (session()->has('message'))
        <div class="bg-green-500 text-white p-4 rounded mb-4">
            {{ session('message') }}
        </div>
    @endif

    <h1 class="text-2xl font-bold mb-4">Edit Tournament</h1>

    <form wire:submit.prevent="updateTournament">
        <div class="mb-4">
            <label for="name" class="block text-gray-700">Name:</label>
            <input type="text" id="name" wire:model="name" class="w-full px-3 py-2 border rounded">
            @error('name') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="date" class="block text-gray-700">Date:</label>
            <input type="date" id="date" wire:model="date" class="w-full px-3 py-2 border rounded">
            @error('date') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="start_time" class="block text-gray-700">Start Time:</label>
            <input type="time" id="start_time" wire:model="start_time" class="w-full px-3 py-2 border rounded">
            @error('start_time') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="tournament_type" class="block text-gray-700">Tournament Type:</label>
            <input type="text" id="tournament_type" wire:model="tournament_type" class="w-full px-3 py-2 border rounded">
            @error('tournament_type') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Update Tournament</button>
    </form>
</div>
