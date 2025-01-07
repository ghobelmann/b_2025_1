<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Tournament;
use App\Models\Player;
use App\Models\Hole;
use App\Models\Score;

class EnterScores extends Component
{
    public $tournamentId;
    public $players;
    public $holes;
    public $scores = [];

    public function mount($tournamentId)
    {
        $this->tournamentId = $tournamentId;
        $this->players = Player::whereHas('scorecards', function ($query) {
            $query->where('tournament_id', $this->tournamentId);
        })->get();
        $this->holes = Hole::where('course_id', Tournament::find($this->tournamentId)->course_id)->get();

        foreach ($this->players as $player) {
            foreach ($this->holes as $hole) {
                $score = Score::firstOrNew([
                    'tournament_id' => $this->tournamentId,
                    'player_id' => $player->id,
                    'hole_id' => $hole->id,
                ]);
                $this->scores[$player->id][$hole->id] = $score->score ?? '';
            }
        }
    }

    public function saveScores()
    {
        foreach ($this->scores as $playerId => $holes) {
            foreach ($holes as $holeId => $score) {
                Score::updateOrCreate([
                    'tournament_id' => $this->tournamentId,
                    'player_id' => $playerId,
                    'hole_id' => $holeId,
                ], [
                    'score' => $score,
                ]);
            }
        }

        session()->flash('message', 'Scores updated successfully.');
    }

    public function render()
    {
        return view('livewire.enter-scores', [
            'tournament' => Tournament::find($this->tournamentId),
        ]);
    }
}
