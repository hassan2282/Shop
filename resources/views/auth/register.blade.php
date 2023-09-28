<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('home.parts.style')
    <title>ثبت نام</title>

</head>

<body class="font-YekanBakh-Regular text-sm bg-slate-50">
<section class="px-4 flex items-center">
    <div class="container mx-auto max-w-screen-lg">
        <div class="bg-white rounded-2xl overflow-hidden">
            <div class="flex flex-col md:flex-row gap-8">
                <div class="flex-1 p-8 md:p-4 lg:p-20 lg:pb-0">
                    <form action="{{route('register')}}" method="POST">
                        @include('validation.validation')
                        @csrf
                        <a href="/" class="btn">بازگشت به صفحه اصلی / خانه</a>
                        <a href="{{route('google')}}" class="btn text-white" style="background-color: #fc143e">ورود با اطلاعات اکانت گوگل</a>

                        <h2 class="text-3xl font-YekanBakh-ExtraBlack my-4">ثبت نام</h2>
                        <label class="label">
                            <span class="label-text-alt">نام و نام خانوادگی:</span>
                        </label>
                        <input type="text" name="name" class="input input-bordered w-full my-2"  required/>
                        <label class="label">
                            <span class="label-text-alt">ایمیل:</span>
                        </label>
                        <input type="email" name="email" class="input input-bordered w-full my-2" required />
                        <label class="label">
                            <span class="label-text-alt">پسورد:</span>
                        </label>
                        <input type="password" name="password" class="input input-bordered w-full my-2" required />
                        <label class="label">
                            <span class="label-text-alt">پسورد:</span>
                        </label>
                        <input type="password" name="password_confirmation" class="input input-bordered w-full my-2" required />

                        <div class="g-recaptcha" data-sitekey="{{env('RECAPTCHA_SITE_KEY')}}"></div>
                             <button class="btn btn-default hover:bg-stone-500  w-full my-4">ثبت نام</button>
                    </form>
                    <p class="text-center my-4">قبلا ثبت نام کرده اید؟ <a href="{{route('login')}}">وارد شوید</a></p>
                </div>
                <div class="hidden md:block">
                    <img class="bg-cover" src="{{asset('/assets/images/sign-up.jpg')}}" alt="">
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

{{--        <form method="POST" action="{{ route('register') }}">--}}
{{--            @csrf--}}

{{--            <div>--}}
{{--                <x-label for="name" value="{{ __('Name') }}" />--}}
{{--                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />--}}
{{--            </div>--}}

{{--            <div class="mt-4">--}}
{{--                <x-label for="email" value="{{ __('Email') }}" />--}}
{{--                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />--}}
{{--            </div>--}}

{{--            <div class="mt-4">--}}
{{--                <x-label for="password" value="{{ __('Password') }}" />--}}
{{--                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />--}}
{{--            </div>--}}

{{--            <div class="mt-4">--}}
{{--                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />--}}
{{--                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />--}}
{{--            </div>--}}

{{--            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())--}}
{{--                <div class="mt-4">--}}
{{--                    <x-label for="terms">--}}
{{--                        <div class="flex items-center">--}}
{{--                            <x-checkbox name="terms" id="terms" required />--}}

{{--                            <div class="ml-2">--}}
{{--                                {!! __('I agree to the :terms_of_service and :privacy_policy', [--}}
{{--                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',--}}
{{--                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',--}}
{{--                                ]) !!}--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </x-label>--}}
{{--                </div>--}}
{{--            @endif--}}

{{--            <div class="flex items-center justify-end mt-4">--}}
{{--                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">--}}
{{--                    {{ __('Already registered?') }}--}}
{{--                </a>--}}

{{--                <x-button class="ml-4">--}}
{{--                    {{ __('Register') }}--}}
{{--                </x-button>--}}
{{--            </div>--}}
{{--        </form>--}}
{{--    </x-authentication-card>--}}
{{--</x-guest-layout>--}}
