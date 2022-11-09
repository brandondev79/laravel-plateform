<!DOCTYPE html>
<html lang="en">
    <head>
        @include('employee.partials.head')
    </head>
    <body>
        <div class="container-fluid">
            <div class="container-scroller">
                <div class="container-fluid page-body-wrapper">
                    <!-- partial:partials/_sidebar.html -->
                    @include('employee.partials.sidebar')

                    <!-- partial -->
                    <div class="main-panel">
                        <div class="content-wrapper">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- plugins:js -->
        <script src="{{ URL::asset('vendors/js/vendor.bundle.base.js') }}"></script>
        <script src="{{ URL::asset('js/filter.js') }}"></script>
        <script src="{{ URL::asset('js/app.js') }}"></script>
        <!-- endinject -->
        @yield('scripts')
    </body>
</html>