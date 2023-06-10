<?php

namespace App\Http\Controllers\Backend;

use App\Models\Brand;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function list()
    {
        $brands=Brand::all();
        // $products=Product::all();
        $products=Product::paginate(2);
        return view('backend.pages.product.list',compact('products', 'brands'));
    }
    public function createForm()
    {
        $brands=Brand::all();
        $categories = Category::all();
        return view('backend.pages.product.create', compact('categories', 'brands'));
    }

    public function store(request $request)
    {
        //Image
        $fileName='';
        if($request->hasFile('product_image'))
        {
            $fileName=date('Ymdhis').'.'.$request->file('product_image')->getClientOriginalExtension();
            $request->file('product_image')->storeAs('/uploads',$fileName);
        }


        Product::create([
           'name'=>$request->name,
           'price'=>$request->price,
           'status'=>$request->status,
           'category_id'=>$request->category_id,
           'brand_id'=>$request->brand_id,
           'image'=>$fileName,
           'description'=>$request->description,
            
        ]);
        return redirect()->route('product.list');
    }

    public function view($id)
    {
       $product=Product::find($id);
       return view('backend.pages.product.view', compact('product'));
    }

    public function delete($id)
    {
        Product::find($id)->delete();
        return redirect()->back();
    }
}
