@include('front.scripts')
@include('front.styles')
@include('front.metriks')
@include('front.header')
@include('front.footer')

        <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="" type="image/gif">
    @yield('styles')
    @yield('meta')
</head>
<body>
    @yield('header')
    @yield('content')
    @yield('footer')
</body>

@yield('scripts')
@yield('metriks')

@include('front.popups.question')
@include('front.popups.thank')
<a href="#thanks" class="thank" style="display: none"></a>
</html>