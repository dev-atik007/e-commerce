<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function list(){
        // $categories=Category::all();
         $categories=Category::paginate(2);

        return view('backend.pages.category.List',compact('categories'));
    }
    public function form(){
        $categories=Category::all();
        return view('backend.pages.category.form', compact('categories'));
    }
    public function store(Request $request)
    {
        Category::create([
            'name'=>$request->cat_name,
            'status'=>$request->status,
            'description'=>$request->description,
            'parent_id'=>$request->parent_id
        
        ]);
        toastr()->success('success');
        //Alert::success('Success ', 'Cat Success ');

        return redirect()->route('category.List');
    }
        public function view($id){
            $category=Category:: find($id);
            return view('backend.pages.category.view', compact('category'));

        }
        public function delete($id)
        {
            $delete = Category::find($id);
            if ($delete) {
                $delete->delete();
                return redirect()->back();
            } else {
                return redirect()->route('category.List');
            }
        }
}
