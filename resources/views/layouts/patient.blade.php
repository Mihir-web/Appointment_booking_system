<!doctype html>
<html lang="en">

<head>
    <title>Doctor Appointment Management System || Home Page</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

    
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">

    <link href="{{asset('assets/css/bootstrap-icons.css')}}" rel="stylesheet">

    <link href="{{asset('assets/css/owl.carousel.min.css')}}" rel="stylesheet">

    <link href="{{asset('assets/css/owl.theme.default.min.css')}}" rel="stylesheet">

    <link href="{{asset('assets/css/templatemo-medic-care.css')}}" rel="stylesheet">

    <!-- Include SweetAlert2 CSS and JS via CDN -->
<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body id="top">
    @include('sweetalert::alert')

    <main>
        @include('layouts.partials.navbar-patient')

        @yield('content')
    </main>
    @include('layouts.partials.footer-patient')
    <!-- JAVASCRIPT FILES -->
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/js/scrollspy.min.js')}}"></script>
    <script src="{{asset('assets/js/custom.js')}}"></script>
</body>

</html>
