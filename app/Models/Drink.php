<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

#[Fillable([
    'category_id',
    'user_id',
    'name',
    'calories_per_100ml',
    'alcohol_percentage'
])]
class Drink extends Model
{
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class)->withDefault();
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class)->withDefault();
    }

    public function calculationItems(): HasMany
    {
        return $this->hasMany(CalculationItem::class);
    }

    public function cocktails(): BelongsToMany
    {
        return $this->belongsToMany(Cocktail::class)
            ->withPivot('quantity_ml');
    }

    protected function casts(): array
    {
        return [
            'calories_per_100ml' => 'decimal:2',
            'alcohol_percentage' => 'decimal:2',
        ];
    }
}
