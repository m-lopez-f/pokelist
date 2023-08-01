<?php

use App\Models\Type;
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
        Schema::create('pokemon', function (Blueprint $table) {
            $table->id();
            $table->integer('level');
            $table->string('name');
            $table->foreignIdFor(Type::class);
            $table->decimal('actual_ps', 10, 2);
            $table->decimal('total_ps', 10, 2);
            $table->decimal('base_attack', 10, 2);
            $table->decimal('base_defense', 10, 2);
            $table->decimal('base_special_attack', 10, 2);
            $table->decimal('base_special_defense', 10, 2);
            $table->decimal('base_speed', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pokemon');
    }
};
