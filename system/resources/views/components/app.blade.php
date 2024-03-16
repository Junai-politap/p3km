<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-menu-color="brand" data-topbar-color="light">

<head>
    <meta charset="utf-8" />
    <title>Admin | P3KM</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Myra Studio" name="author" />
    <link rel="shortcut icon" href="{{url('public/admin')}}/politap.png">
    <link href="{{url('public/admin')}}/assets/libs/morris.js/morris.css" rel="stylesheet" type="text/css" />
    <link href="{{url('public/admin')}}/assets/css/style.min.css" rel="stylesheet" type="text/css">
    <link href="{{url('public/admin')}}/assets/css/icons.min.css" rel="stylesheet" type="text/css">
    <script src="{{url('public/admin')}}/assets/js/config.js"></script>
</head>

<body>


    <div class="layout-wrapper">
        <x-layout.admin.sidebar />

        <div class="page-content">


           <x-layout.admin.header />


            <div class="px-3">
                {{$slot}}
            </div>

            <x-layout.admin.footer />

        </div>





    </div>



    <script src="{{url('public/admin')}}/assets/js/vendor.min.js"></script>
    <script src="{{url('public/admin')}}/assets/js/app.js"></script>
    <script src="{{url('public/admin')}}/assets/libs/jquery-knob/jquery.knob.min.js"></script>
    <script src="{{url('public/admin')}}/assets/libs/jquery-sparkline/jquery.sparkline.min.js"></script>
    <script src="{{url('public/admin')}}/assets/libs/morris.js/morris.min.js"></script>
    <script src="{{url('public/admin')}}/assets/libs/raphael/raphael.min.js"></script>
    <script src="{{url('public/admin')}}/assets/js/pages/dashboard.js"></script>
    <script src="{{url('public/admin')}}/assets/js/pages/materialdesign.js"></script>

</body>

</html>
