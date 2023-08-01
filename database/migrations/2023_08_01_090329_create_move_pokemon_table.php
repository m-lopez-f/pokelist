<?php

use App\Models\Move;
use App\Models\Pokemon;
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
        Schema::create('move_pokemon', function (Blueprint $table) {
            $table->foreignIdFor(Move::class);
            $table->foreignIdFor(Pokemon::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('move_pokemon');
    }
};
