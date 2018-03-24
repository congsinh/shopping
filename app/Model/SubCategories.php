<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class SubCategories extends Model
{
   protected $table='sub_categories';
   public $timestamps = false;
   public function categories(){
       return $this->belongsTo('App\Model\Category','cate_id','id');
   }
//   public function product(){
////       return $this->hasMany('App\Model\Product','subcate_id','id');
//   }
}

