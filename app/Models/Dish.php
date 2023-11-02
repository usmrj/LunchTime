<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'ingr1',
        'ingr2',
        'ingr3',
        'ingr4',
        'ingr5',
        'IsSecond',
        'IsAlternative'
    ];
}
