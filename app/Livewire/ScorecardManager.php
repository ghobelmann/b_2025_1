<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Scorecard;
use App\Models\Player;
use Illuminate\Support\Facades\Auth;

class ScorecardManager extends Component
{
    public $selectedPlayers = [];
    public $tournament_id;
    public $holes;
    public $cardNumber;
    public $players;

    public function mount()
    {
        $this->tournament_id = 1;
        $this->players = Player::whereHas('team', function ($query) {
            $query->where('user_id', Auth::id());
        })->get();
    }

    public function assignScorecards()
    {
        $this->validate([
            'tournament_id' => 'required',
            'selectedPlayers' => 'required|array|min:1',
            'cardNumber' => 'required|integer',
        ]);

        foreach ($this->selectedPlayers as $playerId) {
            Scorecard::create([
                'tournament_id' => $this->tournament_id,
                'player_id' => $playerId,
                'card_number' => $this->cardNumber,
            ]);
        }

        $this->reset(['selectedPlayers', 'cardNumber', 'tournament_id']);
        session()->flash('message', 'Scorecards assigned successfully.');
    }

    public function render()
    {
        return view('livewire.scorecard-manager');
    }
}
