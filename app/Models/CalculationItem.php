<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CalculationItem extends Model
{
    /** @use HasFactory<\Database\Factories\CalculationItemFactory> */
    use HasFactory;

    protected $fillable = [
        'calculation_id',
        'drink_id',
        'drink_name',
        'calories_per_100ml',
        'quantity',
        'serving_size_ml',
    ];

    public function calculation(): BelongsTo
    {
        return $this->belongsTo(
            SavedCalculation::class,
            'calculation_id'
        );
    }

    public function drink(): BelongsTo
    {
        return $this->belongsTo(Drink::class);
    }
}
