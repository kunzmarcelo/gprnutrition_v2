<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Procedure extends Model
{
    use HasFactory;
    protected $fillable =
    [
      'type',
      'date',
      'note',
      'semen_id',
      'user_id',
      ];

      public function animal(){
        return $this->belongsTo(Animal::class); //retorn para o m
      }
}
