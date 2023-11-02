<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Allergen extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function studentAllergy(): BelongsTo
    {
        return $this->belongsTo(StudentAllergy::class, 'allergen_id');
    }

    public function dishAllergen(): BelongsTo
    {
        return $this->belongsTo(dishAllergen::class, 'dish_id');
    }
}
