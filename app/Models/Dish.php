<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Dish extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'name',
        'ingr1',
        'ingr2',
        'ingr3',
        'ingr4',
        'ingr5',
        'school_id',
        'IsMain',
        'IsAlternative'
    ];

    public function servedDish(): BelongsTo
    {
        return $this->belongsTo(servedDish::class, 'dish_id');
    }

    public function feedbacks(): HasMany
    {
        return $this->hasMany(Feedback::class);
    }

    public function dishAllergens(): HasMany
    {
        return $this->hasMany(dishAllergen::class);
    }

    public function school(): BelongsTo
    {
        return $this->belongsTo(School::class, 'school_id');
    }
}
