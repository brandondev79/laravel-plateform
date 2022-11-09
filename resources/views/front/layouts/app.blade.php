<!DOCTYPE html>
<html lang="fr">
    <head>
        @include('front.partials.head')
    </head>
    <body>
        @include('front.partials.header')
        @yield('content')
        @include('front.partials.footer')
        {{--@include('front.partials.cookie')--}}
        @yield('scripts')
    </body>
</html>
