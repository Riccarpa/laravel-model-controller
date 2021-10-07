<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','MyBooks')</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    @yield('cdns')
</head>
<body>
    @include('includes.header')
    <main>
        @yield('content')
    </main>

    <script src="{{asset('js/app.js')}}"></script>
    @yield('script')
</body>
</html>