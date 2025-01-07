<?php

use App\Http\Controllers\TeamController;
use App\Livewire\AssignPlayersToScorecard;
use Illuminate\Support\Facades\Route;
use App\Livewire\CourseManager;
use App\Livewire\HoleManager;
use App\Http\Controllers\CourseController;
use App\Livewire\PlayerList;
use App\Http\Controllers\TournamentController;
use App\Http\Controllers\PlayerController;
use App\Livewire\TournamentList;
use App\Livewire\CourseList;
use App\Livewire\EditTournament;

Route::view('/', 'welcome');

// Route to list tournaments

// Route to list players
Route::get('/players', PlayerList::class)->name('players.index');
Route::get('/players/{player}/edit', [PlayerController::class, 'edit'])->name('players.edit');

Route::get('/teams', \App\Livewire\TeamList::class)->name('teams');
Route::get('/teams/{team}/edit', [TeamController::class, 'edit'])->name('teams.edit');

// Route to list all courses

Route::get('/courses', CourseManager::class)->name('courses.index');
Route::put('/courses/{course}', [CourseController::class, 'update'])->name('courses.update');
Route::post('/courses/{course}/edit', [CourseController::class, 'edit'])->name('courses.edit');
Route::get('/courses/{course}/holes', HoleManager::class)->name('holes.create');


// Route to assign players to scorecards
Route::get('/tournaments', TournamentList::class)->name('tournaments');
Route::delete('/tournaments/{tournament}', [\App\Livewire\TournamentManager::class, 'destroy'])->name('tournaments.destroy');
Route::get('/tournaments/{tournament}/edit', [TournamentController::class, 'edit'])->name('tournaments.edit');
Route::get('/tournaments/{tournament}/add-team', [\App\Livewire\TournamentManager::class, 'addTeam'])->name('tournaments.addTeam');
Route::get('/tournaments/{tournament}/create-scorecards', [\App\Livewire\TournamentManager::class, 'createScorecards'])->name('tournaments.createScorecards');
Route::get('/tournaments/{tournament}/assign-players', AssignPlayersToScorecard::class)->name('tournaments.assignPlayers');


Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('players1', 'players1')
    ->middleware(['auth', 'verified'])
    ->name('players1');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::view('/logout', 'logout')->name('logout');

require __DIR__.'/auth.php';


//Route::get('/courses/{course}/holes', HoleManager::class)->name('holes.create');
//Route::get('/tournaments/{tournament}/assign-players', AssignPlayersToScorecard::class)->name('tournaments.assignPlayers');
//Route::get('/courses', CourseList::class)->name('courses.index');
//
// Route to edit a tournament
//Route::get('/tournaments/{tournament}/edit', [TournamentController::class, 'edit'])->name('tournaments.edit');
//

// Route to edit a tournament
//Route::get('/tournaments/{tournament}/edit', EditTournament::class)->name('tournaments.edit');
//Route::get('/tournaments', \App\Livewire\TournamentList::class)->name('tournaments.index');
//Route::get('/tournaments/{tournament}/edit', [\App\Livewire\TournamentManager::class, 'edit'])->name('tournaments.edit');


//Route::view('tournaments', 'tournaments')
//    ->middleware(['auth', 'verified'])
//    ->name('tournaments');

// Route to edit a player
//Route::get('/players/{player}/edit', [PlayerController::class, 'edit'])->name('players.edit');


// Route to assign players to scorecards
//Route::get('/tournaments/{tournament}/assign-players', AssignPlayersToScorecard::class)->name('tournaments.assignPlayers');
//Route::get('/blog/{id}', function ($id) { return view('pages/show-post', compact('id') ); })
