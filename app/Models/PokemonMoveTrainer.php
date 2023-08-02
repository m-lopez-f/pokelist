<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\Pivot;

class PokemonMoveTrainer extends Pivot
{
    public function move(): BelongsTo
    {
        return $this->belongsTo(Move::class);
    }

    public function pokemonTrainer(): BelongsTo
    {
        return $this->belongsTo(PokemonTrainer::class);
    }
    
}
