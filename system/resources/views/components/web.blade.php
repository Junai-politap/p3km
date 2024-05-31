<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>P3KM || POLITAP</title>

    <!-- favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ url('public/web') }}/politap.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ url('public/web') }}/politap.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ url('public/web') }}/politap.png">
    <link rel="manifest" href="{{ url('public/web') }}/politap.png">

    <!-- plugins styles -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Baloo+2:400,500,600,700,800%7CLato:100,300,400,700,900%7COpen+Sans:300,400,600,700,800%7CRoboto:300,400,500,700,900%7CRubik:300,400,500,700,900&display=swap">
    <link rel="stylesheet" href="{{ url('public/web') }}/assets/css/animate.css">
    <link rel="stylesheet" href="{{ url('public/web') }}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ url('public/web') }}/assets/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="{{ url('public/web') }}/assets/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="{{ url('public/web') }}/assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="{{ url('public/web') }}/assets/css/hover-min.css">
    <link rel="stylesheet" href="{{ url('public/web') }}/assets/css/swiper.min.css">
    <link rel="stylesheet" href="{{ url('public/web') }}/assets/css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="{{ url('public/web') }}/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="{{ url('public/web') }}/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ url('public/web') }}/assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{ url('public/web') }}/assets/css/oberlin-icons.css">

    <!-- template styles -->
    <link rel="stylesheet" href="{{ url('public/web') }}/assets/css/style.css">
    <link rel="stylesheet" href="{{ url('public/web') }}/assets/css/responsive.css">

</head>

<body>

    <div class="preloader">
        <div class="lds-ripple">
            <div></div>
            <div></div>
        </div>
    </div><!-- /.preloader -->

    <div class="page-wrapper">
        <x-layout.web.header />

        {{ $slot }}

        <x-layout.web.footer />


    </div><!-- /.page-wrapper -->

    <a href="{{ url('/') }}" data-target="html" class="scroll-to-target scroll-to-top"><i
            class="fa fa-angle-up"></i></a>

    <div class="side-menu__block">

        <a href="{{ url('/') }}" class="side-menu__toggler side-menu__close-btn"><i class="fa fa-times"></i>
            <!-- /.fa fa-close --></a>

        <div class="side-menu__block-overlay custom-cursor__overlay">
            <div class="cursor"></div>
            <div class="cursor-follower"></div>
        </div><!-- /.side-menu__block-overlay -->
        <div class="side-menu__block-inner ">

            <a href="{{ url('/') }}" class="side-menu__logo"><img src="{{ url('public/web') }}/politap.png"
                    alt="" width="100"></a>
            <nav class="mobile-nav__container">
                <!-- content is loading via js -->
            </nav>
            <p class="side-menu__block__copy">(c) 2024 <a href="{{ url('/') }}">POLITAP</a> - P3KM</p>
            <div class="side-menu__social">

            </div>
        </div><!-- /.side-menu__block-inner -->
    </div><!-- /.side-menu__block -->

    <!-- template scripts -->
    <script src="{{ url('public/web') }}/assets/js/jquery.min.js"></script>
    <script src="{{ url('public/web') }}/assets/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url('public/web') }}/assets/js/bootstrap-datepicker.min.js"></script>
    <script src="{{ url('public/web') }}/assets/js/bootstrap-select.min.js"></script>
    <script src="{{ url('public/web') }}/assets/js/isotope.js"></script>
    <script src="{{ url('public/web') }}/assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="{{ url('public/web') }}/assets/js/jquery.circleType.js"></script>
    <script src="{{ url('public/web') }}/assets/js/waypoints.min.js"></script>
    <script src="{{ url('public/web') }}/assets/js/jquery.counterup.min.js"></script>
    <script src="{{ url('public/web') }}/assets/js/jquery.lettering.min.js"></script>
    <script src="{{ url('public/web') }}/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="{{ url('public/web') }}/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="{{ url('public/web') }}/assets/js/jquery.validate.min.js"></script>
    <script src="{{ url('public/web') }}/assets/js/owl.carousel.min.js"></script>
    <script src="{{ url('public/web') }}/assets/js/TweenMax.min.js"></script>
    <script src="{{ url('public/web') }}/assets/js/wow.min.js"></script>
    <script src="{{ url('public/web') }}/assets/js/swiper.min.js"></script>
    <script src="{{ url('public/web') }}/assets/js/theme.js"></script>
</body>

</html>
