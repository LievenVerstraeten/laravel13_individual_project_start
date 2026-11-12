<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

#[Fillable(['user_id', 'name', 'description'])]
class Cocktail extends Model
{
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class)->withDefault();
    }

    public function drinks(): BelongsToMany
    {
        return $this->belongsToMany(Drink::class)
            ->withPivot('quantity_ml');
    }
}
