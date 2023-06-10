<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Permission;

class PermissionController extends Controller
{
    public function list(){
        $permissions = Permission::all();
        return view('backend.permission.list', compact('permissions'));
    }

    // public function view($id){
    //     $permission=Permission::find($id);
    //     return view('backend.permission.view', compact('permission'));
    // }

    // public function edit($id){
    //     $permissions=Permission::find($id);
    //     return view('backend.permission.edit',compact('permissions'));
    // }

    // public function update(Request $request,$id){
    //     $permissions=Permission::find($id);
    //     $permissions->update([
    //         'name'=>$request->name,
    //         'status'=>$request->status
    //     ]);
    //     return redirect()->route('permission.list');
    // }

    // public function delete($id){
    //     Permission::find($id)->delete();
    //     return redirect()->back();
    // }


}
