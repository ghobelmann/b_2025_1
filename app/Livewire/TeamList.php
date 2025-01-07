<?php

namespace App\Livewire;

use App\Models\Team;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class TeamList extends Component
{
    public $teams;

    public function mount()
    {
        // Fetch teams associated with the logged-in user
//        $this->teams = Player::where('user_id', Auth::id())->get();
//        $this->teams = Team::where('id', Auth::id())->get();
        $this->teams = Team::get();
    }

    public function render()
    {
        return view('livewire.team-list');
    }
}

