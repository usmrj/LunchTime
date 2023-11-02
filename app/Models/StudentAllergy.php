<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class StudentAllergy extends Model
{
    use HasFactory;

    protected $fillable  = [
        'name'
    ];

    public function school(): BelongsTo
    {
        return $this->belongsTo(Student::class, 'student_id');
    }

    public function allergies(): HasMany
    {
        return $this->hasMany(Allergen::class);
    }
}
