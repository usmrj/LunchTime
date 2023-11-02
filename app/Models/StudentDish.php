<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class StudentDish extends Model
{
    use HasFactory;

    protected $fillable = [
        'DayOfMonth'
    ];

    public function school(): BelongsTo
    {
        return $this->belongsTo(Student::class, 'student_id');
    }
}
