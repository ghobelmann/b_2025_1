<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'course_id',  'name', 'date', 'start_time', 'tournament_type'];

    /**
     * Get the user that owns the tournament.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }




    public function teams()
    {
        return $this->belongsToMany(Team::class, 'tournament_team');
    }

}
