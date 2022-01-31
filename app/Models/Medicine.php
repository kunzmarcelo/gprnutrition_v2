<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    use HasFactory;

    protected $fillable = [
    'description',
'grace_days',
'unit_of_measurement',
'mode_of_use',
'user_id',
];
    //
    public function animals()
    {
        //    $this->belongsToMany('relacao', 'nome da tabela pivot', 'key ref. books em pivot', 'key ref. author em pivot')
        return $this->belongsToMany('App\Animals', 'AnimalMedicine', 'medicine_id', 'animal_id')->withPivot(['status']);
    }
}
