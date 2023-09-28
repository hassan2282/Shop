<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class roleUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $user = User::find($id);
        $roles = Role::all();
        $permissions = Permission::all();
        return view('admin.roleUsers.show', compact('user','roles','permissions'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
           'permissions' => 'required|array',
           'roles'       => 'required|array',
        ]);
        try {
            $user = User::find($id);
            $user->permission()->sync($request->permissions);
            $user->role()->sync($request->roles);
            Alert::success('عملیات','با موفقیت انجام شد');
            return back();
        } catch (\Exception $e)
        {
            Alert::error('خطا','متاسفانه مشکلی بوجود آمده است');
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
