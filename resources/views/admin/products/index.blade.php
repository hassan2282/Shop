@extends('admin.layouts.main')
@section('title','All Products')
@section('content')
    <div class="content-page text-center" dir="rtl">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <div class="collapse" id="datatable-1">
                        <div class="card">
                            <kbd class="bg-dark">
                                <pre id="bootstrap-datatables" class="text-white">
                                    <code>
                                    </code>
                                </pre>
                            </kbd>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <div id="datatable_wrapper" class="dataTables_wrapper">
                            <table id="datatable" class="table data-table table-striped dataTable" role="grid" aria-describedby="datatable_info">
                                <thead>
                                <tr class="ligth" role="row">
                                    <th class="sorting_asc  border" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 144.906px;">نام محصول</th>
                                    <th class="sorting  border" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 205.656px;">قیمت</th>
                                    <th class="sorting  border" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 117.344px;">وزن</th>
                                    <th class="sorting  border" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 40.125px;">ولتاژ</th>
                                    <th class="sorting  border" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 112.531px;">مدل</th>
                                    <th class="sorting  border" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 104.438px;">پاور</th>
                                    <th class="sorting  border" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 104.438px;">رنگ</th>
                                    <th class="sorting  border" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 104.438px;">اقلام همراه</th>
                                    <th class="sorting  border" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending">توضیحات</th>
                                    <th class="sorting  border" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 104.438px;">تصاویر</th>
                                    <th class="sorting  border" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 104.438px;">دسته بندی</th>
                                    <th class="sorting  border" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 104.438px;">عملیات</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($products as $product)
                                    <tr role="row" class="odd">
                                        <td class="sorting_1 ">{{$product->name}}</td>
                                        <td >{{$product->prise}}</td>
                                        <td >{{$product->weight}}</td>
                                        <td >{{$product->voltage}}</td>
                                        <td >{{$product->model}}</td>
                                        <td >{{$product->power}}</td>
                                        <td >
                                            <a class="rounded p-2">{{$product->color}}</a>
                                        </td>
                                        <td>
                                            @foreach( $product->items as $item)
                                                {{$item}}
                                            @endforeach
                                        <td class="d-flex flex-wrap align-items-center" style="width:720px">
                                                {{$product->limiter($product->body, 20).'...'}}
                                        </td>
                                            <td>
                                                <div style="display: flex">
                                                        @foreach($product->images as $img)
                                                            <div class="iq-avatars d-flex flex-wrap align-items-center ">
                                                                <div class="iq-avatar">
                                                                    <img class="avatar-80 rounded" src="{{asset('/adm/products/images/'. $img)}}" alt="#" data-original-title="" title="">
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                </div>
                                            </td>
                                        <td>{{$product->category}}</td>
                                        <td>
                                            <div class="d-flex align-items-center list-user-action">
                                                <form action="{{route('product.destroy', $product)}}" method="post">
                                                    @method('DELETE')
                                                    @csrf
                                                   <button type="submit" class="btn shadow-bottom p-3 text-danger shadow-showcase text-center">حذف</button>
                                                </form>
                                                <a href="{{route('product.edit', $product)}}" class="btn text-warning shadow-bottom p-3 shadow-showcase text-center">ویرایش</a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="dataTables_paginate paging_simple_numbers" id="datatable_paginate">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection()
