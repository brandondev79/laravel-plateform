<!DOCTYPE html>
<html lang="fr">
    <head>
        @include('auth.partials.head')
        <link rel="stylesheet" href="{{ URL::asset('vendors/toastr/toastr.min.css') }}">
    </head>
    <body>
        @yield('content')
        <script src="{{ URL::asset('vendors/jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ URL::asset('vendors/toastr/toastr.min.js') }}"></script>
        @yield('scripts')
        @include('partials.notification')
    </body>
</html>
