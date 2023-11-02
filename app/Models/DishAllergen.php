<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class dishAllergen extends Model
{
    use HasFactory;

    public function dish(): BelongsTo
    {
        return $this->belongsTo(Dish::class, 'dish_id');
    }

    public function allergies(): HasMany
    {
        return $this->hasMany(Allergen::class);
    }
}
