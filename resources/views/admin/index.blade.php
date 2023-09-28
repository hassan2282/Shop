@extends('admin.layouts.main')
@section('title','Admin Panel | Index')
@section('content')
    <div class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="card card-block card-stretch card-height">
                            <div class="card-body">
                                <div class=" rounded m-auto  align-items-center">
                                    <p>بازدید کل</p>
                                    <h2>18,267.00</h2>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mt-3">
                                    <div class="text-success mr-2">75 %
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" height="18px" width="18px">
                                            <path fill-rule="evenodd" d="M3.293 9.707a1 1 0 010-1.414l6-6a1 1 0 011.414 0l6 6a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L4.707 9.707a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <p class=" mb-0">پانزده روز گذشته</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="card card-block card-stretch card-height">
                            <div class="card-body">
                                <div class=" rounded m-auto  align-items-center">
                                    <p>سفارشات</p>
                                    <h2>45,789.00</h2>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mt-3">
                                    <div class="text-primary mr-2">35 %
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" height="18px" width="18px">
                                            <path fill-rule="evenodd" d="M16.707 10.293a1 1 0 010 1.414l-6 6a1 1 0 01-1.414 0l-6-6a1 1 0 111.414-1.414L9 14.586V3a1 1 0 012 0v11.586l4.293-4.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <p class=" mb-0">ماه اخیر</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 ">
                        <div class="card card-block card-stretch ">
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class=" d-flex align-items-center">
                                            <div class="border bg-primary rounded iq-icon-box">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" height="26px" width="26px" class="mb-1">
                                                    <path fill-rule="evenodd" d="M12 7a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0V8.414l-4.293 4.293a1 1 0 01-1.414 0L8 10.414l-4.293 4.293a1 1 0 01-1.414-1.414l5-5a1 1 0 011.414 0L11 10.586 14.586 7H12z" clip-rule="evenodd"></path>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="d-flex mt-3 ">
                                            <h4> 18,267.00</h4>
                                            <div class="text-primary ml-2">35 %
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" height="18px" width="18px">
                                                    <path fill-rule="evenodd" d="M16.707 10.293a1 1 0 010 1.414l-6 6a1 1 0 01-1.414 0l-6-6a1 1 0 111.414-1.414L9 14.586V3a1 1 0 012 0v11.586l4.293-4.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                                </svg>
                                            </div>
                                        </div>
                                        <p class=" mt-0 mb-1">درآمد 30 روز گذشته</p>
                                    </div>
                                    <div class="col-lg-6 ml-auto pl-0 pr-0 col-md-6">
                                        <div class="bottom-img ">
                                            <img src="{{asset('adm/images/product/131.png')}}" class="" alt="image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <ul class="list-inline p-0 mb-0">
                        <li class="mb-4">
                            <div class="d-flex justify-content-between">

                                <div class="iq-icon-box1  rounded mr-3">
                                    <img src="{{asset('adm/images/product/1.png')}}" class="img-fluid rounded avatar-45 m-auto" alt="image">
                                </div>
                                <div class="w-100  p-md-0">
                                    <h6>بیت کوین</h6>
                                    <div class="d-flex align-items-center ">
                                        <div class="iq-progress-bar ">
                                            <span class="bg-primary iq-progress progress-1" data-percent="54" style="transition: width 2s ease 0s; width: 54%;"></span>
                                        </div>
                                        <span class="ml-3">54%</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="mb-4">
                            <div class="d-flex align-items-center justify-content-between ">

                                <div class="iq-icon-box1 rounded mr-3">
                                    <img src="{{asset('adm/images/product/3.png')}}" class="img-fluid rounded avatar-45 m-auto" alt="image">
                                </div>
                                <div class="w-100  p-md-0">
                                    <h6>صندوق پیام ها</h6>
                                    <div class="d-flex align-items-center ">
                                        <div class="iq-progress-bar ">
                                            <span class="bg-secondary iq-progress progress-1" data-percent="96" style="transition: width 2s ease 0s; width: 96%;"></span>
                                        </div>
                                        <span class="ml-3">96%</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
