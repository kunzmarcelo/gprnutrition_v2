<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semen extends Model
{
    use HasFactory;

    protected $fillable=[
      'record',
      'name',
      'breed_id',
      'blood_id',
      'supplier_company',
      'sexed',
      'user_id',
    ];

    public function breed(){
      return $this->belongsTo(Breed::class);
    }
    public function blood(){
      return $this->belongsTo(Blood::class);
    }
}
