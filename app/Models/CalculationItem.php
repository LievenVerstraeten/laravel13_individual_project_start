<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[Fillable([
    'calculation_id',
    'drink_id',
    'drink_name',
    'quantity',
    'serving_size_ml'
])]
class CalculationItem extends Model
{
    public function calculation(): BelongsTo
    {
        return $this->belongsTo(
            SavedCalculation::class,
            'calculation_id'
        )->withDefault();
    }

    public function drink(): BelongsTo
    {
        return $this->belongsTo(Drink::class)->withDefault();
    }
}
