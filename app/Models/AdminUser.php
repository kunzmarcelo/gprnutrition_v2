<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminUser extends Model
{
    use HasFactory;

    protected $table = 'admin_users';
    public $timestamps = false;
    protected $fillable =[
      'admin_id',
      'user_id'
    ];

    public function adminUser(){
      return $this->belongsTo(User::class,'user_id');
    }
}
