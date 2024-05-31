<div class="navbar-custom">
    <div class="topbar">
        <div class="topbar-menu d-flex align-items-center gap-lg-2 gap-1">


            <div class="logo-box">

                <a href="index.html" class="logo-light">
                    <img src="{{url('public/admin')}}/logo.png" alt="logo" class="logo-lg"
                        height="50">
                    <img src="{{url('public/admin')}}/logo.png" alt="small logo" class="logo-sm"
                        height="50">
                </a>


                <a href="index.html" class="logo-dark">
                    <img src="{{url('public/admin')}}/logo.png" alt="dark logo" class="logo-lg"
                        height="50">
                    <img src="{{url('public/admin')}}/logo.png" alt="small logo" class="logo-sm"
                        height="50">
                </a>
            </div>


            <button class="button-toggle-menu">
                <i class="mdi mdi-menu"></i>
            </button>
        </div>

        <ul class="topbar-menu d-flex align-items-center gap-4">

            <li class="dropdown">
                <a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-light"
                    data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                    aria-expanded="false">
                    <img alt="user-image" class="rounded-circle" src='https://bootdey.com/img/Content/avatar/avatar7.png';">
                    <span class="ms-1 d-none d-md-inline-block">
                        {{ Auth::guard('admin')->user()->nama }}
                        <i class="mdi mdi-chevron-down"></i>
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-end profile-dropdown ">

                    <div class="dropdown-header noti-title">
                        <h6 class="text-overflow m-0">Welcome !</h6>
                    </div>



                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-settings"></i>
                        <span>Settings</span>
                    </a>

                    <div class="dropdown-divider"></div>


                    <a href="{{ url('logout') }}" onclick="return confirm('Yakin Akan Keluar Dari Sistem')" class="dropdown-item notify-item">
                        <i class="fe-log-out"></i>
                        <span>Logout</span>
                    </a>

                </div>
            </li>

        </ul>
    </div>
</div>