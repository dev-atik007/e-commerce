<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class HomeController extends Controller
{
    //
    public function home()
    {
        $category = Category::all();
        $product=Product::all();
        return view('frontend.pages.home.home', compact('category','product'));
    }
    public function productSearch(Request $request)
    {
        $product=Product::where('name','LIKE','%'.$request->search_key.'%')->get();
        return view('frontend.pages.product.serach.list', compact('$product'));
    }

    public function productCategory($id)
    {   
        $category=Category::find($id);
        $products=Product::where('category_id','=',$id)->get();
        return view('frontend.pages.product.product', compact('category', 'product'));
    }


    public function userStore(Request $request)
    {


       $validate=Validator::make($request->all(),[
         'customer_name'=>'required',
         'customer_email'=>'required',
         'password'=>'required|confirmed',
         'password_confirmation'=>'required',
      ]);

      if($validate->fails())
      {
         
          return redirect()->back();
      }

      User::create([
          'name'=>$request->customer_name,
          'email'=>$request->customer_email,
          'password'=>bcrypt($request->password),
          'type'=>'customer',
      ]);

      
      return redirect()->back();

    }
    public function userLogin(Request $request)
    {
        $validate=Validator::make($request->all(),[
           'email'=>'required',
           'password'=>'required',
        ]);

        if($validate->fails())
        {
           
            return redirect()->back();
        }

        $credentials=$request->except('_token');
       if(auth()->attempt($credentials))
       {
           
           return redirect()->back();
       }
     
        return redirect()->back();
    }
   
    



}
