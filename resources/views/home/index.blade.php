@extends('home.layouts.main')
@section('title','HOME | TARAZOO')
@section('content')
    <section class="px-4">
        <div class="container mx-auto max-w-screen-xl">
            <div class="swiper main-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img class="object-cover rounded-b-3xl w-full" src="{{asset('/assets/images/slider-1.jpg')}}" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img class="object-cover rounded-b-3xl w-full" src="{{asset('/assets/images/slider-2.jpg')}}" alt="">
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    <section class="my-14 px-4">
        <div class="container mx-auto max-w-screen-xl">
            <div class="text-center mb-8">
                <h2 class="font-YekanBakh-ExtraBlack text-3xl">دسته بندی محصولات</h2>
            </div>
            <div class="swiper cat-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="border border-slate-200 bg-white rounded-3xl leading-10">
                            <a href="{{route('shop')}}" class="flex flex-col items-center justify-center p-4">
                                <img class="w-16 mb-4" src="{{asset('/assets/images/ca-1.png')}}" alt="">
                                <h3 class="font-YekanBakh-ExtraBold text-base">سنگ فرز</h3>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="border border-slate-200 bg-white rounded-3xl leading-10">
                            <a href="{{route('shop')}}" class="flex flex-col items-center justify-center p-4">
                                <img class="w-16 mb-4" src="{{asset('/assets/images/ca-2.png')}}" alt="">
                                <h3 class="font-YekanBakh-ExtraBold text-base">دریل شارژی</h3>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="border border-slate-200 bg-white rounded-3xl leading-10">
                            <a href="{{route('shop')}}" class="flex flex-col items-center justify-center p-4">
                                <img class="w-16 mb-4" src="{{asset('/assets/images/ca-3.png')}}" alt="">
                                <h3 class="font-YekanBakh-ExtraBold text-base">اره ساده</h3>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="border border-slate-200 bg-white rounded-3xl leading-10">
                            <a href="{{route('shop')}}" class="flex flex-col items-center justify-center p-4">
                                <img class="w-16 mb-4" src="{{asset('/assets/images/ca-4.png')}}" alt="">
                                <h3 class="font-YekanBakh-ExtraBold text-base">اره چکشی</h3>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="border border-slate-200 bg-white rounded-3xl leading-10">
                            <a href="{{route('shop')}}" class="flex flex-col items-center justify-center p-4">
                                <img class="w-16 mb-4" src="{{asset('/assets/images/ca-5.png')}}" alt="">
                                <h3 class="font-YekanBakh-ExtraBold text-base">پیچ گوشتی</h3>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="border border-slate-200 bg-white rounded-3xl leading-10">
                            <a href="{{route('shop')}}" class="flex flex-col items-center justify-center p-4">
                                <img class="w-16 mb-4" src="{{asset('/assets/images/ca-6.png')}}" alt="">
                                <h3 class="font-YekanBakh-ExtraBold text-base">اره دم روباهی</h3>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="border border-slate-200 bg-white rounded-3xl leading-10">
                            <a href="{{route('shop')}}" class="flex flex-col items-center justify-center p-4">
                                <img class="w-16 mb-4" src="{{asset('/assets/images/ca-7.png')}}" alt="">
                                <h3 class="font-YekanBakh-ExtraBold text-base">چکش</h3>
                            </a>
                        </div>
                    </div>

                </div>
                <div class="swiper-pagination"></div>

            </div>
        </div>
    </section>

    <section class="my-14 px-4">
        <div class="container mx-auto max-w-screen-xl">
            <div class="bg-yellow-500 rounded-3xl pt-10 pb-4">
                <div class="text-center mb-8">
                    <h2 class="font-YekanBakh-ExtraBlack text-3xl">پیشنهاد شگفت انگیز</h2>
                </div>
                <div class="grid grid-cols-12 gap-4 p-4">
                    <div class="col-span-12 lg:col-span-9">
                        <div class="swiper off-product">
                            <div class="swiper-wrapper">
                                @foreach($products as $product)
                                    <div class="swiper-slide">
                                        <div class="bg-white rounded-3xl leading-10 p-4">
                                            <div class="relative">
                                                <a href="{{route('single-product', $product->id)}}" class="flex flex-col items-center justify-center">
                                                    <img class="mb-4" src="{{asset('/adm/products/images/'. $product->images[0])}}" alt="">
                                                </a>
                                                <div class="bg-yellow-500 absolute top-2 right-2 rounded-full w-10 h-10">
                                                    <p class="flex items-center justify-center">30%</p>
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <a href="{{route('single-product', $product->id)}}"><h3 class="font-YekanBakh-ExtraBold text-base">{{$product->name}}</h3></a>
                                                <div class="flex justify-center gap-4 text-base mt-4">
                                                    <span class="line-through">{{number_format($product->prise)}} تومان</span>
                                                    <span class="text-yellow-500">{{number_format($product->prise+100000)}} تومان</span>
                                                </div>
                                            </div>
                                            <div class="flex justify-center gap-2 items-center mt-4">
                                                <a class="bg-yellow-500 p-2 text-white rounded-lg" href="{{route('sell', $product->id)}}">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                                                    </svg>
                                                </a>
                                                <a class="bg-yellow-500 p-2 text-white rounded-lg" href="{{route('compare', $product->id)}}">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12c0-1.232-.046-2.453-.138-3.662a4.006 4.006 0 00-3.7-3.7 48.678 48.678 0 00-7.324 0 4.006 4.006 0 00-3.7 3.7c-.017.22-.032.441-.046.662M19.5 12l3-3m-3 3l-3-3m-12 3c0 1.232.046 2.453.138 3.662a4.006 4.006 0 003.7 3.7 48.656 48.656 0 007.324 0 4.006 4.006 0 003.7-3.7c.017-.22.032-.441.046-.662M4.5 12l3 3m-3-3l-3 3" />
                                                    </svg>

                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                    <div class="hidden lg:block lg:col-span-3">
                        <div class="bg-stone-800 rounded-3xl p-4">
                            <div class="flex flex-col leading-8">
                                <p class="text-white text-center">با 30 درصد تخفیف شگفتانه محصول خود را خریداری کنید :)</p>
                                <div class="flex justify-center my-12">
                                    <img class="w-48" src="{{asset('/assets/images/off.png')}}" alt="">
                                </div>



                                <div class="grid grid-cols-4 gap-2 leading-4">
                                    <div class="flex flex-col text-center text-white bg-stone-900 px-2 py-4 rounded-2xl">
                      <span class="countdown font-YekanBakh-SemiBold text-3xl">
                        <span id="counterElement" style="--value:60;"></span>
                      </span>
                                        ثانیه
                                    </div>
                                    <div class="flex flex-col text-center text-white bg-stone-900 px-2 py-4 rounded-2xl">
                      <span class="countdown font-YekanBakh-SemiBold text-3xl">
                        <span style="--value:10;"></span>
                      </span>
                                        دقیقه
                                    </div>
                                    <div class="flex flex-col text-center text-white bg-stone-900 px-2 py-4 rounded-2xl">
                      <span class="countdown font-YekanBakh-SemiBold text-3xl">
                        <span style="--value:24;"></span>
                      </span>
                                        ساعت
                                    </div>
                                    <div class="flex flex-col text-center text-white bg-stone-900 px-2 py-4 rounded-2xl">
                      <span class="countdown font-YekanBakh-SemiBold text-3xl">
                        <span style="--value:4;"></span>
                      </span>
                                        روز
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="my-14 px-4">
        <div class="container mx-auto max-w-screen-xl">
            <div class="text-center mb-8">
                <h2 class="font-YekanBakh-ExtraBlack text-3xl">پرفروش ترین کالاها</h2>
            </div>
            <div class="swiper slider-product2">
                <div class="swiper-wrapper">
                    @foreach($products as $product)
                        <div class="swiper-slide">
                            <div class="bg-white rounded-3xl leading-10 relative p-4">
                                <div class="flex items-center justify-center">
                                    <div>
                                        <a href="{{route('single-product', $product->id)}}"> <img class="w-32" src="{{asset('/adm/products/images/'. $product->images[1])}}" alt=""></a>
                                    </div>
                                    <div>
                                        <a href="{{route('single-product', $product->id)}}"><h3 class="font-YekanBakh-ExtraBold text-base">{{$product->name}}</h3></a>
                                        <div class="flex justify-center gap-4 text-base mt-4">
                                            <span class="line-through">{{number_format($product->prise+100000)}} تومان</span>
                                            <span class="text-yellow-500">{{number_format($product->prise)}} تومان</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center text-sm justify-center gap-4">
                                    <div>موجودی: 7 از 20</div>
                                    <div><progress class="progress progress-warning w-48 md:w-56" value="70" max="100"></progress></div>
                                </div>

                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <section class="my-14 px-4">
        <div class="container mx-auto max-w-screen-xl">
            <img class="rounded-2xl" src="{{asset('/assets/images/pic.jpg')}}" alt="">
        </div>
    </section>

    <section class="my-14 px-4">
        <div class="container mx-auto max-w-screen-xl">
            <div class="text-center mb-8">
                <h2 class="font-YekanBakh-ExtraBlack text-3xl">جدیدترین محصولات</h2>
            </div>
            <div class="swiper slider-product1">
                <div class="swiper-wrapper">
                    @foreach($products as $product)
                        <div class="swiper-slide">
                            <div class="bg-white rounded-3xl leading-10 p-4">
                                <a href="{{route('single-product', $product->id)}}" class="flex flex-col items-center justify-center">
                                    <img class="mb-4" src="{{asset('/adm/products/images/' . $product->images[2])}}" alt="">
                                </a>
                                <div class="text-center">
                                    <a href="{{route('single-product', $product->id)}}"><h3 class="font-YekanBakh-ExtraBold text-base">{{$product->name}}</h3></a>
                                    <div class="flex justify-center gap-4 text-base mt-4">
                                        <span class="line-through">{{number_format($product->prise+100000)}} تومان</span>
                                        <span class="text-yellow-500">{{number_format($product->prise)}} تومان</span>
                                    </div>
                                    <div class="flex justify-center gap-2 items-center mt-4">
                                        <a class="bg-yellow-500 p-2 text-white rounded-lg" href="{{route('sell', $product->id)}}">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                                            </svg>
                                        </a>
                                        <a class="bg-yellow-500 p-2 text-white rounded-lg" href="{{route('compare', $product->id)}}">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12c0-1.232-.046-2.453-.138-3.662a4.006 4.006 0 00-3.7-3.7 48.678 48.678 0 00-7.324 0 4.006 4.006 0 00-3.7 3.7c-.017.22-.032.441-.046.662M19.5 12l3-3m-3 3l-3-3m-12 3c0 1.232.046 2.453.138 3.662a4.006 4.006 0 003.7 3.7 48.656 48.656 0 007.324 0 4.006 4.006 0 003.7-3.7c.017-.22.032-.441.046-.662M4.5 12l3 3m-3-3l-3 3" />
                                            </svg>

                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <section class="my-14 px-4">
        <div class="container mx-auto max-w-screen-xl">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <img class="rounded-3xl" src="{{asset('/assets/images/11.png')}}" alt="">
                </div>
                <div>
                    <img class="rounded-3xl" src="{{asset('/assets/images/12.png')}}" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="my-14 px-4">
        <div class="container mx-auto max-w-screen-xl">
            <div class="text-center mb-8">
                <h2 class="font-YekanBakh-ExtraBlack text-3xl">پیشنهاد های ترازو</h2>
            </div>
            <div class="swiper slider-product1">
                <div class="swiper-wrapper">
                    @foreach($products as $product)
                        <div class="swiper-slide">
                            <div class="bg-white rounded-3xl leading-10 p-4">
                                <a href="{{route('single-product', $product->id)}}" class="flex flex-col items-center justify-center">
                                    <img class="mb-4" src="{{asset('/adm/products/images/' . $product->images[0])}}" alt="">
                                </a>
                                <div class="text-center">
                                    <a href="{{route('single-product', $product->id)}}"><h3 class="font-YekanBakh-ExtraBold text-base">{{$product->name}}</h3></a>
                                    <div class="flex justify-center gap-4 text-base mt-4">
                                        <span class="line-through">{{number_format($product->prise+100000)}} تومان</span>
                                        <span class="text-yellow-500">{{number_format($product->prise)}} تومان</span>
                                    </div>
                                    <div class="flex justify-center gap-2 items-center mt-4">
                                        <a class="bg-yellow-500 p-2 text-white rounded-lg" href="{{route('sell', $product->id)}}">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                                            </svg>
                                        </a>
                                        <a class="bg-yellow-500 p-2 text-white rounded-lg" href="{{route('compare', $product->id)}}">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12c0-1.232-.046-2.453-.138-3.662a4.006 4.006 0 00-3.7-3.7 48.678 48.678 0 00-7.324 0 4.006 4.006 0 00-3.7 3.7c-.017.22-.032.441-.046.662M19.5 12l3-3m-3 3l-3-3m-12 3c0 1.232.046 2.453.138 3.662a4.006 4.006 0 003.7 3.7 48.656 48.656 0 007.324 0 4.006 4.006 0 003.7-3.7c.017-.22.032-.441.046-.662M4.5 12l3 3m-3-3l-3 3" />
                                            </svg>

                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <section class="my-14 px-4">
        <div class="container mx-auto max-w-screen-xl">
            <div class="text-center mb-8">
                <h2 class="font-YekanBakh-ExtraBlack text-3xl">خواندنی های جدید</h2>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                <div class="bg-white p-4 rounded-3xl">
                    <div class="relative">
                        <a href="{{route('single-page')}}"><img class="rounded-2xl" src="{{asset('/assets/images/blog-1.jpg')}}" alt=""></a>
                        <div class="absolute top-4 left-4 bg-white border-t-4 border-yellow-400 p-2 px-3 rounded-xl">
                            <div class="flex flex-col">
                                <span class="font-YekanBakh-ExtraBold text-2xl">26</span>
                                <span class="font-YekanBakh-Bold">خرداد</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-between items-center mt-4">
                        <div>
                            <a href="{{route('single-page')}}"><h3 class="font-YekanBakh-ExtraBold text-base">راهنمای خرید انواع مته</h3></a>
                        </div>
                        <div>
                            <a class="flex items-center" href="{{route('single-page')}}">
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
                        <a href="{{route('single-page')}}"><img class="rounded-2xl" src="{{asset('/assets/images/blog-2.jpg')}}" alt=""></a>
                        <div class="absolute top-4 left-4 bg-white border-t-4 border-yellow-400 p-2 px-3 rounded-xl">
                            <div class="flex flex-col">
                                <span class="font-YekanBakh-ExtraBold text-2xl">26</span>
                                <span class="font-YekanBakh-Bold">خرداد</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-between items-center mt-4">
                        <div>
                            <a href="{{route('single-page')}}"><h3 class="font-YekanBakh-ExtraBold text-base">تعمیر قلاب ماهیگیری</h3></a>
                        </div>
                        <div>
                            <a class="flex items-center" href="{{route('single-page')}}">
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
                        <a href="{{route('single-page')}}"><img class="rounded-2xl" src="{{asset('/assets/images/blog-3.jpg')}}" alt=""></a>
                        <div class="absolute top-4 left-4 bg-white border-t-4 border-yellow-400 p-2 px-3 rounded-xl">
                            <div class="flex flex-col">
                                <span class="font-YekanBakh-ExtraBold text-2xl">26</span>
                                <span class="font-YekanBakh-Bold">خرداد</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-between items-center mt-4">
                        <div>
                            <a href="{{route('single-page')}}"><h3 class="font-YekanBakh-ExtraBold text-base">تمیز کردن لوازم کارگاهی</h3></a>
                        </div>
                        <div>
                            <a class="flex items-center" href="#">
                                <span class="ml-2">بیشتر</span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15m0 0l6.75 6.75M4.5 12l6.75-6.75" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
