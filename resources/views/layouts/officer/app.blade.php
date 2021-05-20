<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from educhamp.themetrades.com/demo/admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Feb 2019 13:08:15 GMT -->

<head>

    <!-- META ============================================= -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- DESCRIPTION -->
    <meta name="description" content="Department of ICT, MBSTU" />

    <!-- OG -->
    <meta property="og:title" content="Department of ICT, MBSTU" />
    <meta property="og:description" content="Department of ICT, MBSTU" />
    <meta property="og:image" content="" />
    <meta name="format-detection" content="telephone=no">

    <!-- FAVICONS ICON ============================================= -->
    <link rel="icon" href="{{asset('admin_assets/images/favicon.ico')}}" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('admin_assets/images/favicon.png')}}" />

    <!-- PAGE TITLE HERE ============================================= -->
    <title>Officer : Department of ICT, MBSTU </title>

    <!-- MOBILE SPECIFIC ============================================= -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--[if lt IE 9]>
	<script src="assets/js/html5shiv.min.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->

    <!-- All PLUGINS CSS ============================================= -->
    <link rel="stylesheet" type="text/css" href="{{asset('admin_assets/css/assets.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin_assets/vendors/calendar/fullcalendar.css')}}">

    <!-- TYPOGRAPHY ============================================= -->
    <link rel="stylesheet" type="text/css" href="{{asset('admin_assets/css/typography.css')}}">

    <!-- SHORTCODES ============================================= -->
    <link rel="stylesheet" type="text/css" href="{{asset('admin_assets/css/shortcodes/shortcodes.css')}}">

    <!-- STYLESHEETS ============================================= -->
    <link rel="stylesheet" type="text/css" href="{{asset('admin_assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin_assets/css/dashboard.css')}}">
    <link class="skin" rel="stylesheet" type="text/css" href="{{asset('admin_assets/css/color/color-1.css')}}">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.12/datatables.min.css">

</head>

<body class="ttr-opened-sidebar ttr-pinned-sidebar">

    <!-- header start -->
    @include('layouts.officer.partials.header')
    <!-- header end -->
    <!-- Left sidebar menu start -->
    @include('layouts.officer.partials.sidebar')
    <!-- Left sidebar menu end -->

    <!--Main container start -->
    @yield('content')
    <div class="ttr-overlay"></div>

    <!-- External JavaScripts -->
    <script src="{{asset('admin_assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('admin_assets/vendors/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{asset('admin_assets/vendors/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admin_assets/vendors/bootstrap-select/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('admin_assets/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js')}}"></script>
    <script src="{{asset('admin_assets/vendors/magnific-popup/magnific-popup.js')}}"></script>
    <script src="{{asset('admin_assets/vendors/counter/waypoints-min.js')}}"></script>
    <script src="{{asset('admin_assets/vendors/counter/counterup.min.js')}}"></script>
    <script src="{{asset('admin_assets/vendors/imagesloaded/imagesloaded.js')}}"></script>
    <script src="{{asset('admin_assets/vendors/masonry/masonry.js')}}"></script>
    <script src="{{asset('admin_assets/vendors/masonry/filter.js')}}"></script>
    <script src="{{asset('admin_assets/vendors/owl-carousel/owl.carousel.js')}}"></script>
    <script src="{{asset('admin_assets/vendors/scroll/scrollbar.min.js')}}"></script>
    <script src="{{asset('admin_assets/js/functions.js')}}"></script>
    <script src="{{asset('admin_assets/vendors/chart/chart.min.js')}}"></script>
    <script src="{{asset('admin_assets/js/admin.js')}}"></script>
    <script src="{{asset('admin_assets/vendors/calendar/moment.min.js')}}"></script>
    <script src="{{asset('admin_assets/vendors/calendar/fullcalendar.js')}}"></script>
    <!-- <script src="{{asset('admin_assets/vendors/switcher/switcher.js')}}"></script> -->
    @yield('scripts')
    <script>
        $(document).ready(function() {

            var today = new Date();
            var dd = String(today.getDate()).padStart(2, '0');
            var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
            var yyyy = today.getFullYear();
            today = mm + '/' + dd + '/' + yyyy;
            today = yyyy + '-' + mm + '-' + dd;
            $('#calendar').fullCalendar({
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay,listWeek'
                },
                defaultDate: today,
                navLinks: true, // can click day/week names to navigate views

                weekNumbers: true,
                weekNumbersWithinDays: true,
                weekNumberCalculation: 'ISO',

                editable: true,
                eventLimit: true, // allow "more" link when too many events
            });

        });
    </script>
</body>

</html>