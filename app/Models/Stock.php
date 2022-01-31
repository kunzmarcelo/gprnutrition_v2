<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;

    protected $fillable = [
      'description',
      'user_id',
      'registration_date',
      'price',
      'the_amount',
      'unity',
      'provider',
      'active',
    ];
}
