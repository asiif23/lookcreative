<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Look Creative | {{ $title }} </title>

    <!-- Scripts -->
    @vite('resources/js/app.js')
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/admin/assets/img/favicon.ico') }}" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
    <link href="{{ asset('assets/admin/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/admin/assets/css/plugins.css') }}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="{{ asset('assets/admin/assets/css/support-chat.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/admin/plugins/maps/vector/jvector/jquery-jvectormap-2.0.3.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assets/admin/plugins/charts/chartist/chartist.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/admin/assets/css/default-dashboard/style.css') }}" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

    @yield('css')

</head>

<body class="default-sidebar">

    @include('layouts.admin.header')
    @include('layouts.admin.navbar')

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="cs-overlay"></div>

        @include('layouts.admin.sidebar')

        @yield('konten')

    </div>
    <!-- END MAIN CONTAINER -->


    @include('layouts.admin.component.bubblechat')
    @include('layouts.admin.footer')
    @include('layouts.admin.component.sidebarcontroller')

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ asset('assets/admin/assets/js/libs/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('assets/admin/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/admin/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/scrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('assets/admin/assets/js/app.js') }}"></script>
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="{{ asset('assets/admin/assets/js/custom.js') }}"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="{{ asset('assets/admin/plugins/charts/chartist/chartist.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/maps/vector/jvector/jquery-jvectormap-2.0.3.min.js') }}"></script>
    <script
        src="{{ asset('assets/admin/plugins/maps/vector/jvector/worldmap_script/jquery-jvectormap-world-mill-en.js') }}">
    </script>
    <script src="{{ asset('assets/admin/plugins/calendar/pignose/moment.latest.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/calendar/pignose/pignose.calendar.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/progressbar/progressbar.min.js') }}"></script>
    <script src="{{ asset('assets/admin/assets/js/default-dashboard/default-custom.js') }}"></script>
    <script src="{{ asset('assets/admin/assets/js/support-chat.js') }}"></script>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    @yield('script')
</body>

</html>
