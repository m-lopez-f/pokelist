<?php

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
        Schema::create('effectivenesses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('attacker_type_id');
            $table->foreignId('defender_type_id');
            $table->decimal('damage');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('effectivenesses');
    }
};
