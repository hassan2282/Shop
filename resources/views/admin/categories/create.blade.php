@extends('admin.layouts.main')
@section('title','Create Category')
@section('content')
    <div class="content-page">
        <div class="container-fluid col-md-9 p-4" dir="rtl">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">فرم ایجاد دسته بندی</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div id="form-element-2">
                        <div class="card">
                            <form action="{{route('category.store')}}" method="post" class="p-4">
                                @csrf
                                @include('validation.validation')
                                <div class="form-group">
                                    <label class="la-pull-right">دسته بندی های مادر</label>
                                    <select class="form-control form-control-lg" name="parent_id" required>
                                        <option value="0" selected>دسته بندی اصلی</option>
                                        @foreach($categories as $category)
                                            @if($category->parent_id == 0)
                                                <option value="{{$category->id}}">----------------> {{$category->name}}</option>
                                            @else
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endif

                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group mb-0">
                                    <label for="colFormLabelLg" class="la-pull-right">دسته بندی های فرعی</label>
                                    <input type="text" name="name" class="form-control form-control-lg" id="colFormLabelLg"
                                           placeholder="نام دسته بندی" required>
                                </div>
                                <button type="submit" class="btn btn-outline-primary mt-2 btn-block">ارسال</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
