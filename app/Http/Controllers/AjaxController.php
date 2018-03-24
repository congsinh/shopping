<?php

namespace App\Http\Controllers;

use App\Model\SubCategories;
use Illuminate\Http\Request;
use App\Model\Category;
class AjaxController extends Controller
{
    public function getSubcategory(Request $request){
        if(empty($request->category)){
            $subcategory = SubCategories::all();
        }
        else{
            $subcategory = SubCategories::where('cate_id',$request->category)->get();
        }
        foreach($subcategory as $sub){
            echo "<option value='$sub->id'>$sub->name</option>";
        }
    }
    public function getCategory(Request $request){
        $subcategory = SubCategories::find($request->subcategory);
        $cate_id = $subcategory->cate_id;
        $category = Category::all();
        foreach($category as $cate){
            if(empty($subcategory)){
                echo "<option value='$cate->id'>$cate->name</option>";
            }
            elseif($cate_id == $cate->id){
                echo "<option value='$cate->id' selected>$cate->name</option>";
            }
            else{
                echo "<option value='$cate->id'>$cate->name</option>";
            }
        }
    }
}
