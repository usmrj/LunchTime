<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Symfony\Component\Mime\Part\Multipart\AlternativePart;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'password',
        'diary_number',
        'HaveVoted'
    ];

    public function classes(): BelongsTo
    {
        return $this->belongsTo(Classes::class, 'class_id');
    }

    public function school(): BelongsTo
    {
        return $this->belongsTo(School::class, 'school_id');
    }

    public function allergies(): HasMany
    {
        return $this->hasMany(StudentAllergy::class);
    }

    public function studentDishes(): HasMany
    {
        return $this->hasMany(StudentDish::class);
    }

    public function alternativeDishes(): HasMany
    {
        return $this->hasMany(AlternativeDishesForStudent::class);
    }
}
