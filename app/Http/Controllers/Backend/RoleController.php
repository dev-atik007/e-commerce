<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\Permission;
use App\Models\RolePermission;

class RoleController extends Controller
{
    public function list()
    {
        $roles = Role::all();
        return view('backend.access-control.role.list', compact('roles'));
    }

    public function form()
    {

        return view('backend.access-control.role.form');
    }

    public function store(Request $request)
    {
        Role::create([
            'name' => $request->name,
            'status' => $request->status
        ]);
        return redirect()->route('role.list');
    }
    public function edit($id)
    {
        $roles = Role::find($id);
        return view('backend.access-control.role.edit', compact('roles'));
    }
    public function update(Request $request, $id)
    {
        $role = Role::find($id);
        $role->update([
            'name' => $request->role_name,
            'status' => $request->status
        ]);
        return redirect()->route('role.list');
    }

    public function delete($id)
    {
        Role::find($id)->delete();
        return redirect()->back();
    }

    public function rolePermission($roleId)
    {

        // dd($roleId);
        $roles = Role::with('permissions')->find($roleId);
        $permissins = Permission::all();
        return view('backend.access-control.role-permission', compact('roles', 'permissions'));
    }
}
