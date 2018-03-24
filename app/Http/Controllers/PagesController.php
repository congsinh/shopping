<?php

namespace App\Http\Controllers;

use App\Model\Product;
use Illuminate\Http\Request;
use App\Model\Category;

class PagesController extends Controller
{
    public function homepage(){
//        $category = Category::all();
        $sale_product = Product::where('discount','<>',0)->get();
        $popular_product = Product::where('sales','>',50)->orderBy('sales','desc')->limit(20)->get();
//        echo '<pre>';
//            var_dump($sale_product);
//            echo '</pre>';
        return view('pages.welcome',['sale_product'=>$sale_product,'popular_product'=>$popular_product]);
    }
}
