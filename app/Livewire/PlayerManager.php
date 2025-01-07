<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Player;
use Illuminate\Support\Facades\Auth;
use App\Models\Team;

class PlayerManager extends Component
{
public $first_name;
    public $last_name;
    public $status;
    public $grad_year;
    public $players;
    public $noPlayersMessage = '';

    public function mount()
{
    $this->loadPlayers();
}

protected function loadPlayers()
    {
        $this->players = Player::whereHas('team', function ($query) {
        $query->where('user_id', Auth::id());
})->get();

if ($this->players->isEmpty()) {
        $this->noPlayersMessage = 'No players found for your team. Please add a player.';
    } else {
        $this->noPlayersMessage = '';
    }
}

public function createPlayer()
{
    $this->validate([
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'status' => 'required|string|max:255',
        'grad_year' => 'required|date_format:Y',
]);

$team = Team::where('user_id', Auth::id())->firstOrFail();

Player::create([
    'team_id' => $team->id,
    'first_name' => $this->first_name,
    'last_name' => $this->last_name,
    'status' => $this->status,
    'grad_year' => $this->grad_year,
]);

    $this->reset(['first_name', 'last_name', 'status', 'grad_year']);
    $this->loadPlayers();
}

public function render()
    {
        return view('livewire.player-manager');
    }
}
