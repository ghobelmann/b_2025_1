<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Team;

class TeamManager extends Component
{
    public $name;
    public $classification;
    public $logo;
    public $regional;

    public function createTeam()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'classification' => 'required|string|max:255',
            'logo' => 'nullable|string|max:255',
            'regional' => 'required|string|max:255',
        ]);

        Team::create([
            'user_id' => 1, // Set user_id to default of 1
            'name' => $this->name,
            'classification' => $this->classification,
            'logo' => $this->logo,
            'regional' => $this->regional,
        ]);

        // Reset the form fields
        $this->reset(['name', 'classification', 'logo', 'regional']);

        // Optionally, flash a success message
        session()->flash('message', 'Team created successfully.');
    }

    public function render()
    {
        return view('livewire.team-manager');
    }
}
