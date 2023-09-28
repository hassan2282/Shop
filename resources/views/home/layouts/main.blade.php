<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @include('home.parts.style')

    <title>
        @yield('title')
    </title>

</head>
<body class="bg-slate-50 font-YekanBakh-Regular text-sm">
    @include('sweetalert::alert')
    @include('home.parts.header')

    @yield('content')

    @include('home.parts.footer')

    @include('home.parts.script')
</body>
</html>
