<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
use Route;

class DataModel extends Model
{
   use HasFactory;
  public function getmenu(){
      $Routname=Route::currentRouteName();

      $menu=DB::select('select * from menus where status = ?', ['0']);
      $submenu=DB::select('select * from sub_menus where status = ?', ['0']);
      $menuid=DB::select('select menu_id from sub_menus where action = ?', [$Routname]);
      $subid=DB::select('select id from sub_menus where action = ?', [$Routname]);
      

      return ['menu'=>$menu,'submenu'=>$submenu,'menuid'=>$menuid ,'subid'=>$subid];
  }
}
