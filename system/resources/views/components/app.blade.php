<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-menu-color="brand" data-topbar-color="light">

<head>
    <meta charset="utf-8" />
    <title>Admin | P3KM</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Myra Studio" name="author" />
    <link rel="shortcut icon" href="{{ url('public/admin') }}/politap.png">
    <link href="{{ url('public/admin') }}/assets/libs/morris.js/morris.css" rel="stylesheet" type="text/css" />
    <link href="{{ url('public/admin') }}/assets/css/style.min.css" rel="stylesheet" type="text/css">
    <link href="{{ url('public/admin') }}/assets/css/icons.min.css" rel="stylesheet" type="text/css">
    <script src="{{ url('public/admin') }}/assets/js/config.js"></script>

    
    <link href="{{ url('public/admin') }}/assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css"
        rel="stylesheet" type="text/css" />
    <link href="{{ url('public/admin') }}/assets/libs/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css"
        rel="stylesheet" type="text/css" />
    <link href="{{ url('public/admin') }}/assets/libs/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css"
        rel="stylesheet" type="text/css" />
    <link href="{{ url('public/admin') }}/assets/libs/datatables.net-select-bs5/css//select.bootstrap5.min.css"
        rel="stylesheet" type="text/css" />
        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">

</head>

<body>


    <div class="layout-wrapper">
        <x-layout.admin.sidebar />

        <div class="page-content">


            <x-layout.admin.header />

            <div class="content-header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <x-utils.notif />

                        </div>
                    </div>
                </div>
            </div>
            <div class="px-3">
                <div class="container-fluid mt-5">
                    {{ $slot }}
                </div>
            </div>

            <x-layout.admin.footer />

        </div>





    </div>



    <script src="{{ url('public/admin') }}/assets/js/vendor.min.js"></script>
    <script src="{{ url('public/admin') }}/assets/js/app.js"></script>
    <script src="{{ url('public/admin') }}/assets/libs/jquery-knob/jquery.knob.min.js"></script>
    <script src="{{ url('public/admin') }}/assets/libs/jquery-sparkline/jquery.sparkline.min.js"></script>
    <script src="{{ url('public/admin') }}/assets/libs/morris.js/morris.min.js"></script>
    <script src="{{ url('public/admin') }}/assets/libs/raphael/raphael.min.js"></script>
    <script src="{{ url('public/admin') }}/assets/js/pages/dashboard.js"></script>
    <script src="{{ url('public/admin') }}/assets/js/pages/materialdesign.js"></script>
    <script src="{{ url('public/admin') }}/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="{{ url('public/admin') }}/assets/libs/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
    <script src="{{ url('public/admin') }}/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{ url('public/admin') }}/assets/libs/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js">
    </script>
    <script src="{{ url('public/admin') }}/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="{{ url('public/admin') }}/assets/libs/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js"></script>
    <script src="{{ url('public/admin') }}/assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="{{ url('public/admin') }}/assets/libs/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="{{ url('public/admin') }}/assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="{{ url('public/admin') }}/assets/libs/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="{{ url('public/admin') }}/assets/libs/datatables.net-select/js/dataTables.select.min.js"></script>
    <script src="{{ url('public/admin') }}/assets/libs/pdfmake/build/pdfmake.min.js"></script>
    <script src="{{ url('public/admin') }}/assets/libs/pdfmake/build/vfs_fonts.js"></script>
    <script src="{{ url('public/admin') }}/assets/js/pages/datatables.js"></script>
    

    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <script>
        $(function() {
            $('.summernote').summernote({
                height: 100
            })
        })
    </script>
    
</body>

</html>
