<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Model\ListImage;
use App\Model\Provider;
use App\Model\Category;
use App\Model\SubCategories;
use Illuminate\Http\Request;
use App\Model\Product;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all()->sortByDesc('created_at');
        $subcategory = SubCategories::all();
        $providers = Provider::all();
        return view('admin.product.list',['products'=>$products,'subcategory'=>$subcategory,'providers'=>$providers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        $subcategory = SubCategories::all();
        $providers = Provider::all();
        return view('admin.product.add',['category'=>$category,'providers'=>$providers,'subcategory'=>$subcategory]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
//        echo '<pre>';
//            var_dump($request->all());
//            echo '</pre>';
            $product = new Product();
            $product->name = $request->name;
            $product->alias = str_slug($request->name);
            $product->price = $request->price;
            $product->discount = $request->discount;
            $product->sales = $request->sales;
            $product->quantity = $request->quantity;
            $product->keywords = $request->keywords;
            $product->description = $request->desc;
            $product->subcate_id = $request->subcategory;
            $product->provider_id = $request->provider;
            $product->save();
            $images = $request->file('image');
            if($images){
                foreach ($images as $image){
                    $productimage = new ListImage();
                    $name= time()."_".$image->getClientOriginalName();
                    $productimage->name = $name;
                    $productimage->product_id = $product->id;
                    $image->move('upload/images/products',$name);
                    $productimage->save();
                }
            }
            return redirect('admin/product')->with(['success'=>'Add product successfully !']);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        $category = Category::all();
        $subcategory = SubCategories::all();
        $provider = Provider::all();
        $images = $product->listimage;
        return view('admin.product.edit',['product'=>$product,'category'=>$category,'subcategory'=>$subcategory,'providers'=>$provider,'images'=>$images]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, $id)
    {
//        echo '<pre>';
//            var_dump($request->all());
//        echo '</pre>';
        $product = Product::find($id);
        $product->name = $request->name;
        $product->alias = str_slug($request->name);
        $product->price = $request->price;
        $product->discount = $request->discount;
        $product->sales = $request->sales;
        $product->quantity = $request->quantity;
        $product->keywords = $request->keywords;
        $product->description = $request->desc;
        $product->subcate_id = $request->subcategory;
        $product->provider_id = $request->provider;
        $product->save();
        $images_del = $request->id_del;
        if(!empty($images_del)){
            $array_img = explode(',',$images_del);
            foreach($array_img as $id_del){
                $img = ListImage::find($id_del);
                $img->delete();
                unlink('upload/images/products/'.$img->name);
            }
        }
        $images = $request->file('image');
        if($images){
            foreach ($images as $image){
                $productimage = new ListImage();
                $name= time()."_".$image->getClientOriginalName();
                $productimage->name = $name;
                $productimage->product_id = $product->id;
                $image->move('admin/upload/images/products',$name);
                $productimage->save();
            }
        }
        return redirect('admin/product')->with(['success'=>'Update product successfully !']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect('admin/product')->with(['success'=>'Delete product successfully!']);
    }

}
