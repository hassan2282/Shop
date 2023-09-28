@extends('admin.layouts.main')
@section('title','Create New Role')
@section('content')
    <div class="content-page">
        <div class="container-fluid">
            <form class="form-horizontal" action="{{route('roleUser.update', $user->id)}}" method="POST">
                @method('PUT')
                @csrf
                @include('validation.validation')
                <div class="form-group row">
                        <div class="col-md-9">
                            <label class="control-label" for="permission">نام کاربر :::</label>
                            {{$user->name}}
                            <br>
                            <label class="control-label" for="permission">ایمیل کاربر :::</label>
                            {{$user->email}}
                            <hr>
                            <label class="control-label" for="permission">مقام ها</label>
                            <br>
                                @foreach($roles as $role)
                                    <div class="custom-group form-control custom-checkbox custom-checkbox-color custom-control-inline">
                                        <input type="checkbox" name="roles[]" class="custom-control-input bg-primary"
                                               id="{{$role->name.'.'.$role->id}}" value="{{$role->id}}"
                                        {{in_array($role->id, $user->role->pluck('id')->toArray()) ? 'checked' : ''}}>
                                        <label class="custom-control-label" for="{{$role->name.'.'.$role->id}}">{{$role->name}} </label>
                                    </div>
                                @endforeach
                            <hr>
                            <label class="control-label" for="select2">دسترسی ها:</label>
                            <hr>
                            @foreach($permissions as $permission)
                                <div class="custom-group mx-4 my-2 btn-outline-white rounded custom-checkbox custom-checkbox-color custom-control-inline" style="display:inline-flex">
                                    <input type="checkbox" name="permissions[]" class="custom-control-input bg-white"
                                           id="{{$permission->name}}" value="{{$permission->id}}"
                                    {{in_array($permission->id,$user->permission->pluck('id')->toArray()) ? 'checked' : ''}}>
                                    <label class="custom-control-label" for="{{$permission->name}}">{{$permission->name}} </label>
                                </div>
                            @endforeach
                            <hr>
                            <button type="submit" class="btn btn-primary form-control">ارسال</button>
                        </div>
                </div>
            </form>
        </div>
    </div>
@endsection()
