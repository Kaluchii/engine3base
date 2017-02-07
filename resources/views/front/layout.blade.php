@include('front.scripts')
@include('front.styles')
@include('front.header')
@include('front.footer')

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/img/e-fav.gif" type="image/gif">
    @yield('styles')
    {!! $static->metrik_script_field !!}
    @yield('meta')
    <script defer src="/js/jquery.min.js"></script>
</head>
<body>
    {!! $static->metrik_noscript_field !!}
    @yield('header')
    @yield('content')
    @yield('footer')
</body>

@yield('scripts')
@yield('onePageScripts')

@include('front.popups.question')
@include('front.popups.thank')
<a href="#thanks" class="thank" style="display: none"></a>
</html>