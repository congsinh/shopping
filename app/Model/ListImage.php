<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ListImage extends Model
{
    protected $table = 'listimages';
    protected $fillable = ['name','product_id'];
    public $timestamps = false;

    public function product(){
        return $this->belongsTo('App\Model\Product','product_id','id');
    }
}
