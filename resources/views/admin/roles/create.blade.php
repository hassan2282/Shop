@extends('admin.layouts.main')
@section('title','Create New Role')
@section('content')
    <div class="content-page">
        <div class="container-fluid">
            <form class="form-horizontal" action="{{route('role.store')}}" method="post">
                @include('validation.validation')
                @csrf
                <div class="form-group row">
                        <div class="col-md-9">
                        <label class="control-label" for="permission">مقام:</label>
                            <input type="text" name="name" class="form-control bg-white" required id="permission" placeholder="مقام را وارد کنید">
                            <label class="control-label" for="select2">دسترسی ها:</label>
                            <select class="js-example-basic-multiple form-control col-md-12" name="permissions[]" id="select2" multiple="multiple" required>
                                @foreach($permissions as $permission)
                                    <option value="{{$permission->id}}">{{$permission->name}}</option>
                                @endforeach
                            </select>
                            <label class="control-label" for="select2">می توانید چنین سطح دسترسی انتخاب کنید</label>
                            <button type="submit" class="btn btn-primary form-control">ارسال</button>
                        </div>
                </div>
            </form>
        </div>
    </div>
@endsection()
