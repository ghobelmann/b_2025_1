<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Tournament;
use Illuminate\Support\Facades\Auth;

class TournamentEdit extends Component
{
    public $tournamentId;
    public $name;
    public $date;
    public $start_time;
    public $tournament_type;

    protected $rules = [
        'name' => 'required|string|max:255',
        'date' => 'required|date',
        'start_time' => 'required|date_format:H:i',
        'tournament_type' => 'required|string|max:255',
    ];

    public function mount($id)
    {
        $tournament = Tournament::findOrFail($id);

        // Ensure the user is authorized to edit this tournament
        if ($tournament->user_id !== Auth::id()) {
            abort(403);
        }

        $this->tournamentId = $tournament->id;
        $this->name = $tournament->name;
        $this->date = $tournament->date;
        $this->start_time = $tournament->start_time;
        $this->tournament_type = $tournament->tournament_type;
    }

    public function updateTournament()
    {
        $this->validate();

        $tournament = Tournament::findOrFail($this->tournamentId);

        // Ensure the user is authorized to edit this tournament
        if ($tournament->user_id !== Auth::id()) {
            abort(403);
        }

        $tournament->update([
            'name' => $this->name,
            'date' => $this->date,
            'start_time' => $this->start_time,
            'tournament_type' => $this->tournament_type,
        ]);

        session()->flash('message', 'Tournament updated successfully.');

        return redirect()->route('tournaments.index');
    }

    public function render()
    {
        return view('livewire.tournament-edit');
    }
}
