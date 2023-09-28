<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="kS7jAiFNbvzLkTvD8iB5RYf2ZNjUZJiOkIhCQdjk">

    <title>@yield('title')</title>

    @include('admin.parts.style')
</head>
    <body class="" id="app">
    @include('sweetalert::alert')
    <div id="loading">
    <div id="loading-center">
    </div>
</div>

    @include('admin.parts.head')

<div class="wrapper"
     style="background: url({{asset('adm/images/background.png')}}); background-attachment: fixed; background-size: cover; ">

    @include('admin.parts.sidebar')

    @yield('content')

    @include('admin.parts.footer')

</div>

    @include('admin.parts.script')

    </body>
</html>
