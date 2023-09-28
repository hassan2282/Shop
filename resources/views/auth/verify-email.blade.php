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
                    <form action="{{ route('verification.send') }}" method="post">
                        @csrf
                        @if (session('status') == 'verification-link-sent')
                            <div class="mb-4 font-medium text-sm text-green-600">
                                {{ __('A new verification link has been sent to the email address you provided in your profile settings.') }}
                            </div>
                        @endif
                        <a href="/" class="btn">بازگشت به صفحه اصلی / خانه</a>
                        <h4 class="text-2xl font-YekanBakh my-4">لطفا ایمیل خود را وارد کنید</h4>
                        <label class="label">
                            <span class="label-text-alt">ایمیل:</span>
                        </label>
                        <input type="email" name="email" class="input input-bordered w-full my-2" required/>
                        <button class="btn btn-default hover:bg-stone-500  w-full my-4">ورود</button>
                    </form>
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
{{--            {{ __('Before continuing, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}--}}
{{--        </div>--}}

{{--        @if (session('status') == 'verification-link-sent')--}}
{{--            <div class="mb-4 font-medium text-sm text-green-600">--}}
{{--                {{ __('A new verification link has been sent to the email address you provided in your profile settings.') }}--}}
{{--            </div>--}}
{{--        @endif--}}

{{--        <div class="mt-4 flex items-center justify-between">--}}
{{--            <form method="POST" action="{{ route('verification.send') }}">--}}
{{--                @csrf--}}

{{--                <div>--}}
{{--                    <x-button type="submit">--}}
{{--                        {{ __('Resend Verification Email') }}--}}
{{--                    </x-button>--}}
{{--                </div>--}}
{{--            </form>--}}

{{--            <div>--}}
{{--                <a--}}
{{--                    href="{{ route('profile.show') }}"--}}
{{--                    class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"--}}
{{--                >--}}
{{--                    {{ __('Edit Profile') }}</a>--}}

{{--                <form method="POST" action="{{ route('logout') }}" class="inline">--}}
{{--                    @csrf--}}

{{--                    <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 ml-2">--}}
{{--                        {{ __('Log Out') }}--}}
{{--                    </button>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </x-authentication-card>--}}
{{--</x-guest-layout>--}}
