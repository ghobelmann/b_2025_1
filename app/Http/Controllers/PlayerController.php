<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;

class PlayerController extends Controller
{

    public function index()
    {
        // Get all players and pass them to the view
        $players = Player::all();
        return view('players', compact('players'));
    }

    public function edit($id)
    {
        $player = Player::findOrFail($id);
        return view('edit-player', compact('player'));
    }

    public function update(Request $request, $id)
    {
        $player = Player::findOrFail($id);

        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'status' => 'required|string|max:1',
            'grad_year' => 'required|date_format:Y',
        ]);

        $player->update($validatedData);

        return redirect()->route('players.index')->with('message', 'Player updated successfully.');
    }
}
