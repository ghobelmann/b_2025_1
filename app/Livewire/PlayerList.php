<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Player;

class PlayerList extends Component
{
    public $players;

    public function mount()
    {
        // Fetch players associated with the logged-in user
//        $this->players = Player::where('user_id', Auth::id())->get();
        $this->players = Player::where('team_id', Auth::id())->get();
    }

    public function render()
    {
        return view('livewire.player-list');
    }
}

