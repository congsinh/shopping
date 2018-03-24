<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = ['name','alias','price','discount','sales','quantity','keywords','description','subcate_id','provider_id','created_at','updated_at'];
    public $timestamps = true;
    public function categories(){
        return $this->belongsTo('App\Model\Category');
    }
    public function subcategories(){
        return $this->belongsTo('App\Model\SubCategories','subcate_id','id');
    }
    public function listimage(){
        return $this->hasMany('App\Model\ListImage','product_id','id');
    }
    public function provider(){
        return $this->belongsTo('App\Model\Provider');
    }

}
