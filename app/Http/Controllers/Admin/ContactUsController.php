<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreContactUsRequest;
use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index()
    {
        $contactUs = ContactUs::query();
        if ($key = \request('search'))
        {
            $contactUs->where('title','LIKE', "%{$key}%")
                ->orWhere('email','LIKE',"%{$key}%")
                ->orWhere('body','LIKE',"%{$key}%")
                ->orWhere('created_at','LIKE',"%{$key}%");
        }
        $contactUs = $contactUs->latest()->paginate(10);
        return view('admin.contactUs.index', compact('contactUs'));
    }

    public function store(StoreContactUsRequest $request)
    {
        $contactUs = new ContactUs($request->all());
        $contactUs->save();
        if($contactUs)
        {
            alert()->success('پیام شما','با موفقیت ارسال شد');
            return back();
        }else{
            alert()->error('خطا','متاسفانه مشکلی پیش اومده');
            return back();
        }
    }
}
