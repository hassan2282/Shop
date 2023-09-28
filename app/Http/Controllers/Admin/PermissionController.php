<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PermissionRequest;
use App\Models\Permission;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $permissions = Permission::query();
        if( $key = \request('search')){
            $permissions->where('name','LIKE',"%{$key}%")
                        ->orWhere('id','LIKE',"%{$key}%")
                        ->orWhere('created_at','LIKE',"%{$key}%");
        }
        $permissions = $permissions->latest()->paginate();
        return view('admin.permissions.index', compact('permissions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.permissions.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PermissionRequest $permissionRequest)
    {
        $permission = Permission::create([
            'name' => $permissionRequest->name,
        ]);
        if ($permission)
        {
            Alert::success('سطح دسترسی','با موفقیت افزوده شد');
            return back();
        }else{
            Alert::error('خطا','متاسفانه مشکلی در ایجاد دسترسی جدید بوجود آمده است');
            return back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Permission $permission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Permission $permission)
    {
        return view('admin.permissions.edit', compact('permission'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PermissionRequest $permissionRequest, Permission $permission)
    {
        $update = $permission->update([
            'name' => $permissionRequest->name,
        ]);
        if($update)
        {
            Alert::success('سطح دسترسی','با موفقیت ویرایش شد');
            return back();
        }else{
            Alert::error('خطا','متاسفانه مشکلی پیش اومده');
            return back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Permission $permission)
    {
        $permission->delete();
        Alert::success('سطح دسترسی','با موفقیت حذف شد');
        return back();
    }
}
