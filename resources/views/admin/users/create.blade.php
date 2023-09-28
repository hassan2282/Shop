@extends('admin.layouts.main')
@section('title','Create New User')
@section('content')
    <div class="content-page" dir="rtl">
        <div class="container-fluid">
            <div class="row">
                <div class="row">
                    <div class="col-xl-3 col-lg-4">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">افزودن کاربر جدید</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="form-group">
                                        <div class="crm-profile-img-edit position-relative">
                                            <img class="crm-profile-pic rounded avatar-100" src="{{asset('adm/images/user/1.png')}}" alt="profile-pic">
                                            <div class="crm-p-image bg-primary">
                                                <i class="las la-pen upload-button"></i>
                                                <input class="file-upload" type="file" accept="image/*">
                                            </div>
                                        </div>
                                        <div class="img-extension mt-3">
                                            <div class="d-inline-block align-items-center" dir="rtl">
                                                <span>*توجه*</span>
                                                <br>
                                                <span>لطفا همه فیلد های داده شده را پر کنید </span>
                                                <br>
                                                <span>و لطفا از دادن اطلاعات حساب کاربری خود به دیگران جدا خودداری بفرمایید</span>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-8">
                        <div class="card text-center" dir="rtl">
                            <div class="card-header d-flex justify-content-center">
                                <div class="header-title">
                                    <h4 class="card-title">اطلاعات کاربر</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="new-user-info">
                                    <form action="{{route('user.store')}}" method="POST">
                                        @csrf
                                        @include('validation.validation')
                                        <div class="row">
                                            <div class="form-group col-md-6 my-3">
                                                <label for="fname">نام:</label>
                                                <input type="text" name="name" class="form-control" id="fname" placeholder="نام">
                                            </div>
                                            <div class="form-group col-md-6 my-3">
                                                <label for="email">ایمیل:</label>
                                                <input type="email" name="email" class="form-control" id="email" placeholder="ایمیل">
                                            </div>
                                            <div class="form-group col-md-6 my-3">
                                                <label for="pass">رمز عبور:</label>
                                                <input type="password" name="password" class="form-control" id="pass" placeholder="رمز عبور">
                                            </div>
                                            <div class="form-group col-md-6 my-3">
                                                <label for="rpass">تکرار رمز عبور:</label>
                                                <input type="password" name="password_confirm" class="form-control" id="rpass" placeholder="رمز عبور ">
                                            </div>
                                            <div class="form-group col-md-12 my-3">
                                                <button type="submit" class="btn btn-primary btn-block">افزودن کاربر جدید</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection()
