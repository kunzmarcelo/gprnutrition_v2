<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoverageCount extends Model
{
    use HasFactory;
    protected $fillable = [
        'animal_id',
        'count_insemination',
        'pregnancy_percentage',
        'user_id',
    ];
}
