<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//use App\Models\Category;

class DashboardController extends Controller
{
    public function dashboard()
    {

        return view('backend.pages.dashboard');
    }

    public function addproduct()
    {
        return view('backend.pages.addproduct');
    }

    public function login()
    {
        return view('backend.pages.login');
    }

    public function doLogin(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required|min:5',
        ]);
        //toastr()->success('success');
        if ($validate->fails()) {
            return redirect()->back();
        }

        $credentials = $request->only(['email', 'password']);
        if (auth()->attempt($credentials)) {
            return redirect()->route('dashboard');
        }
    }
    public function logout()
    {
        auth()->logout();
        return redirect()->route('login');
    }
}
