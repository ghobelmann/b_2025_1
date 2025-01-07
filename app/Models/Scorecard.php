<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scorecard extends Model
{
    use HasFactory;

    protected $fillable = ['player_id', 'card_number', 'tournament_id'];

    /**
     * Get the player that owns the scorecard.
     */
    public function player()
    {
        return $this->belongsTo(Player::class);
    }
}
