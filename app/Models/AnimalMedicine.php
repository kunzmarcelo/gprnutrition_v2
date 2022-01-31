<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnimalMedicine extends Model
{
    use HasFactory;
    protected $table = 'animal_medicine';
    protected $fillable=[
      'animal_id',
      'medicine_id',
      'application_date',
      'next_application',
      'user_id',
    ];


      public function medicines(){
        return $this->belongsTo(Medicine::class,'medicine_id');
      }
      public function animals(){
        return $this->belongsTo(Animal::class,'animal_id');
      }
}
