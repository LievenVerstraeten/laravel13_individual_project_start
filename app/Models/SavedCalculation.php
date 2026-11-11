<?php

namespace App\Models;

use Database\Factories\SavedCalculationFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SavedCalculation extends Model
{
    /** @use HasFactory<SavedCalculationFactory> */
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'total_calories',
        'walking_distance_km',
        'cycling_distance_km',
        'walking_minutes',
        'cycling_minutes',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function items(): HasMany
    {
        return $this->hasMany(CalculationItem::class, 'calculation_id');
    }
}
