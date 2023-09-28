
<section class="bg-white px-4">
    <div class="container mx-auto max-w-screen-xl">
        <div class="flex items-center justify-between gap-4 lg:gap-40 py-6">
            <div class="lg:hidden leading-none z-10">
                <div class="drawer">
                    <input id="my-drawer-4" type="checkbox" class="drawer-toggle" />
                    <div class="drawer-content">
                        <label for="my-drawer-4" class="swap swap-rotate drawer-button">

                            <!-- this hidden checkbox controls the state -->
                            <input type="checkbox" />

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 stroke-black swap-off fill-current">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 stroke-black swap-on fill-current">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>

                        </label>
                    </div>
                    <div class="drawer-side">
                        <label for="my-drawer-4" class="drawer-overlay"></label>
                        <ul class="menu p-4 w-80 h-full bg-base-200 text-base-content">
                            <div class="drawer-content text-left">
                                <label for="my-drawer-4" class="swap swap-rotate drawer-button">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </label>
                            </div>
                            <li><a href="/">صفحه اصلی</a></li>
                            <li><a href="{{route('shop')}}">فروشگاه</a></li>
                            <li><a href="{{route('checkout')}}">جزئیات پرداخت</a></li>
                            <li><a href="{{route('comparison')}}">مقایسه محصول</a></li>
                            <li><a href="{{route('blog')}}">وبلاگ</a></li>
                            <li><a href="{{route('about-us')}}">درباره ما</a></li>
                            <li><a href="{{route('contact-us')}}">تماس با ما</a></li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="flex items-center lg:flex-1 gap-8">
                <div><a href="/"><img src="{{asset('/assets/images/logo.png')}}" alt=""></a></div>
                <div class="hidden lg:block form-control w-full">
                    <div class="relative">
                        <form action="">
                            <input type="search" name="search" value="{{request('search')}}" placeholder="لطفا فقط در بخش فروشگاه و وبلاگ از جست و جو استفاده کنید ..." class="input input-bordered w-full placeholder:text-sm" />
                            <button type="submit" class="btn absolute top-0 left-0 rounded-r-none">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="flex items-center gap-6">
                <div>
                    <a href="{{route('question')}}"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 5.25h.008v.008H12v-.008z" />
                        </svg>
                    </a>
                </div>
                <div style="display: flex">
                    @if(auth()->check() && auth()->user()->isAdmin == 1 || auth()->check() && auth()->user()->isVendor == 1 )
                        <a class="btn" style="color:#ffae00" href="{{route('ramz')}}">Admin panel</a>
                    @endif
                </div>
                @if(!auth()->check())
                <div class="hidden lg:block"><a href="{{route('login')}}">ورود</a></div>
                    <a href="{{route('register')}}">ثبت نام
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 lg:hidden">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                        </svg>
                    </a>
                @else
                    <a class="btn btn-default">{{auth()->user()->name}}</a>
                    <form action="{{route('logout')}}" method="post">
                        @csrf
                        <button class="btn" style="background-color:#f6c004;">خروج</button>
                    </form>
                @endif
                <div class="indicator">
                    <span class="indicator-item badge bg-yellow-400">@if(session('card') != null) {{count(session('card'))}} @endif </span>
                    <a href="{{route('card')}}" class="p-1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="flex justify-between items-center pb-4">
            <div class="block lg:hidden form-control w-full">
                <div class="relative">
                    <input type="text" placeholder="جستجو کنید در ترازو ..." class="input input-bordered w-full placeholder:text-sm" />
                    <button class="btn absolute top-0 left-0 rounded-r-none">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                        </svg>

                    </button>
                </div>
            </div>
            <div class="flex items-center gap-8">
                <div class="hidden lg:block">
                    <ul class="flex gap-x-10">
                        <li><a href="/">صفحه اصلی</a></li>
                        <li><a href="{{route('shop')}}">فروشگاه</a></li>
                        <li><a href="{{route('comparison')}}">مقایسه محصول
                                @if(session()->get('item') !== null)
                                    <span style="color: white;background-color: red;border-radius: 20%;padding-left: 6px;padding-right: 6px">{{count(session()->get('item'))}}</span>
                                @endif
                            </a>
                        </li>
                        <li><a href="{{route('blog')}}">وبلاگ</a></li>
                        <li><a href="{{route('about-us')}}">درباره ما</a></li>
                        <li><a href="{{route('contact-us')}}">تماس با ما</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

