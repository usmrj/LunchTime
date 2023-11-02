<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class servedDish extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function school(): BelongsTo
    {
        return $this->belongsTo(School::class, 'school_id');
    }

    public function dishes(): HasMany
    {
        return $this->hasMany(Dish::class, 'dish_id');
    }
}
