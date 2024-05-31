<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-menu-color="brand" data-topbar-color="light">

<head>
    <meta charset="utf-8" />
    <title>Log In | P3KM</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Myra Studio" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ url('public/admin') }}/politap.png">

    <!-- App css -->
    <link href="{{ url('public/admin') }}/assets/css/style.min.css" rel="stylesheet" type="text/css">
    <link href="{{ url('public/admin') }}/assets/css/icons.min.css" rel="stylesheet" type="text/css">
    <script src="{{ url('public/admin') }}/assets/js/config.js"></script>
</head>

<body class="bg-primary d-flex justify-content-center align-items-center min-vh-100 p-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-4 col-md-5">
                <div class="card">
                    <div class="card-body p-4">

                        <div class="text-center w-75 mx-auto auth-logo mb-4">
                            <a href="#" class="logo-dark">
                                <span><img src="{{ url('public/admin') }}/politap.png" style="width: 50%"></span>
                            </a>

                            <a href="#" class="logo-light">
                                <span><img src="{{ url('public/admin') }}/politap.png" style="width: 50%"></span>
                            </a>
                        </div>

                        <form action="{{ url('login') }}" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <label class="form-label">Username</label>
                                <input class="form-control" type="text" name="username" required="" placeholder="Username">
                            </div>

                            <div class="form-group mb-3">
                                
                                <label class="form-label">Password</label>
                                <input class="form-control" type="password" name="password" required="" placeholder="Password">
                            </div>

                           

                            <div class="form-group mb-0 text-center">
                                <button class="btn btn-primary w-100"> Log In </button>
                            </div>

                        </form>
                    </div> <!-- end card-body -->
                </div>
                <!-- end card -->

               
                <!-- end row -->

            </div> <!-- end col -->
        </div>
        <!-- end row -->
    </div>

    <!-- App js -->
    <script src="{{ url('public/admin') }}/assets/js/vendor.min.js"></script>
    <script src="{{ url('public/admin') }}/assets/js/app.js"></script>

</body>

</html>