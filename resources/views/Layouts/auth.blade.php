<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('partials.head')
    </head>
    <body>
        @include('partials.nav')
        @yield('body')
        @include('partials.footer')
        @yield('before-script')
        @include('partials.script')
        @include('partials.toogle-password')
        @yield('after-script')      
    </body>
</html>