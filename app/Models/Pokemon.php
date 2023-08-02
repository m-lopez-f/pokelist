<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Pokemon extends Model
{
    protected $fillable = [
        'name',
        'key',
        'level',
        'national_id',
        'actual_ps',
        'total_ps',
        'base_attack', 
        'base_defense',
        'base_special_attack',
        'base_special_defense',
        'base_speed',
    ];
    
    use HasFactory;


    public function moves(): BelongsToMany
    {
        return $this->belongsToMany(Move::class);
    }
    public function types(): BelongsToMany
    {
        return $this->belongsToMany(Type::class);
    }

    public function trainers(): BelongsToMany
    {
        return $this->belongsToMany(Trainer::class)->using(PokemonTrainer::class);
    }
}
