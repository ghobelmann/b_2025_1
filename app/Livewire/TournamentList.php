<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Tournament;

class TournamentList extends Component
{
    public $tournaments;

    public function mount()
    {
        // Fetch tournaments associated with the logged-in user
        $this->tournaments = Tournament::where('user_id', Auth::id())->get();
    }

    public function render()
    {
        return view('livewire.tournament-list');
    }
}
