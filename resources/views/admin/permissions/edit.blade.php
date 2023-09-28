@extends('admin.layouts.main')
@section('title','Edit Permission')
@section('content')
    <div class="content-page" dir="rtl">
        <div class="container-fluid">
            <form class="form-horizontal" action="{{route('permission.update', $permission)}}" method="post">
                @include('validation.validation')
                @method('PATCH')
                @csrf
                <div class="form-group row">
                    <label class="control-label col-sm-3 align-self-center" for="permission">دسترسی:</label>
                    <div class="col-sm-9">
                        <input type="text" name="name" class="form-control" id="permission" value="{{$permission->name}}" placeholder="سطح دسترسی را وارد کنید">
                    </div>
                </div>
                <div class="form-group">
                    <div class="checkbox">
                        <label><input type="checkbox" name="checkbox"> Remember me</label>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-block btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection()
