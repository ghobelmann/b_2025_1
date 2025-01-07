<x-app-layout>
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class= "bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">


                <div class="container mx-auto py-8">
                    <div class="bg-white shadow-md rounded-lg p-6">
                        <h1 class="text-3xl font-bold mb-6">Edit Team</h1>

                        @if (session()->has('message'))
                            <div class="bg-green-500 text-white p-4 rounded mb-4">
                                {{ session('message') }}
                            </div>
                        @endif

                        <form action="{{ route('players.edit', $team->id) }}" method="POST" class="bg-white shadow-md rounded-lg p-6">
                            @csrf
                            @method('PUT')

                            <div class="mb-4">
                                <label for="first_name" class="block text-gray-700 font-bold mb-2">First Name:</label>
                                <input type="text" wire:model="first_name" id="first_name" value="{{ $team->name }}" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                                @error('name') <span class="text-red-500">{{ $message }}</span> @enderror
                            </div>

                            <div class="mb-4">
                                <label for="last_name" class="block text-gray-700 font-bold mb-2">Last Name:</label>
                                <input type="text" wire:model="last_name" id="last_name"  value="{{ $team->date }}" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                                @error('name') <span class="text-red-500">{{ $message }}</span> @enderror
                            </div>

                            <div class="mb-4">
                                <label for="status" class="block text-gray-700 font-bold mb-2">Status:</label>
                                <input type="text" wire:model="status" id="status"  value="{{ $team->start_time }}" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                                @error('name') <span class="text-red-500">{{ $message }}</span> @enderror
                            </div>

                            <div class="mb-4">
                                <label for="grad_year" class="block text-gray-700 font-bold mb-2">Grad Year:</label>
                                <input type="number" wire:model="grad_year" id="grad_year"  value="{{ $team->grad_year }}" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                                @error('email') <span class="text-red-500">{{ $message }}</span> @enderror
                            </div>

                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Update Player</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
