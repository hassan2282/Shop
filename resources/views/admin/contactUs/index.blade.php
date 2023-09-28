@extends('admin.layouts.main')
@section('title','Create New Role')
@section('content')
    <div class="content-page" dir="rtl">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="row col-md-12">
                    <form action="" class="col-md-12">
                        <div class="input-group mb-4" style="display: flex" dir="ltr">
                            <div class="input-group-prepend">
                                <button class="btn btn-outline-primary" type="submit">جست و جو</button>
                            </div>
                            <input type="search" name="search" value="{{request('search')}}" class="form-control col-md-10" aria-label="">
                        </div>
                    </form>
                </div>
                <hr>
                <div dir="ltr">
                    {{$contactUs->links()}}
                </div>
                <div class="row col-md-12 justify-content-center">
                    @foreach($contactUs as $contact)
                        <div class="card text-center mx-2 p-2 col-5">
                            <div class="card-body">
                                <h4 class="card-title">{{$contact->title}}</h4>
                                <h6 class="card-title">{{$contact->email}}</h6>
                                <p class="card-text">{{$contact->body}}</p>
                                <p class="card-text"><small class="text-muted">{{$contact->created_at}}</small></p>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div dir="ltr">
                    {{$contactUs->links()}}
                </div>
            </div>
        </div>
    </div>
@endsection()
