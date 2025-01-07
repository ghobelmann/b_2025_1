<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Tournament;
use App\Models\Course;

class EditTournament extends Component
{
    public $tournamentId = '';
    public $name = '';
    public $date = '';
    public $start_time = '';
    public $tournament_type = '';
    public $course_id = '';
    public $courses = '';


    protected $rules = [
        'name' => 'required|string|max:255',
        'date' => 'required|date',
        'start_time' => 'required|date_format:H:i',
        'tournament_type' => 'required|string|max:255',
        'course_id' => 'required|exists:courses,id',
    ];

    public function mount($tournamentId)
    {
        $tournament = Tournament::findOrFail($tournamentId);
        $this->tournamentId = $tournament->id;
        $this->name = $tournament->name;
        $this->date = $tournament->date;
        $this->start_time = $tournament->start_time;
        $this->tournament_type = $tournament->tournament_type;
        $this->course_id = $tournament->course_id;
        $this->courses = Course::all();
    }

    public function updateTournament()
    {
        $this->validate();

        $tournament = Tournament::findOrFail($this->tournamentId);
        $tournament->update([
            'name' => $this->name,
            'date' => $this->date,
            'start_time' => $this->start_time,
            'tournament_type' => $this->tournament_type,
            'course_id' => $this->course_id,
        ]);

        session()->flash('message', 'Tournament updated successfully.');
    }

    public function render()
    {
        return view('livewire.edit-tournament');
    }
}
