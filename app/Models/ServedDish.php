<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ServedDish extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function school(): BelongsTo
    {
        return $this->belongsTo(School::class, 'school_id', 'id');
    }

    public function dish(): BelongsTo
    {
        return $this->belongsTo(Dish::class, 'dish_id', 'id');
    }
}
