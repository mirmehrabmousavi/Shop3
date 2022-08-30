<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="utf-8"/>
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <link rel="icon" type="image/x-icon" href="/edu/assets/img/logo.png">
    <title>آرهام تل - آموزشگاه</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Custom CSS -->
    <link href="/edu/assets/css/styles.css" rel="stylesheet">
    <!-- Custom Color Option -->
    <link href="/edu/assets/css/colors.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" type="text/css">
    <link rel="stylesheet" href="/back/app-assets/fonts/font-awesome/css/font-awesome.css">
</head>

<body class="red-skin rtl">

<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div id="preloader">
    <div class="preloader"><span></span><span></span></div>
</div>


<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">

    @include('front::edu.layout.header')

    @yield('content')

    @include('front::edu.layout.footer')

    <a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>


</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->

<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="/edu/assets/js/jquery.min.js"></script>
<script src="/edu/assets/js/popper.min.js"></script>
<script src="/edu/assets/js/bootstrap.min.js"></script>
<script src="/edu/assets/js/select2.min.js"></script>
<script src="/edu/assets/js/slick.js"></script>
<script src="/edu/assets/js/jquery.counterup.min.js"></script>
<script src="/edu/assets/js/counterup.min.js"></script>
<script src="/edu/assets/js/custom.js"></script>
<!-- ========/edu====================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->
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

</html>
