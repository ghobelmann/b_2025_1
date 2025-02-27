<div class="container mx-auto py-8">
    @if (session()->has('message'))
        <div class="bg-green-500 text-white p-4 rounded mb-4">
            {{ session('message') }}
        </div>
    @endif

    <h1 class="text-3xl font-bold mb-6">Create Tournament</h1>

    <form wire:submit.prevent="createTournament" class="bg-white shadow-md rounded-lg p-6">
        <div class="mb-4">
            <label for="name" class="block text-gray-700 font-bold mb-2">Name:</label>
            <input type="text" id="name" wire:model="name" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500 dark:text-slate-900 mt-2 text-sm">
            @error('name') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="course_id" class="block text-gray-700 font-bold mb-2">Course:</label>
            <select id="course_id" wire:model="course_id" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500 dark:text-slate-900 mt-2 text-sm">
                <option value="">Select a Course</option>
                @foreach($courses as $course)
                    <option value="{{ $course->id }}">{{ $course->name }}</option>
                @endforeach
            </select>
            @error('course_id') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>


        <div class="mb-4">
            <label for="date" class="block text-gray-700 font-bold mb-2">Date:</label>
            <input type="date" id="date" wire:model="date" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500 dark:text-slate-900 mt-2 text-sm">
            @error('date') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="start_time" class="block text-gray-700 font-bold mb-2">Start Time:</label>
            <input type="time" id="start_time" wire:model="start_time" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500 dark:text-slate-900 mt-2 text-sm">
            @error('start_time') <span class="text-red-500">{{ $message }}</span> @enderror
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

        <div class="mb-4">
            <label for="teams" class="block text-gray-700 font-bold mb-2">Select Teams:</label>
            @foreach ($teams as $team)
                <div class="flex items-center mb-2">
                    <input type="checkbox" id="team_{{ $team->id }}" wire:model="selectedTeams" value="{{ $team->id }}" class="mr-2">
                    <label for="team_{{ $team->id }}" class="text-gray-700">{{ $team->name }}</label>
                </div>
            @endforeach
            @error('selectedTeams') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Create Tournament</button>
        </div>
    </form>
</div>


