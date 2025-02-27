<x-app-layout>
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class= "bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">


                <div class="container mx-auto py-8">
                    <div class="bg-white shadow-md rounded-lg p-6">
                        <h1 class="text-3xl font-bold dark:text-gray-900 mb-6">Edit Tournament</h1>

                        @if (session()->has('message'))
                            <div class="bg-green-500 text-white p-4 rounded mb-4">
                                {{ session('message') }}
                            </div>
                        @endif

                        <form action="{{ route('players.edit', $tournament->id) }}" method="POST" class="bg-white shadow-md rounded-lg p-6">
                            @csrf
                            @method('PUT')

                            <div class="mb-4">
                                <label for="name" class="block text-gray-700 font-bold mb-2">Tournament Name:</label>
                                <input type="text" wire:model="name" id="name" value="{{ $tournament->name }}" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 dark:text-gray-900 focus:ring-blue-500">
                                @error('name') <span class="text-red-500">{{ $message }}</span> @enderror
                            </div>

                            <div class="mb-4">
                                <label for="date" class="block text-gray-700 font-bold mb-2">Date:</label>
                                <input type="text" wire:model="date" id="date"  value="{{ $tournament->date }}" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 dark:text-gray-900 focus:ring-blue-500">
                                @error('name') <span class="text-red-500">{{ $message }}</span> @enderror
                            </div>

                            <div class="mb-4">
                                <label for="start_time" class="block text-gray-700 font-bold mb-2">Start Time:</label>
                                <input type="text" wire:model="start_time" id="start_time"  value="{{ $tournament->start_time }}" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 dark:text-gray-900 focus:ring-blue-500">
                                @error('name') <span class="text-red-500">{{ $message }}</span> @enderror
                            </div>

                            <div class="mb-4">
                                <div>
                                    <label for="tournament_type" class="block text-gray-700 font-bold mb-2">Tournament Type:</label>
                                    <select id="tournament_type"  wire:model="tournament_type" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500 dark:text-slate-900 mt-2 text-sm">
                                        <option value="0"></option>
                                        <option value="1">Varsity 18 Holes</option>
                                        <option value="2">JV 18 Holes</option>
                                        <option value="3">Varsity 9 Holes</option>
                                        <option value="4">JV 9 Holes</option>
                                        <option value="5">Qualifying</option>
                                        <option value="6">Varsity 36 Holes</option>
                                    </select>
                                    @error('tournament_type') <span class="text-red-500">{{ $message }}</span> @enderror
                                </div>
                                @error('email') <span class="text-red-500">{{ $message }}</span> @enderror
                            </div>

                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Update Tournament</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
