<div>
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent="assignScorecards">
        <div>
            <label for="cardNumber">Card Number:</label>
            <select id="cardNumber" wire:model="cardNumber">
                <option value="">Select Card Number</option>
                @for ($i = 1; $i <= 10; $i++) <!-- Adjust the range as needed -->
                <option value="{{ $i }}">{{ $i }}</option>
                @endfor
            </select>
            @error('cardNumber') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="players">Select Players:</label>
            @foreach ($players as $player)
                <div>
                    <input type="checkbox" wire:model="selectedPlayers" value="{{ $player->id }}">
                    {{ $player->first_name }} {{ $player->last_name }}
                </div>
            @endforeach
            @error('selectedPlayers') <span class="error">{{ $message }}</span> @enderror
        </div>

        <button type="submit">Assign Scorecards</button>
    </form>
</div>
