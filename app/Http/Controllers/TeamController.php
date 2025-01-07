<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;

class TeamController extends Controller
{
    public function edit($id)
    {
        $team = Team::findOrFail($id);
        return view('teams.edit', compact('team'));
    }

    public function update(Request $request, $id)
    {
        $team = Team::findOrFail($id);

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'classification' => 'required|classification',
            'regional' => 'required|date_format:H:i',
        ]);

        $team->update($validatedData);

        return redirect()->route('teams.index')->with('message', 'Team updated successfully.');
    }
}
