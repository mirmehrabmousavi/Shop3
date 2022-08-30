<!DOCTYPE html>
<html class="loading" lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-textdirection="rtl">
<!-- BEGIN: Head-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>آرهام تل - آموزشگاه</title>
    <link rel="apple-touch-icon" href="/back/app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="/back/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="/back/app-assets/css-rtl/app.css">
    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="/back/app-assets/vendors/css/vendors-rtl.min.css">
    <link rel="stylesheet" type="text/css" href="/back/app-assets/vendors/css/apexcharts.css">
    <link rel="stylesheet" type="text/css" href="/back/app-assets/vendors/css/extensions/tether-theme-arrows.css">
    <link rel="stylesheet" type="text/css" href="/back/app-assets/vendors/css/extensions/tether.min.css">
    <link rel="stylesheet" type="text/css" href="/back/app-assets/vendors/css/extensions/shepherd-theme-default.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="/back/app-assets/css-rtl/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/back/app-assets/css-rtl/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="/back/app-assets/css-rtl/colors.css">
    <link rel="stylesheet" type="text/css" href="/back/app-assets/css-rtl/components.css">
    <link rel="stylesheet" type="text/css" href="/back/app-assets/css-rtl/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="/back/app-assets/css-rtl/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="/back/app-assets/css-rtl/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="/back/app-assets/css-rtl/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="/back/app-assets/css-rtl/pages/dashboard-analytics.css">
    <link rel="stylesheet" type="text/css" href="/back/app-assets/css-rtl/pages/card-analytics.css">
    <link rel="stylesheet" type="text/css" href="/back/app-assets/css-rtl/plugins/tour/tour.css">
    <!-- END: Page CSS -->

    <!-- BEGIN: Custom CSS -->
    <link rel="stylesheet" type="text/css" href="/back/app-assets/css-rtl/custom-rtl.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/style-rtl.css">
    <!-- END: Custom CSS -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" type="text/css">
    @yield('style')
    @yield('scriptHead')
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->
<body class="vertical-layout vertical-menu-modern 2-columns navbar-floating footer-static rtl " data-open="click"
      data-menu="vertical-menu-modern" data-col="2-columns">

<!-- BEGIN: Header-->
@include('back.partials.header')
<!-- END: Header-->

@include('back.partials.sidebar')

<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            @yield('content')
        </div>
    </div>
</div>
<!-- END: Content-->

<div class="sidenav-overlay"></div>
<div class="drag-target"></div>




@yield('script')



<!-- BEGIN: Vendor JS-->
<script src="/back/app-assets/vendors/js/vendors.min.js"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="/back/app-assets/vendors/js/charts/apexcharts.min.js"></script>
<script src="/back/app-assets/vendors/js/extensions/tether.min.js"></script>
<script src="/back/app-assets/vendors/js/extensions/shepherd.min.js"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="/back/app-assets/js/core/app-menu.js"></script>
<script src="/back/app-assets/js/core/app.js"></script>
<script src="/back/app-assets/js/scripts/components.js"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="/back/app-assets/js/scripts/pages/dashboard-analytics.js"></script>
<!-- END: Page JS-->
<script src="/back/app-assets/js/core/libraries/jquery.min.js"></script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script>
<script src="http://malsup.github.com/jquery.form.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script>
    @if(Session::has('message'))
    var type = "{{Session::get('alert-type','info')}}";
    switch (type) {
        case 'info':
            toastr.options.progressBar = true;
            toastr.options.positionClass = 'toast-bottom-right';
            toastr.info("{{Session::get('message')}}");
            break;
        case 'success':
            toastr.options.progressBar = true;
            toastr.options.positionClass = 'toast-bottom-right';
            toastr.success("{{Session::get('message')}}");
            break;
        case 'warning':
            toastr.options.progressBar = true;
            toastr.options.positionClass = 'toast-bottom-right';
            toastr.warning("{{Session::get('message')}}");
            break;
        case 'error':
            toastr.options.progressBar = true;
            toastr.options.positionClass = 'toast-bottom-right';
            toastr.error("{{Session::get('message')}}");
            break;
    }
    @endif
</script>
</body>
<!-- END: Body-->
</html>
