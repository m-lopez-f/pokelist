<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Type extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'key'
    ];

    public function pokemons(): BelongsToMany
    {
        return $this->belongsToMany(Pokemon::class)->using(PokemonType::class);
    }

    /**
     * Get the moves for the type.
     */
    public function moves(): HasMany
    {
        return $this->hasMany(Move::class);
    }
}
