@extends('admin.layouts.main')
@section('title','Create Category')
@section('content')
    <div class="content-page">
        <div class="container-fluid">
            <div class="col-lg-12">
                <div class="card card-block card-stretch card-height">
                    <div class="card-header d-flex justify-content-between">

                                 <x-category :categories="$categories"/>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
