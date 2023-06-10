<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use Session;

class CustomerController extends Controller
{
    public function showData()
    {
        $customers = Customer::paginate('2');
        return view('frontend.pages.customer.show_data', compact('customers'));
    }
    public function addData()
    {
        return view('frontend.pages.customer.add_data');
    }
    public function storeData(request $request)
    {
        // $request->validate([
        //     'name'=>'required',
        //     'address'=>'required',
        //     'phone'=>'required',
        //     'gender'=>'required',
        //     //'email' => 'required|email|unique:customers'
        // ]);

        Customer::create([
            
            //'email' => $request->email
            'name' => $request->name,
            'address'=> $request->address,
            'phone'=> $request->phone,
            'gender'=> $request->gender,
        ]);

        return redirect()->back();
    }

    public function delete($id)
    {
        $delete = Customer::find($id);
        if ($delete) {
            $delete->delete();
            return redirect()->back();
        } else {
            return redirect()->route('show.data');
        }
    }
    public function view($id)
    {
        $customer = customer::find($id);
        return view('frontend.pages.customer.view', compact('customer'));
    }
}
