<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\roleRequest;
use App\Models\Permission;
use App\Models\Role;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Role::query();
        if( $key = \request('search')){
            $roles->where('name','LIKE',"%{$key}%")
                ->orWhere('id','LIKE',"%{$key}%")
                ->orWhere('created_at','LIKE',"%{$key}%");
        }
        $roles = $roles->latest()->paginate();
        return view('admin.roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $permissions = Permission::all();
        return view('admin.roles.create', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RoleRequest $roleRequest)
    {
        $role = Role::create([
            'name' => $roleRequest->name,
        ]);
        $role->permission()->sync($roleRequest['permissions']);
        if ($role)
        {
            Alert::success('مقام','با موفقیت افزوده شد');
            return back();
        }else{
            Alert::error('خطا','متاسفانه مشکلی در ایجاد دسترسی جدید بوجود آمده است');
            return back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Role $role)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role)
    {
        $permissions = Permission::all();
        return view('admin.roles.edit', compact('role','permissions'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RoleRequest $roleRequest, Role $role)
    {
        $update = $role->update([
            'name' => $roleRequest->name,
        ]);
        $role->permission()->sync($roleRequest['permissions']);
        if($update)
        {
            Alert::success('مقام','با موفقیت ویرایش شد');
            return back();
        }else{
            Alert::error('خطا','متاسفانه مشکلی پیش اومده');
            return back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        $role->delete();
        Alert::success('مقام','با موفقیت حذف شد');
        return back();
    }
}
