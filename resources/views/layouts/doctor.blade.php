<!DOCTYPE html>
<html lang="en">

<head>

    <title>DAMS - {{ $title ?? '' }}</title>

    <link rel="stylesheet" href="{{asset('libs/bower/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('libs/bower/material-design-iconic-font/dist/css/material-design-iconic-font.css')}}">
    <!-- build:css assets/css/app.min.css -->
    <link rel="stylesheet" href="{{asset('libs/bower/animate.css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('libs/bower/fullcalendar/dist/fullcalendar.min.css')}}">
    <link rel="stylesheet" href="{{asset('libs/bower/perfect-scrollbar/css/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/core.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/app.css')}}">
    <!-- endbuild -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900,300">
    <script src="libs/bower/breakpoints.js/dist/breakpoints.min.js"></script>
    <script>
        Breakpoints();
    </script>
</head>

<body class="menubar-left menubar-unfold menubar-light theme-primary">
    <!--============= start main area -->


    @include('layouts.navigation')

    @include('layouts.sidebar')



    <!-- APP MAIN ==========-->
    <main id="app-main" class="app-main">
        <div class="wrap">
            <section class="app-content">
                @yield('content')
            </section><!-- #dash-content -->
        </div><!-- .wrap -->
        <!-- APP FOOTER -->
        @include('layouts.footer')
        <!-- /#app-footer -->
    </main>
    <!--========== END app main -->

    @include('layouts.partials.customizer')



    <!-- build:js assets/js/core.min.js -->
    <script src="{{asset('libs/bower/jquery/dist/jquery.js')}}"></script>
    <script src="{{asset('libs/bower/jquery-ui/jquery-ui.min.js')}}"></script>
    <script src="{{asset('libs/bower/jQuery-Storage-API/jquery.storageapi.min.js')}}"></script>
    <script src="{{asset('libs/bower/bootstrap-sass/assets/javascripts/bootstrap.js')}}"></script>
    <script src="{{asset('libs/bower/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
    <script src="{{asset('libs/bower/perfect-scrollbar/js/perfect-scrollbar.jquery.js')}}"></script>
    <script src="{{asset('libs/bower/PACE/pace.min.js')}}"></script>
    <!-- endbuild -->

    <!-- build:js assets/js/app.min.js -->
    <script src="{{asset('assets/js/library.js')}}"></script>
    <script src="{{asset('assets/js/plugins.js')}}"></script>
    <script src="{{asset('assets/js/app.js')}}"></script>
    <!-- endbuild -->
    <script src="{{asset('libs/bower/moment/moment.js')}}"></script>
    <script src="{{asset('libs/bower/fullcalendar/dist/fullcalendar.min.js')}}"></script>
    <script src="{{asset('assets/js/fullcalendar.js')}}"></script>
</body>

</html>
