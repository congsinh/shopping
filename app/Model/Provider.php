<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    protected $table='providers';
    protected $fillable = ['id','name','logo','address','phone','website','description'];
    public $timestamps = false;

    public function product(){
        return $this->hasMany('App\Model\Product');
    }
}
