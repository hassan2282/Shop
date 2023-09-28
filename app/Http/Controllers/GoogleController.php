<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    public function index()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callback()
    {
        try {
            $googleSendUser = Socialite::driver('google')->user();
            $user = User::where('email',$googleSendUser->email)->first();
            if ($user)
            {
                auth()->loginUsingId($user->id);
                return redirect('/');
            }
            else
            {
                $newUser = User::create([
                    'name'      => $googleSendUser->name,
                    'email'     => $googleSendUser->email,
                    'password'  => bcrypt(Str::random(20)),
                ]);
                auth()->loginUsingId($newUser->id);
                return redirect('/');
            }
        }
        catch (\Exception $exception){
            return 'متاسفانه خطایی هنگام ورود بوجود آمده است';
        }
    }
}
