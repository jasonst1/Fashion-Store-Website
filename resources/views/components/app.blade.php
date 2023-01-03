<html>
    <head>
        <title>@yield('title')</title>
        @yield('css')
    </head>
    <body>
        <div class="container">
            @yield('header')
            @yield('content')
            @yield('footer')
            @yield('js')
        </div>
    </body>
</html>