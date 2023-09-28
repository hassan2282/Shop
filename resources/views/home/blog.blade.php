@extends('home.layouts.main')
@section('title','Blog')
@section('content')
    <section class="my-14 mt-4 px-4">

        <div class="container mx-auto max-w-screen-xl">
            <div class="bg-white p-4 rounded-3xl mb-4">
                <div class="text-sm breadcrumbs">
                    <ul>
                        <li><a>خانه</a></li>
                        <li><a>دسته بندی</a></li>
                        <li>وبلاگ</li>
                    </ul>
                </div>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 mb-8">
                <div class="bg-white p-4 rounded-3xl">
                    <div class="relative">
                        <a href="single-page.html"><img class="rounded-2xl" src="{{asset('/assets/images/blog-1.jpg')}}" alt=""></a>
                        <div class="absolute top-4 left-4 bg-white border-t-4 border-yellow-400 p-2 px-3 rounded-xl">
                            <div class="flex flex-col">
                                <span class="font-YekanBakh-ExtraBold text-2xl">26</span>
                                <span class="font-YekanBakh-Bold">خرداد</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-between items-center mt-4">
                        <div>
                            <a href="single-page.html"><h3 class="font-YekanBakh-ExtraBold text-base">راهنمای خرید انواع مته</h3></a>
                        </div>
                        <div>
                            <a class="flex items-center" href="single-page.html">
                                <span class="ml-2">بیشتر</span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15m0 0l6.75 6.75M4.5 12l6.75-6.75" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-4 rounded-3xl">
                    <div class="relative">
                        <a href="single-page.html"><img class="rounded-2xl" src="{{asset('/assets/images/blog-2.jpg')}}" alt=""></a>
                        <div class="absolute top-4 left-4 bg-white border-t-4 border-yellow-400 p-2 px-3 rounded-xl">
                            <div class="flex flex-col">
                                <span class="font-YekanBakh-ExtraBold text-2xl">27</span>
                                <span class="font-YekanBakh-Bold">خرداد</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-between items-center mt-4">
                        <div>
                            <a href="single-page.html"><h3 class="font-YekanBakh-ExtraBold text-base">تعمیر قلاب ماهیگیری</h3></a>
                        </div>
                        <div>
                            <a class="flex items-center" href="single-page.html">
                                <span class="ml-2">بیشتر</span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15m0 0l6.75 6.75M4.5 12l6.75-6.75" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-4 rounded-3xl">
                    <div class="relative">
                        <a href="single-page.html"><img class="rounded-2xl" src="{{asset('/assets/images/blog-3.jpg')}}" alt=""></a>
                        <div class="absolute top-4 left-4 bg-white border-t-4 border-yellow-400 p-2 px-3 rounded-xl">
                            <div class="flex flex-col">
                                <span class="font-YekanBakh-ExtraBold text-2xl">8</span>
                                <span class="font-YekanBakh-Bold">خرداد</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-between items-center mt-4">
                        <div>
                            <a href="single-page.html"><h3 class="font-YekanBakh-ExtraBold text-base">تمیزکردن لوازم کارگاهی</h3></a>
                        </div>
                        <div>
                            <a class="flex items-center" href="single-page.html">
                                <span class="ml-2">بیشتر</span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15m0 0l6.75 6.75M4.5 12l6.75-6.75" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-4 rounded-3xl">
                    <div class="relative">
                        <a href="single-page.html"><img class="rounded-2xl" src="{{asset('/assets/images/blog-4.jpg')}}" alt=""></a>
                        <div class="absolute top-4 left-4 bg-white border-t-4 border-yellow-400 p-2 px-3 rounded-xl">
                            <div class="flex flex-col">
                                <span class="font-YekanBakh-ExtraBold text-2xl">7</span>
                                <span class="font-YekanBakh-Bold">خرداد</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-between items-center mt-4">
                        <div>
                            <a href="single-page.html"><h3 class="font-YekanBakh-ExtraBold text-base">قدرت انواع دریل ها</h3></a>
                        </div>
                        <div>
                            <a class="flex items-center" href="single-page.html">
                                <span class="ml-2">بیشتر</span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15m0 0l6.75 6.75M4.5 12l6.75-6.75" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-4 rounded-3xl">
                    <div class="relative">
                        <a href="single-page.html"><img class="rounded-2xl" src="{{asset('/assets/images/blog-5.jpg')}}" alt=""></a>
                        <div class="absolute top-4 left-4 bg-white border-t-4 border-yellow-400 p-2 px-3 rounded-xl">
                            <div class="flex flex-col">
                                <span class="font-YekanBakh-ExtraBold text-2xl">5</span>
                                <span class="font-YekanBakh-Bold">خرداد</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-between items-center mt-4">
                        <div>
                            <a href="single-page.html"><h3 class="font-YekanBakh-ExtraBold text-base">ایمنی های هنگام کار</h3></a>
                        </div>
                        <div>
                            <a class="flex items-center" href="single-page.html">
                                <span class="ml-2">بیشتر</span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15m0 0l6.75 6.75M4.5 12l6.75-6.75" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-4 rounded-3xl">
                    <div class="relative">
                        <a href="single-page.html"><img class="rounded-2xl" src="{{asset('/assets/images/blog-6.jpg')}}" alt=""></a>
                        <div class="absolute top-4 left-4 bg-white border-t-4 border-yellow-400 p-2 px-3 rounded-xl">
                            <div class="flex flex-col">
                                <span class="font-YekanBakh-ExtraBold text-2xl">30</span>
                                <span class="font-YekanBakh-Bold">خرداد</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-between items-center mt-4">
                        <div>
                            <a href="single-page.html"><h3 class="font-YekanBakh-ExtraBold text-base">بهترین مدل آچارها</h3></a>
                        </div>
                        <div>
                            <a class="flex items-center" href="single-page.html">
                                <span class="ml-2">بیشتر</span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15m0 0l6.75 6.75M4.5 12l6.75-6.75" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-center mt-10">
                <div class="join">
                    <button class="join-item btn">«</button>
                    <button class="join-item btn">صفحه 22</button>
                    <button class="join-item btn">»</button>
                </div>
            </div>
        </div>
    </section>
@endsection()
