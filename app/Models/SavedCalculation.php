<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Fillable([
    'user_id',
    'total_calories',
    'walking_minutes',
    'cycling_minutes'
])]
class SavedCalculation extends Model
{
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class)->withDefault();
    }

    public function items(): HasMany
    {
        return $this->hasMany(
            CalculationItem::class,
            'calculation_id'
        );
    }

    protected function casts(): array
    {
        return [
            'total_calories' => 'decimal:2',
            'walking_minutes' => 'integer',
            'cycling_minutes' => 'integer',
        ];
    }
}
