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
                    @if (session('status'))
                                <div class="mb-4 p-2 text-center" style=" background-color: #74ff00">
                                    {{ session('status') }}
                                </div>
                            @endif
                    @include('validation.validation')
                    <form action="{{route('password.email')}}" method="post">
                        @csrf
                        <a href="/" class="btn">بازگشت به صفحه اصلی / خانه</a>
                        <a href="/" class="btn text-white" style="background-color: #fc143e">ورود با اطلاعات اکانت گوگل</a>
                        <h2 class="text-3xl font-YekanBakh-ExtraBlack my-4">فراموشی رمز عبور</h2>
                        <label class="label">
                            <span class="label-text-alt">ایمیل:</span>
                        </label>
                        <input type="email" name="email" class="input input-bordered w-full my-2" required/>
                        <button class="btn bg-stone-800 hover:bg-stone-900 text-white w-full my-4">ارسال رمز عبور به ایمیل</button>
                    </form>
                    <p class="text-center my-4">ایمیل را با دقت وارد کنید</p>
                    <div class="divider my-8"></div>
                    <p class="text-center my-4"><a >نگران نباشید ! ما رمز عبور را به ایمیلتان ارسال می کنیم</a ></p>
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

{{--        <div class="mb-4 text-sm text-gray-600">--}}
{{--            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}--}}
{{--        </div>--}}

{{--        @if (session('status'))--}}
{{--            <div class="mb-4 font-medium text-sm text-green-600">--}}
{{--                {{ session('status') }}--}}
{{--            </div>--}}
{{--        @endif--}}

{{--        <x-validation-errors class="mb-4" />--}}

{{--        <form method="POST" action="{{ route('password.email') }}">--}}
{{--            @csrf--}}

{{--            <div class="block">--}}
{{--                <x-label for="email" value="{{ __('Email') }}" />--}}
{{--                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />--}}
{{--            </div>--}}

{{--            <div class="flex items-center justify-end mt-4">--}}
{{--                <x-button>--}}
{{--                    {{ __('Email Password Reset Link') }}--}}
{{--                </x-button>--}}
{{--            </div>--}}
{{--        </form>--}}
{{--    </x-authentication-card>--}}
{{--</x-guest-layout>--}}
