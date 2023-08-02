<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Move extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'power', 'key', 'type_id'
    ];

    public function pokemons(): BelongsToMany
    {
        return $this->belongsToMany(Pokemon::class)->using(MovePokemon::class);
    }

    /**
     * Get the type that move is it.
     */
    public function type(): BelongsTo
    {
        return $this->belongsTo(Type::class);
    }


    public function pokemonMoveTrainer(): HasMany
    {
        return $this->hasMany(PokemonMoveTrainer::class);
    }
}
