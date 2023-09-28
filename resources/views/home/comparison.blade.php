@extends('home.layouts.main')
@section('title','Comparison')
@section('content')
    <section class="my-14 mt-4 px-4">
        <div class="container mx-auto max-w-screen-xl">
            <div class="bg-white p-4 rounded-3xl mb-4">
                <div class="text-sm breadcrumbs">
                    <ul>
                        <li><a>خانه</a></li>
                        <li>مقاسه محصول</li>
                        <li>
                            <a class="btn"
                                style="width:80%;background-color:  #ff002f;color: white"
                                href="{{route('ComparisonDelete')}}">حذف همه محصولات
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="bg-white rounded-3xl p-4">
                <div class="flex flex-col w-full md:flex-row">
                    @if($p != null)
                        @foreach($p as $item)
                            <div class="grid flex-grow card p-4 rounded-box place-items-center border">
                                <div class="flex items-center gap-4 border-b mb-4 pb-4">
                                    <div>
                                        <img class="w-28 rounded-2xl" src="{{asset('/adm/products/images/'.$item->images[0])}}" alt="">
                                    </div>
                                    <div>
                                        <a href="{{route('single-product',$item)}}"><h3 class="font-YekanBakh-ExtraBold text-base">{{$item->name}}</h3></a>
                                        <div class="flex justify-center gap-4 text-base mt-4">
                                            <span class="line-through">{{$item->prise+100000}} تومان</span>
                                            <span class="text-yellow-500">{{$item->prise}} تومان</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="overflow-x-auto">
                                    <table class="table table-zebra">
                                        <tbody>
                                        <!-- row 1 -->
                                        <tr>
                                            <th>تعداد فروش</th>
                                            <td>{{$item->id}}عدد</td>
                                        </tr>
                                        <!-- row 2 -->
                                        <tr>
                                            <th>مدل:</th>
                                            <td>{{$item->model}}</td>
                                        </tr>
                                        <!-- row 3 -->
                                        <tr>
                                            <th>رنگ:</th>
                                            <td>{{$item->color}}</td>
                                        </tr>
                                        <tr>
                                            <th>منبع تغذیه:</th>
                                            <td>{{$item->power}}</td>
                                        </tr>
                                        <tr>
                                            <th>وزن:</th>
                                            <td>{{$item->weight}} گرم</td>
                                        </tr>
                                        <tr>
                                            <th>ولتاژ:</th>
                                            <td>{{$item->voltage}} ولت</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="my-8 flex">
                                    <a class="btn" style="background-color: #f1c102;color: white" href="{{route('single-product',$item)}}">مشاهده و خرید</a>
                                </div>
                            </div>
                            <div class="divider lg:divider-horizontal">با</div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection()
