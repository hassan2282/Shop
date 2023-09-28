@extends('admin.layouts.main')
@section('title','Create New Product')
@section('content')
    <div class="content-page" dir="rtl">
        <div class="container-fluid">
            <div class="text-center">
                <h3 class="text-secondary">ثبت محصول جدید</h3>
            </div>
            <form class="form-horizontal p-4" action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
                @include('validation.validation')
                @csrf
                <div class="form-row my-2">
                    <div class="col">
                        <label class="la-pull-right">نام محصول</label>
                        <input type="text" name="name" class="form-control" placeholder="*نام محصول" required>
                    </div>
                    <div class="col">
                        <label class="la-pull-right">قیمت</label>
                        <input type="number" min="1000" max="10000000" name="prise" class="form-control" placeholder="*قیمت به تومان" required>
                    </div>
                </div>
                <div class="form-row my-2">
                    <div class="col">
                        <label class="la-pull-right">وزن دستگاه</label>
                        <input type="number" name="weight" min="10" max="15000" class="form-control" placeholder="وزن دستگاه به گرم" required>
                    </div>
                    <div class="col">
                        <label class="la-pull-right">ولتاژ دستگاه</label>
                        <input type="number" min="10" max="220" name="voltage" class="form-control"  placeholder="ولتاژ دستگاه">
                    </div>
                </div>
                <div class="form-row my-2">
                    <div class="col">
                        <label class="la-pull-right">مدل دستگاه</label>
                        <select class="form-control" name="model" required>
                            <option value="رونیکس" selected="">رونیکس</option>
                            <option value="صبا">صبا</option>
                            <option value="آروا">آروا</option>
                            <option value="جاب">جاب</option>
                            <option value="ایران ترانس">ایران ترانس</option>
                        </select>
                    </div>
                    <div class="col">
                        <label class="la-pull-right">منبع تغزیه</label>
                        <select class="form-control" name="power">
                            <option value="battery">باتری</option>
                            <option value="electric">برق شهری</option>
                            <option value="charge">شارژی</option>
                            <option value="sun">خورشیدی</option>
                        </select>
                    </div>
                </div>
                <div class="form-row my-2">
                    <div class="col">
                        <label class="la-pull-right" for="exampleInputcolor">رنگ محصول </label>
                        <input type="color" name="color" class="form-control" id="exampleInputcolor" value="#4788ff" required>
                    </div>
                    <div class="col">
                        <div class="input-group mt-5">
                            <div class="form-coltrol">
                                <input type="file" name="images[]" class="custom-file-input" id="inputGroupFile02" multiple required>
                                <label class="custom-file-label" for="inputGroupFile02">تصاویر محصول</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-row my-2 form-group">
                    <label class="control-label" for="select2">اقلام همراه</label>
                    <select class="js-example-basic-multiple form-control" name="items[]" id="select2" multiple="multiple" required>
                        <option value="راهنما">دفترچه راهنما</option>
                        <option value="cable">کابل</option>
                        <option value="charger">شارژر</option>
                        <option value="mate">مته</option>
                        <option value="glove">دستکش</option>
                        <option value="mask">ماسک</option>
                        <option value="ferche">فرچه</option>
                        <option value="battery">باتری</option>
                        <option value="josh">میله جوش</option>
                        <option value="sar mate">سر مته</option>
                        <option value="bag">کیف</option>
                        <option value="card">کارت گارانتی</option>
                        <option value="glass">عینک</option>
                    </select>
                </div>
                <div class="col">
                    <label class="la-pull-right">دسته بندی مربوطه</label>
                    <select class="form-control" name="categories[]" required>
                        @foreach($categories as $category)
                            <option value="{{$category->name}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group my-2">
                    <label class="exampleFormControlTextarea1 la-pull-right">*لطفا توضیحات را به صورت کامل بنویسید</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="body" rows="3" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-block mb-5">ارسال</button>
            </form>
        </div>
    </div>
@endsection()
