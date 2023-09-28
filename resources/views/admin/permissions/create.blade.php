@extends('admin.layouts.main')
@section('title','Create New Permission')
@section('content')
    <div class="content-page">
        <div class="container-fluid">
            <form class="form-horizontal" action="{{route('permission.store')}}" method="post">
                @include('validation.validation')
                @csrf
                <div class="form-group row">
                        <div class="col-sm-9">
                        <label class="control-label col-sm-3 align-self-center" for="permission">دسترسی</label>
                            <input type="text" name="name" class="form-control bg-white" id="permission" placeholder="سطح دسترسی را وارد کنید">
                            <label class="control-label align-self-center" for="permission">بهتر است نام سطح دسترسی کوتاه باشد </label>
                            <button type="submit" class="btn btn-block form-control btn-primary">Submit</button>
                        </div>
                </div>
            </form>
        </div>
    </div>
@endsection()
