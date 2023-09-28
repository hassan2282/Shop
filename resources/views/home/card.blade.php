@extends('home.layouts.main')
@section('title','Contact-Us')
@section('content')
    <div class="my-14 mt-4 px-4">
        <div class="container mx-auto max-w-screen-xl">
            <div class="bg-white p-4 rounded-3xl mb-4">
                <div class="text-sm breadcrumbs">
                    <ul>
                        <li><a>خانه</a></li>
                        <li>سبد خرید</li>
                    </ul>
                </div>
            </div>
            <form action="{{route('order.store')}}" method="post">
                @csrf
                @include('validation.validation')
                <div class="bg-white rounded-3xl p-4">
                    <div class="grid grid-cols-2 gap-4">
                        <div class="form-control w-full">
                            <label class="label">
                                <span class="label-text-alt">نام:</span>
                            </label>
                            <input type="text" name="firstName" required class="input input-bordered w-full">

                        </div>
                        <div class="form-control w-full">
                            <label class="label">
                                <span class="label-text-alt">نام خانوادگی:</span>
                            </label>
                            <input type="text" name="lastName" required class="input input-bordered w-full">

                        </div>
                        <div class="form-control w-full">
                            <label class="label">
                                <span class="label-text-alt">کشور:</span>
                            </label>
                            <select class="select select-bordered" name="country" required>
                                <option selected="" value="iran">ایران</option>
                                <option value="turkey">ترکیه</option>
                                <option value="france">فرانسه</option>
                                <option value="usa">آمریکا</option>
                                <option value="uk">انگلیس</option>
                            </select>
                        </div>
                        <div class="form-control w-full">
                            <label class="label">
                                <span class="label-text-alt">استان:</span>
                            </label>
                            <input type="text" name="state" required class="input input-bordered w-full">

                        </div>
                        <div class="form-control w-full">
                            <label class="label">
                                <span class="label-text-alt">شهر:</span>
                            </label>
                            <input type="text" name="city" required class="input input-bordered w-full">

                        </div>
                        <div class="form-control w-full">
                            <label class="label">
                                <span class="label-text-alt">کدپستی:</span>
                            </label>
                            <input type="number" min="1000000000" max="9999999999" name="postalCode" required class="input input-bordered w-full">

                        </div>
                        <div class="form-control w-full">
                            <label class="label">
                                <span class="label-text-alt">تلفن:</span>
                            </label>
                            <input type="number" min="09000000000" max="09999999999" name="phone" required class="input input-bordered w-full">

                        </div>
                        <div class="form-control w-full">
                            <label class="label">
                                <span class="label-text-alt">ایمیل:</span>
                            </label>
                            <input type="email" name="email" readonly value="{{auth()->user()->email}}" class="input input-bordered w-full">

                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-12 gap-4 my-6">
                    <div class="col-span-12 md:col-span-9">
                        @if(session('card') !== null)
                            @foreach(session('card') as $id => $details)
                                <div class="bg-white rounded-3xl p-4 flex flex-col md:flex-row items-center justify-center mb-4 gap-16">
                                    <div>
                                        <img class="w-32 border rounded-2xl" src="{{asset('/adm/products/images/'.$details['photo'])}}" alt="">
                                    </div>
                                    <div class="leading-10">
                                        <h1 class="font-YekanBakh-ExtraBold text-base">{{$details['product_name']}}</h1>
                                    </div>
                                    <div class="flex gap-4 text-base mt-4">
                                        <span class="line-through">{{number_format($details['prise']+100000)}} تومان</span>
                                        <span class="text-yellow-500">{{number_format($details['prise'])}} تومان</span>
                                    </div>
                                    <div>
                                        <div class="number d-flex">
                                            <span class="minus p-4">تعداد:</span>
                                            <input type="text" value="{{$details['quantity']}}" class="input input-bordered text-center w-20" />
                                        </div>
                                    </div>
                                    <a href="{{route('sell.delete')}}" class="btn btn-close" aria-label="close">X</a>
                                </div>
                            @endforeach
                        @endif
                    </div>
                    <div class="col-span-12 md:col-span-3">
                        <div class="bg-white rounded-3xl p-8">
                            <div class="flex flex-col font-YekanBakh-ExtraBold  text-lg">
                                <div class="flex items-center justify-between p-4 bg-yellow-100 rounded-lg">
                                    <span>تعداد خرید:</span>
                                    <span>@if(session('card') !== null){{count(session('card'))}}@endif محصول</span>
                                </div>
                                <div class="flex items-center justify-between p-4">
                                    <span>مبلغ کل:</span>
                                    <span>@if(session('card') !== null){{number_format ($total , 0 , "." )}}@endif تومان </span>
                                </div>
                                <div class="flex items-center justify-between p-4 bg-yellow-100 rounded-lg">
                                    <span>هزینه ارسال:</span>
                                    <span>30.000</span>
                                </div>
                                    @csrf
                                    <div class="flex items-center justify-between p-4">
                                        <span>مبلغ نهایی:</span>
                                        <span>
                                            @if(session('card') !== null){{number_format($total+30000 , 0 , ".")}}@endif
                                        </span>
                                        <input type="hidden" class="form-control mr-2 text-center" name="total"
                                               value="@if(session('card') !== null){{$total+30000}}@endif" readonly />
                                    </div>
                                    <button type="submit" class="btn bg-red-500 hover:bg-stone-900 text-white">تایید نهایی</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
