<!doctype html>
<html lang="zh">
<head>
    <link href="https://cdn.bootcss.com/semantic-ui/2.4.1/semantic.min.css" rel="stylesheet">
    <link href="{{ asset('icons/logoLeft.png') }}" rel="shortcut icon" />
    @yield('css')
    <title>
        @yield('title', 'Base')
    </title>
</head>
<body style="background-color:#F9FAFB">
    {{--头--}}
    <div id="header">
        @include('app.layouts._header')
    </div>
    {{--身--}}
    <div id="bodyer">
        @yield('bodyer')
    </div>
    {{--尾--}}
    <div id="footer">
        @include('app.layouts._footer')
    </div>
    <script
            src="https://code.jquery.com/jquery-3.1.1.min.js"
            integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
            crossorigin="anonymous"></script>
    <script src="https://cdn.bootcss.com/semantic-ui/2.4.1/semantic.min.js"></script>
    @yield('js')
</body>
</html>
