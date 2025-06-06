<!doctype html>
<html lang="zh-Tw">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{--  token  --}}
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>@yield('title','ShopMall') --Laravel電商項目</title>
    {{--  css样式  --}}
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
</head>
<body>
<div id="app">
    @include('layouts._header')
    <div class="container">
        @yield('content')
    </div>
    @include('layouts._footer')
</div>
{{--  js脚本  --}}
<script src="{{mix('js/app.js')}}"></script>
</body>
</html>
