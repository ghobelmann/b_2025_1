<div class="container mx-auto py-8">
    @if (session()->has('message'))
        <div class="bg-green-500 text-white p-4 rounded mb-4">
            {{ session('message') }}
        </div>
    @endif

    <h1 class="text-2xl font-bold mb-6">Assign Players to Scorecard for {{ $tournament->name }}</h1>

    <form wire:submit.prevent="assignPlayers" class="bg-white shadow-md rounded-lg p-6">
        <div class="mb-4">
            <label for="players" class="block text-gray-700 font-bold mb-2">Select Players:</label>
            <select multiple id="players" wire:model="selectedPlayers" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                @foreach ($players as $player)
                    <option value="{{ $player->id }}">{{ $player->name }}</option>
                @endforeach
            </select>
            @error('selectedPlayers') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Assign Players</button>
    </form>
</div>



{{--<div class="container mx-auto py-8">--}}
{{--    @if (session()->has('message'))--}}
{{--        <div class="bg-green-500 text-white p-4 rounded mb-4">--}}
{{--            {{ session('message') }}--}}
{{--        </div>--}}
{{--    @endif--}}

{{--    <h1 class="text-2xl font-bold mb-6">Assign Players to Scorecard for {{ $tournament->name }}</h1>--}}

{{--    <form wire:submit.prevent="assignPlayers" class="bg-white shadow-md rounded-lg p-6">--}}
{{--        <div class="mb-4">--}}
{{--            <label for="players" class="block text-gray-700 font-bold mb-2">Select Players:</label>--}}
{{--            @foreach ($players as $player)--}}
{{--                <div class="flex items-center mb-2">--}}
{{--                    <input type="checkbox" id="player_{{ $player->id }}" wire:model="selectedPlayers" value="{{ $player->id }}" class="mr-2">--}}
{{--                    <label for="player_{{ $player->id }}" class="text-gray-700">{{ $player->name }}</label>--}}
{{--                </div>--}}
{{--            @endforeach--}}
{{--            @error('selectedPlayers') <span class="text-red-500">{{ $message }}</span> @enderror--}}
{{--        </div>--}}

{{--        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Assign Players</button>--}}
{{--    </form>--}}
{{--</div>--}}
