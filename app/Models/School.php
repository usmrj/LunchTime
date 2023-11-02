<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class School extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'lunch_break_start1',
        'lunch_break_end1',
        'lunch_break_start2',
        'lunch_break_end2',
        'HasDishesForSick'
    ];

    public function classes(): HasMany
    {
        return $this->hasMany(Classes::class);
    }
}
