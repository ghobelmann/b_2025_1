<?php


namespace App\Livewire;

use Livewire\Component;
use App\Models\Player;
use App\Models\Scorecard;
use App\Models\Tournament;

class AssignPlayersToScorecard extends Component
{
    public $tournamentId = 1;
    public $players;
    public $selectedPlayers = [];

    public function mount($tournamentId)
    {
        $this->tournamentId = $tournamentId;
        $this->players = Player::all(); // Adjust this to fetch only the players relevant to the tournament if necessary
    }

    public function assignPlayers()
    {
        $scorecard = Scorecard::create(['tournament_id' => $this->tournamentId]);

        foreach ($this->selectedPlayers as $playerId) {
            $scorecard->players()->attach($playerId, ['tournament_id' => $this->tournamentId]);
        }

        session()->flash('message', 'Players assigned to the scorecard successfully.');
        $this->reset(['selectedPlayers']);
    }

    public function render()
    {
        return view('livewire.assign-players-to-scorecard', [
            'tournament' => Tournament::find($this->tournamentId),
        ]);
    }
}

//namespace App\Livewire;
//
//use Livewire\Component;
//use App\Models\Tournament;
//use App\Models\Player;
//use App\Models\Scorecard;
//
//class AssignPlayersToScorecard extends Component
//{
//    public $tournamentId;
//    public $players;
//    public $selectedPlayers = [];
//
//    public function mount($tournamentId)
//    {
////      dd($this->tournamentId);
//        $this->tournamentId = $tournamentId;
//        $this->players = Player::all(); // Fetch all players; adjust if necessary to fetch only relevant players
//    }
//
//    public function assignPlayers()
//    {
//        foreach ($this->selectedPlayers as $playerId) {
//            Scorecard::create([
//                'tournament_id' => $this->tournamentId,
//                'player_id' => $playerId,
//            ]);
//        }
//
//        session()->flash('message', 'Players assigned to scorecards successfully.');
//        $this->reset(['selectedPlayers']);
//    }
//
//    public function render()
//    {
//        return view('livewire.assign-players-to-scorecard', [
//            'tournament' => Tournament::find($this->tournamentId),
//        ]);
//    }
//}
