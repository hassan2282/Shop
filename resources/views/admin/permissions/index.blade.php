@extends('admin.layouts.main')
@section('title','Create New User')
@section('content')
    <div class="content-page" dir="rtl">
        <div class="container-fluid">
            <form action="" class="form p-2">
                <div class="form-group" style="display: flex">
                    <input type="search" name="search" value="{{request('search')}}" class="text search-input form-control col-md-10" placeholder="type here to search...">
                    <button type="submit" class="btn btn-danger col-md-2"><i class="las la-search"></i></button>
                </div>
            </form>
            @foreach($permissions as $permission)
                <div class="btn mb-1 border-white">
                    {{$permission->name}}
                    <div style="display: inline-flex" class="col-3">
                        <a class="badge ml-2 p-2 text-secondary" href="{{route('permission.edit', $permission)}}">Edit</a>
                        <form action="{{route('permission.destroy', $permission)}}" method="post">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="badge badge-warning border-warning ml-2 p-2">X</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection()
