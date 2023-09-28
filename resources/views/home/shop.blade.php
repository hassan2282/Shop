@extends('home.layouts.main')
@section('title','Shop')
@section('content')
    <section class="my-14 mt-4 px-4">
        <div class="container mx-auto max-w-screen-xl">
            <div class="bg-white p-4 rounded-3xl mb-4">
                <div class="text-sm breadcrumbs">
                    <ul>
                        <li><a>خانه</a></li>
                        <li><a>دسته بندی</a></li>
                        <li>فروشگاه</li>
                    </ul>
                </div>
            </div>
            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-12 lg:col-span-3 order-2 lg:order-1">
                    <div class="bg-white rounded-3xl mb-4 p-4">
                        <h3 class="font-YekanBakh-ExtraBold text-base">فیلتر بر اساس قیمت:</h3>
                        <div class="my-4">
                            <input type="range" min="0" max="100" value="40" class="range range-warning" />
                        </div>
                        <span>قیمت تا {{max($products->pluck('prise')->toArray())}} هزار تومان</span>

                    </div>
                    <div class="bg-white rounded-3xl mb-4 p-4">
                        <h3 class="font-YekanBakh-ExtraBold text-base">دسته های محصولات:</h3>
                        <div class="my-4">
                            <ul class="menu">
                                <x-simple-categories :categories="$categories"/>
                            </ul>
                        </div>
                    </div>
                    <div class="bg-white rounded-3xl p-4">
                        <h3 class="font-YekanBakh-ExtraBold text-base">فیلتر براساس برند:</h3>
                        <div class="flex flex-col mt-4 gap-4">
                            <div class="grid items-center justify-between">
                                @foreach($products as $product)
                                    <div class="flex justify-between my-2">
                                        <input type="radio" name="" class="radio radio-warning" />
                                        <span>{{$product->model}}</span>
                                    </div>
                                @endforeach
                                </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 lg:col-span-9 order-1 lg:order-2">

                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">

                        @foreach($products as $product)

                            <div class="bg-white rounded-3xl leading-10 p-4">
                                <a href="{{route('single-product', $product->id)}}" class="flex flex-col items-center justify-center">
                                    <img class="mb-4" src="{{asset('/adm/products/images/'. $product->images[0])}}" alt="">
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
                        @endforeach
                    </div>
                    <div class="flex justify-center mt-10" dir="ltr">
                        <div class="join">
                            <button class="join-item btn">«</button>
                            <button class="join-item btn">صفحه 22</button>
                            <button class="join-item btn">»</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
