<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Psy\Util\Str;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('can:delete-user')->only('destroy');
        $this->middleware('can:edit-user')->only('edit');
        $this->middleware('can:create-user')->only('create');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::query();
        if( $key = \request('search'))
        {
            $users->where('name','LIKE',"%{$key}%")
                  ->orWhere('email','LIKE',"%{$key}%");
        }
        $users = $users->latest()->paginate();
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $userRequest)
    {
        $user = User::create([
            'name' => $userRequest->name,
            'email' => $userRequest->email,
            'password' => Hash::make($userRequest->password),
        ]);
        if($user)
        {
            Alert::success('کاربر جدید','با موفقیت افزوده شد');
            return back();
        }else{
            Alert::error('خطا','متاسفانه مشکلی پیش اومده');
            return back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserRequest $userRequest, User $user)
    {

            $update = $user->update([
                'name' => $userRequest->name,
                'email' => $userRequest->email,
                'password' => Hash::make($userRequest->password),
            ]);
            if($update)
            {
                Alert::success('کاربر','با موفقیت ویرایش شد');
                return back();
            }else{
                Alert::error('خطا','متاسفانه مشکلی پیش اومده');
                return back();
            }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $delete = $user->delete();
        if($delete)
        {
            Alert::success('کاربر','با موفقیت حذف شد');
            return back();
        }else{
            Alert::error('خطا','متاسفانه مشکلی پیش اومده');
            return back();
        }
    }
}
