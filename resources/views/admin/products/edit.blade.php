@extends('admin.layouts.main')
@section('title','Edit Product')
@section('content')
    <div class="content-page" dir="rtl">
        <div class="container-fluid">
            <div class="text-center">
                <h3 class="text-secondary">ثبت محصول جدید</h3>
            </div>
            <form class="form-horizontal p-4" action="{{route('product.update', $product)}}" method="post" enctype="multipart/form-data">
                @include('validation.validation')
                @method('PATCH')
                @csrf
                <div class="form-row my-2">
                    <div class="col">
                        <label class="la-pull-right">نام محصول</label>
                        <input type="text" name="name" class="form-control" value="{{$product->name}}" placeholder="*نام محصول" required>
                    </div>
                    <div class="col">
                        <label class="la-pull-right">قیمت</label>
                        <input type="number" min="1000" max="15000000" name="prise" value="{{$product->prise}}" class="form-control" placeholder="*قیمت به تومان" required>
                    </div>
                </div>
                <div class="form-row my-2">
                    <div class="col">
                        <label class="la-pull-right">وزن دستگاه</label>
                        <input type="number" name="weight" min="10" max="15000" value="{{$product->weight}}" class="form-control" placeholder="وزن دستگاه به گرم" required>
                    </div>
                    <div class="col">
                        <label class="la-pull-right">ولتاژ دستگاه</label>
                        <input type="number" min="10" max="220" name="voltage" value="{{$product->voltage}}" class="form-control"  placeholder="ولتاژ دستگاه" >
                    </div>
                </div>
                <div class="form-row my-2">
                    <div class="col">
                        <label class="la-pull-right">مدل دستگاه</label>
                        <select class="form-control" name="model" required>
                            <option value="{{$product->model}}" selected="">{{$product->model}}</option>
                            <option value="رونیکس">رونیکس</option>
                            <option value="صبا">صبا</option>
                            <option value="آروا">آروا</option>
                            <option value="جاب">جاب</option>
                            <option value="ایران ترانس">ایران ترانس</option>
                        </select>
                    </div>
                    <div class="col">
                        <label class="la-pull-right">منبع تغزیه</label>
                        <select class="form-control" name="power">
                            <option value="{{$product->power}}" selected="">{{$product->power}}</option>
                            <option value="battery">باتری</option>
                            <option value="electric">برق شهری</option>
                            <option value="charge">شارژی</option>
                            <option value="sun">خورشیدی</option>
                        </select>
                    </div>
                </div>
                <div class="form-row my-2">
                    <div class="col">
                        <label class="la-pull-right" for="exampleInputcolor">رنگ محصول</label>
                        <input type="color" name="color" class="form-control" id="exampleInputcolor" value="{{$product->color}}" required>
                    </div>
                    <div class="col">
                        <div class="input-group mt-5">
                            <div class="form-coltrol">
                                <input type="file" name="images[]" class="custom-file-input" id="inputGroupFile02" multiple >
                                <label class="custom-file-label" for="inputGroupFile02">تصاویر محصول</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-row my-2 form-group">
                    <label class="control-label" for="select2">اقلام همراه</label>
                    <select class="js-example-basic-multiple form-control" name="items[]" id="select2" multiple="multiple" required>
                        <option value="guide" {{in_array('guide', $product->items ) ? 'selected' : ''}}>دفترچه راهنما</option>
                        <option value="cable" {{in_array('cable', $product->items ) ? 'selected' : ''}}>کابل</option>
                        <option value="charger" {{in_array('charger', $product->items ) ? 'selected' : ''}}>شارژر</option>
                        <option value="mate" {{in_array('mate', $product->items ) ? 'selected' : ''}}>مته</option>
                        <option value="glove" {{in_array('glove', $product->items ) ? 'selected' : ''}}>دستکش</option>
                        <option value="mask" {{in_array('mask', $product->items ) ? 'selected' : ''}}>ماسک</option>
                        <option value="ferche" {{in_array('ferche', $product->items ) ? 'selected' : ''}}>فرچه</option>
                        <option value="battery" {{in_array('battery', $product->items ) ? 'selected' : ''}}>باتری</option>
                        <option value="josh" {{in_array('josh', $product->items ) ? 'selected' : ''}}>میله جوش</option>
                        <option value="sar mate" {{in_array('sar mate', $product->items ) ? 'selected' : ''}}>سر مته</option>
                        <option value="bag" {{in_array('bag', $product->items ) ? 'selected' : ''}}>کیف</option>
                        <option value="card" {{in_array('card', $product->items ) ? 'selected' : ''}}>کارت گارانتی</option>
                        <option value="glass" {{in_array('glass', $product->items ) ? 'selected' : ''}}>عینک</option>
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
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="body" rows="3" required>{{$product->body}}</textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-block mb-5">ارسال</button>
            </form>
        </div>
    </div>
@endsection()
