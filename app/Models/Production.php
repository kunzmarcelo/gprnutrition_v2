<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Production extends Model
{
    use HasFactory;
    protected $fillable = [
      'date_milking',
      'animal_id',
      'first_milking',
      'second_milking',
      'third_milking',
      'total_milking',
      'user_id',
      ];

      public function animal(){
        return $this->belongsTo(Animal::class); //retorn para o m
      }
}
