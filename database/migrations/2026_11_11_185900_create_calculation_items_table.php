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
        Schema::create('calculation_items', function (Blueprint $table) {
            $table->id();

            $table->foreignId('calculation_id')
                ->constrained('saved_calculations')
                ->cascadeOnDelete();

            $table->foreignId('drink_id')
                ->nullable()
                ->constrained()
                ->nullOnDelete();

            $table->string('drink_name');
            $table->decimal('calories_per_100ml', 8, 2);

            $table->unsignedInteger('quantity');
            $table->unsignedInteger('serving_size_ml');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calculation_items');
    }
};
