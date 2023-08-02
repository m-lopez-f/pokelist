<?php

use App\Models\Move;
use App\Models\PokemonTrainer;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pokemon_move_trainer', function (Blueprint $table) {
            $table->foreignIdFor(PokemonTrainer::class);
            $table->foreignIdFor(Move::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pokemon_move_trainer');
    }
};
