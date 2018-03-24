<?php

namespace App\Http\Controllers;

use App\Model\Category;
use App\Model\SubCategories;
use Illuminate\Http\Request;
use App\Http\Requests\SubCategoryRequest;

class SubCategoriesController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        return view('admin.subcategory.add',['category'=>$category]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SubCategoryRequest $request)
    {
        $subcategory = new SubCategories();
        $subcategory->cate_id = $request->category;
        $subcategory->name = $request->subcategory;
        $subcategory->alias = str_slug($request->subcategory,'-');
        $subcategory->save();
        return redirect('admin/category')->with(['sub-success'=>'Add sub category successfully!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category  = Category::all();
        $subcategory = SubCategories::find($id);
        return view('admin.subcategory.edit',['subcategory'=>$subcategory,'category'=>$category]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SubCategoryRequest $request, $id)
    {
        $subcategory = SubCategories::find($id);
        $subcategory->cate_id = $request->category;
        $subcategory->name = $request->subcategory;
        $subcategory->alias = str_slug($request->subcategory,'-');
        $subcategory->save();
        return redirect('admin/category')->with(['sub-success'=>'Edit sub category successfully!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subcategory = SubCategories::find($id);
        $subcategory->delete();
        return redirect('admin/category')->with(['sub-success'=>'Delete sub category successfully!']);
    }
}
