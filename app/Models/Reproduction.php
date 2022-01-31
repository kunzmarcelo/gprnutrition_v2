<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reproduction extends Model
{
    use HasFactory;

    protected $table = 'reproductions';
    protected $fillable=[
        'animal_id',
        'user_id',
        'created',
        'delivery_date',
        'coverage_date',
        'expected_delivery_date',
        'dry_date',
        'pre_delivery_date',
        'del',
        'del_total',
        'situation',
        'observation1',
        'observation2',
      ];

      protected function animals(){
        return $this->belongsTo(Animal::class,'animal_id','id'); // está funcionando link para a duvida --->>>>>https://pt.stackoverflow.com/questions/152089/problemas-com-relacionamento-um-para-muitos-laravel
        //return $this->belongsTo('App\Models\Animal','animal_id','id'); // está funcionando link para a duvida --->>>>>https://pt.stackoverflow.com/questions/152089/problemas-com-relacionamento-um-para-muitos-laravel
      }
}
