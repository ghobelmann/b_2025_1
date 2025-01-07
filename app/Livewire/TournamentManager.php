<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Tournament;
use App\Models\Team;
use App\Models\Course;
use Illuminate\Support\Facades\Auth;

class TournamentManager extends Component
{
    public $name;
    public $date;
    public $course_id;
    public $courses;
    public $start_time;
    public $tournament_type;
    public $selectedTeams = [];
    public $teams;

    public function mount()
    {
        $this->teams = Team::all();
        $this->courses = Course::all();
    }

    public function createTournament()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'course_id' => 'required|integer',
            'date' => 'required|date',
            'start_time' => 'required|date_format:H:i',
            'tournament_type' => 'required|string|max:255',
            'selectedTeams' => 'required|array|min:1',
        ]);

        $tournament = Tournament::create([
            'user_id' => Auth::id(),
            'course_id' => $this->course_id,
            'name' => $this->name,
            'date' => $this->date,
            'start_time' => $this->start_time,
            'tournament_type' => $this->tournament_type,
        ]);

        $tournament->teams()->attach($this->selectedTeams);

        $this->reset(['name', 'course_id', 'date', 'start_time', 'tournament_type', 'selectedTeams']);
        session()->flash('message', 'Tournament created successfully.');
    }

    public function render()
    {
        return view('livewire.tournament-manager');
    }

    public function edit($id)
    {
        dd('$id');
    }

    public function destroy($id)
    {
        $tournament = Tournament::findOrFail($id);
        $tournament->delete();

        return redirect()->route('tournaments.index')->with('message', 'Tournament deleted successfully.');
    }

    public function addTeam($id)
    {
        // Add your add team logic here
    }

    public function createScorecards($id)
    {
        // Add your create scorecards logic here
    }
}
