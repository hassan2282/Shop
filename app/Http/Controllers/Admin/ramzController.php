<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ramzController extends Controller
{
    public function index()
    {
        return view('admin.ramz');
    }

    public function confirm(Request $request)
    {
        $request->validate([
           'password' => 'required'
        ],[
            'password.required' => 'رمز عبور را وارد کنید',
        ]);
        if ($request->password == 'admin')
        {
            return redirect(route('admin'));
        }else{
            Alert::error('خطا','رمز عبور وارد شده اشتباه است');
            return back();
        }
    }
}
