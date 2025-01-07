<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'classification', 'logo', 'regional'];

    /**
     * Get the users for the team.
     */
    public function users()
    {
        return $this->hasMany(User::class);
    }


    public function tournaments()
    {
        return $this->belongsToMany(Tournament::class, 'tournament_team');
    }
}
