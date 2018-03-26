<?php

namespace App\Http\Controllers;

use App\Model\SubCategories;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use App\Model\Category;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::all();
        $subcategory = SubCategories::all();
        return view('admin.category.list',['category'=>$category,'subcategory'=>$subcategory]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        $category = new Category();
        $category->name = $request->name;
        $image = $request->file('image');
        $img_name = time()."_".$image->getClientOriginalName();
        $category->image = $img_name;
        $image->move('upload/images/img_category',$img_name);
        $category->alias = str_slug($request->name,'-');
        $category->save();
        return redirect('admin/category')->with(['success'=>'Add category successfully !']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::find($id);
        return view('admin.category.edit',['category'=> $category]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
//        return view('admin.category.')
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required',
             'image' => 'image|mimes:jpeg,jpg,png,svg,gif'
        ],[
            'name.required' => 'Please enter category name!',
            'image.image' => 'Sory it\'s not an image',
            'image.mimes' => 'Only jpeg,png,jpg,gif and svg images are allowed!',
        ]);
        $category = Category::find($id);
        if($category->name !== $request->name){
            $this->validate($request,[
                'name' => 'unique:categories,name',
            ],[
                'name.unique' => 'Category Name is already exists!',
            ]);
        }

        if($request->hasFile('image')){
            unlink('upload/images/img_category/'.$category->image);
            $image = $request->file('image');
            $img_name = time()."_".$image->getClientOriginalName();
            $category->image = $img_name;
            $image->move('upload/images/img_category',$img_name);
        }
        $category->name = $request->name;
        $category->alias = str_slug($request->name,'-');
        $category->save();
        return redirect('admin/category')->with(['success'=>'Edit category successfully !']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        unlink('upload/images/img_category/'.$category->image);
        $category->delete();
        return redirect()->route('category.index')->with(['success'=>'Delete successfully !']);
    }

}
