<div>
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent="createTeam">
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" wire:model="name" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
            @error('name') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="classification">Classification:</label>
            <input type="text" id="classification" wire:model="classification" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
            @error('classification') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="logo">Logo:</label>
            <input type="text" id="logo" wire:model="logo" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
            @error('logo') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="regional">Regional:</label>
            <input type="text" id="regional" wire:model="regional" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
            @error('regional') <span class="error">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold mt-4 py-2 px-4 rounded">Create Team</button>
    </form>
</div>
