<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('home.parts.style')
    <title>تغییر رمز عبور</title>

</head>
<body class="font-YekanBakh-Regular text-sm bg-slate-50">
<section class="h-screen px-4 flex items-center">
    <div class="container mx-auto max-w-screen-lg">
        <div class="bg-white rounded-2xl overflow-hidden">
            <div class="flex flex-col md:flex-row gap-8">
                <div class="flex-1 p-8 md:p-4 lg:p-20 lg:pb-0">
                    @include('validation.validation')
                    <form action="{{route('password.update')}}" method="post">
                        @csrf
                        <input type="hidden" name="token" value="{{ $request->route('token') }}">
                        <h2 class="text-3xl font-YekanBakh-ExtraBlack my-4">فراموشی رمز عبور</h2>
                        <a href="/" class="btn">بازگشت به صفحه اصلی</a>
                        <label class="label">
                            <span class="label-text-alt">ایمیل:</span>
                        </label>
                        <input type="email" name="email" class="input input-bordered w-full my-2" value="{{$request->email}}" required/>
                        <label class="label">
                            <span class="label-text-alt">رمز عبور:</span>
                        </label>
                        <input type="password" name="password" class="input input-bordered w-full my-2" required/>
                        <label class="label">
                            <span class="label-text-alt">تکرار رمز عبور:</span>
                        </label>
                        <input type="password" name="password_confirmation" class="input input-bordered w-full my-2" required/>
                        <button class="btn bg-stone-800 hover:bg-stone-900 text-white w-full my-4">تغییر رمز عبور</button>
                    </form>
                    <div class="divider my-8"></div>
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

{{--        <form method="POST" action="{{ route('password.update') }}">--}}
{{--            @csrf--}}
{{--            <input type="hidden" name="token" value="{{ $request->route('token') }}">--}}

{{--            <div class="block">--}}
{{--                <x-label for="email" value="{{ __('Email') }}" />--}}
{{--                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />--}}
{{--            </div>--}}

{{--            <div class="mt-4">--}}
{{--                <x-label for="password" value="{{ __('Password') }}" />--}}
{{--                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />--}}
{{--            </div>--}}

{{--            <div class="mt-4">--}}
{{--                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />--}}
{{--                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />--}}
{{--            </div>--}}

{{--            <div class="flex items-center justify-end mt-4">--}}
{{--                <x-button>--}}
{{--                    {{ __('Reset Password') }}--}}
{{--                </x-button>--}}
{{--            </div>--}}
{{--        </form>--}}
{{--    </x-authentication-card>--}}
{{--</x-guest-layout>--}}
