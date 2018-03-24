<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected  $table='categories';
    public $timestamps = false;
    public function sub_categories(){
        return $this->hasMany('App\Model\SubCategories','cate_id','id');
    }
//    public function product(){
//        return $this->hasManyThrough('App\Model\Product');
//    }

}
