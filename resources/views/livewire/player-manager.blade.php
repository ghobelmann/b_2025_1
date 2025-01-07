<div class="container mx-auto py-8">
        @if (session()->has('message'))
            <div class="bg-green-500 text-white p-4 rounded mb-4">
                {{ session('message') }}
            </div>
        @endif

            <h1 class="text-3xl font-bold mb-6">Create Player</h1>
    <form wire:submit.prevent="createPlayer" class="bg-white shadow-md rounded-lg p-6">
        <div class="max-w-full mx-auto grid grid-cols-12 bg-gray-200">
            <div class="mb-4 col-span-3">
                <label for="first_name" class="block text-gray-700 font-bold mb-2">First Name:</label>
                <input type="text" id="first_name" wire:model="first_name" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500 text-slate-500 dark:text-slate-400 mt-2 text-sm">
                @error('first_name') <span class="error">{{ $message }}</span> @enderror
            </div>

            <div class="mb-4 col-span-3">
                <label for="last_name" class="block text-gray-700 font-bold mb-2">Last Name:</label>
                <input type="text" id="last_name" wire:model="last_name" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500 text-slate-500 dark:text-slate-900 mt-2 text-sm">
                @error('last_name') <span class="error">{{ $message }}</span> @enderror
            </div>

            <div class="mb-4 col-span-3">
                <label for="grad_year" class="block text-gray-700 font-bold mb-2">Grade:</label>
                <input type="text" id="grad_year" wire:model="grad_year" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500 text-slate-500 dark:text-slate-900 mt-2 text-sm">
                @error('grad_year') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="mb-4 col-span-3">
                <label for="status" class="block text-gray-700 font-bold mb-2">Status:</label>
                <select name="status" wire:model="status" id="status" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500 text-slate-500 dark:text-slate-900 mt-2 text-sm" required>
                    <option value=""></option>
                    <option value="1">Active</option>
                    <option value="2">InActive</option>
                    <option value="3">Graduate</option>

                </select>
                @error('status') <span class="error">{{ $message }}</span> @enderror
            </div>
        </div>
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Create Player</button>
    </form>

{{--    <h2>Your Players</h2>--}}
{{--    @if ($noPlayersMessagelayersMessage)--}}
{{--        <p>{{ $noPlayersMessage }}</p>--}}
{{--    @else--}}
{{--        <ul>--}}
{{--            @foreach ($players as $player)--}}
{{--                <li>--}}
{{--                    {{ $player->first_name }} {{ $player->last_name }} ({{ $player->status }}, {{ $player->grade }})--}}
{{--                </li>--}}
{{--            @endforeach--}}
{{--        </ul>--}}
{{--    @endif--}}
</div>
