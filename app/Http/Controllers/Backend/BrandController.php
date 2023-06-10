<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Category;

class BrandController extends Controller
{
    public function list(){
        $brands=Brand::paginate(3);
        $categories=Category::all();
        return view('backend.pages.brand.list', compact('brands', 'categories'));
    }

    public function form(){
        $category = Category::all();
        return view('backend.pages.brand.form', compact('category'));
    }

    public function store(Request $request)
    {   

        $fileName='';
        if($request->hasFile('brand_image'))
        {
            $fileName=date('Ymdhis').'.'.$request->file('brand_image')->getClientOriginalExtension();
            $request->file('brand_image')->storeAs('/uploads',$fileName);
        }
        
        //dd($request->all());
        Brand::create([
            'name'=>$request->name,
            'description'=>$request->description,
            'status'=>$request->status,
            'category_id'=>$request->category_id,
            'image'=>$request->file,
        
        ]);
        toastr()->success('success');
        //Alert::success('Success ', 'Cat Success ');

        return redirect()->route('brand.List');
    }
    // public function delete($id)
    // {
    //     Brand::find($id)->delete();
    //     return redirect()->back();
        
        
    // }
    public function delete($id)
        {
            $delete = Brand::find($id);
            if ($delete) {
                $delete->delete();
                return redirect()->back();
            } else {
                return redirect()->route('brand.List');
            }
        }
}
