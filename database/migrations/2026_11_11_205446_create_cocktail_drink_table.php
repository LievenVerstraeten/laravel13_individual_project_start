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
        Schema::create('cocktail_drink', function (Blueprint $table) {
            $table->id();

            $table->foreignId('cocktail_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->foreignId('drink_id')
                ->constrained()
                ->restrictOnDelete();

            $table->unsignedInteger('quantity_ml');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cocktail_drink');
    }
};
