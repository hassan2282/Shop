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
            <form action="{{route('zarinpalpay', $order->id)}}" method="post">
                @csrf
                @include('validation.validation')
                    <div class="col-span-12 md:col-span-3">
                        <div class="bg-white rounded-3xl p-8">
                            <div class="flex flex-col font-YekanBakh-ExtraBold  text-lg">
                                <div class="flex items-center justify-between p-4 bg-yellow-100 rounded-lg">
                                    <span>مجموع قیمت محصولات:</span>
                                    <span>{{number_format($order->total-30000)}}</span>
                                </div>
                                <div class="flex items-center justify-between p-4">
                                    <span>هزینه ارسال:</span>
                                    <span> 30.000 </span>
                                </div>
                                <div class="flex items-center justify-between p-4 bg-yellow-100 rounded-lg">
                                    <span>شناسه سفارش:</span>
                                    <span>{{$order->id}}</span>
                                </div>
                                <div class="flex items-center justify-between p-4">
                                    <span>مبلغ نهایی:</span>
                                    <span>{{number_format($order->total)}}</span>
                                </div>
                                <button type="submit" class="btn bg-red-500 hover:bg-stone-900 text-white">اتصال به درگاه پرداخت</button>
                            </div>
                        </div>
                    </div>
            </form>
        </div>
    </div>
@endsection
