@extends('admin.layouts.main')
@section('title','Create New Role')
@section('content')
    <div class="content-page" dir="rtl">
        <div class="container-fluid">
            <form action="" class="form p-2">
                <div class="form-group" style="display: flex">
                    <input type="search" name="search" value="{{request('search')}}" class="text search-input form-control col-md-10" placeholder="type here to search...">
                    <button type="submit" class="btn btn-danger col-md-2"><i class="las la-search"></i></button>
                </div>
            </form>
            @foreach($roles as $role)
                <div class="card shadow-sm shadow-showcase">
                    <div class="card-header">
                        {{$role->name}}
                        <div style="display: inline-flex" class="col-3 la-pull-right">
                            <a class="btn shadow-bottom shadow-showcase text-center ml-2" href="{{route('role.edit', $role)}}">Edit</a>
                            <form action="{{route('role.destroy', $role)}}" method="post">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn shadow-bottom shadow-showcase text-center text-danger ml-2">Delete</button>
                            </form>
                        </div>
                    </div>
                    <div class="card-body">
                        @foreach($role->permission as $permission)
                            <button type="button" class="btn shadow-bottom shadow-showcase text-center">{{$permission->name}}</button>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection()
