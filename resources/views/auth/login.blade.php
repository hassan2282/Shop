<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('home.parts.style')
    <title>ورود</title>

</head>
<body class="font-YekanBakh-Regular text-sm bg-slate-50">
<section class="h-screen px-4 flex items-center">
    <div class="container mx-auto max-w-screen-lg">
        <div class="bg-white rounded-2xl overflow-hidden">
            <div class="flex flex-col md:flex-row gap-8">
                <div class="flex-1 p-8 md:p-4 lg:p-20 lg:pb-0">
                    @include('validation.validation')
                    <form action="{{route('login')}}" method="post">
                        @csrf
                        <a href="/" class="btn">بازگشت به صفحه اصلی / خانه</a>
                        <a href="{{route('google')}}" class="btn text-white" style="background-color: #fc143e">ورود با اطلاعات اکانت گوگل</a>
                            <h4 class="text-2xl font-YekanBakh my-4">ورود با ایمیل و پسورد</h4>
                        <label class="label">
                            <span class="label-text-alt">ایمیل:</span>
                        </label>
                        <input type="email" name="email" class="input input-bordered w-full my-2" required/>
                        <label class="label">
                            <span class="label-text-alt">پسورد:</span>
                        </label>
                        <input type="password" name="password" class="input input-bordered w-full my-2" required/>
                        <button class="btn btn-default hover:bg-stone-500  w-full my-4">ورود</button>
                    </form>
                    <p class="text-center my-4">رمز عبور خود را <a href="{{route('password.request')}}" class="btn-default">فراموش </a>کرده اید؟</p>
                    <div class="divider my-8">یا</div>
                    <p class="text-center my-4"><a href="{{route('register')}}">حساب کاربری ندارید !!!</a></p>
                </div>
                <div class="hidden md:block">
                    <img class="bg-cover" src="{{asset('/assets/images/login.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

</body>
</html>

{{--<x-guest-layout>--}}
{{--    <x-authentication-card>--}}
{{--        <x-slot name="logo">--}}
{{--            <x-authentication-card-logo />--}}
{{--        </x-slot>--}}

{{--        <x-validation-errors class="mb-4" />--}}

{{--        @if (session('status'))--}}
{{--            <div class="mb-4 font-medium text-sm text-green-600">--}}
{{--                {{ session('status') }}--}}
{{--            </div>--}}
{{--        @endif--}}

{{--        <form method="POST" action="{{ route('login') }}">--}}
{{--            @csrf--}}

{{--            <div>--}}
{{--                <x-label for="email" value="{{ __('Email') }}" />--}}
{{--                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />--}}
{{--            </div>--}}

{{--            <div class="mt-4">--}}
{{--                <x-label for="password" value="{{ __('Password') }}" />--}}
{{--                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />--}}
{{--            </div>--}}

{{--            <div class="block mt-4">--}}
{{--                <label for="remember_me" class="flex items-center">--}}
{{--                    <x-checkbox id="remember_me" name="remember" />--}}
{{--                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>--}}
{{--                </label>--}}
{{--            </div>--}}

{{--            <div class="flex items-center justify-end mt-4">--}}
{{--                @if (Route::has('password.request'))--}}
{{--                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">--}}
{{--                        {{ __('Forgot your password?') }}--}}
{{--                    </a>--}}
{{--                @endif--}}

{{--                <x-button class="ml-4">--}}
{{--                    {{ __('Log in') }}--}}
{{--                </x-button>--}}
{{--            </div>--}}
{{--        </form>--}}
{{--    </x-authentication-card>--}}
{{--</x-guest-layout>--}}
