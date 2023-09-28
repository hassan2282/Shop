@extends('admin.layouts.main')
@section('title','Edit User')
@section('content')
    <div class="content-page" dir="rtl">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card text-center">
                        <div class="card-header d-flex justify-content-between">
                            <div class="header-title">
                                <h4 class="card-title">لیست کاربران</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <div class="row justify-content-between">
                                    <div class="col-sm-6 col-md-6">
                                        <div id="user_list_datatable_info" class="dataTables_filter">
                                            <form action="" class="mr-3 position-relative">
                                                <div class="form-group mb-0">
                                                    <div style="display: flex">
                                                        <input type="search" name="search" value="{{request('search')}}" class="form-control" id="exampleInputSearch" placeholder="Search" aria-controls="user-list-table">
                                                        <button type="submit" class="btn btn-danger col-md-2"><i class="las la-search"></i></button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6">
                                        <div class="user-list-files d-flex">
                                            <a class="bg-primary" href="javascript:void();">
                                                پرینت
                                            </a>
                                            <a class="bg-primary" href="javascript:void();">
                                                اکسل
                                            </a>
                                            <a class="bg-primary" href="javascript:void();">
                                                Pdf
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <table id="user-list-table" class="table table-striped dataTable mt-4" role="grid" aria-describedby="user-list-page-info">
                                    <thead>
                                    <tr class="ligth">
                                        <th>نام</th>
                                        <th>ایمیل</th>
                                        <th>ثبت نام</th>
                                        <th style="min-width: 100px">عملیات</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($users as $user)
                                    <tr>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>{{$user->created_at}}</td>
                                            <td>
                                                <div class="d-flex align-items-center list-user-action">
                                                    <form action="{{route('user.destroy', $user)}}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn shadow-bottom p-3 text-danger shadow-showcase text-center">حذف</button>
                                                    </form>
                                                    <a href="{{route('user.edit', $user)}}" class="btn text-warning shadow-bottom p-3 shadow-showcase text-center">ویرایش</a>
                                                    @can('vendor')
                                                        @if($user->isVendor == 1)
                                                            <a href="{{route('roleUser.show', $user->id)}}" class="btn shadow-bottom p-3 shadow-showcase text-center">مقام</a>
                                                        @endif
                                                    @endcan
                                                </div>
                                            </td>
                                    </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="row justify-content-between mt-3">
                                <div id="user-list-page-info" class="col-md-6">
                                </div>
                                <div class="col-md-6">
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination justify-content-end mb-0">
                                            <li class="page-item disabled">
                                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                                            </li>
                                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">Next</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection()
