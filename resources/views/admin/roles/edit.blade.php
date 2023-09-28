@extends('admin.layouts.main')
@section('title','Edit Role')
@section('content')
    <div class="content-page">
        <div class="container-fluid">
            <form class="form-horizontal" action="{{route('role.update', $role)}}" method="post">
                @include('validation.validation')
                @method('PATCH')
                @csrf
                <div class="form-group row">
                    <div class="col-sm-9">
                        <label class="control-label col-sm-3 align-self-center" for="permission">مقام:</label>
                        <input type="text" name="name" class="form-control" id="permission" value="{{$role->name}}" placeholder="مقام را وارد کنید">
                        <label class="control-label col-sm-3 align-self-center" for="permission">دسترسی ها:</label>
                        <select class="js-example-basic-multiple form-control col-md-12 my-3" name="permissions[]" id="select2" multiple="multiple" required>
                            @foreach($permissions as $permission)
                                <option value="{{$permission->id}}"

                                    {{in_array($permission->id , $role->permission->pluck('id')->toArray()) ? 'selected' : ''}}>
                                    {{$permission->name}}
                                </option>
                            @endforeach
                        </select>
                        <label class="control-label align-self-center" for="select2">می توانید چندید دسترسی را انتخاب کنید</label>
                        <button type="submit" class="btn btn-block btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection()
