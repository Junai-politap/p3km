<div class="main-menu">
    <div class="logo-box">

        <a href="index.html" class="logo-light">
            <img src="{{url('public/admin')}}/logo.png" alt="logo" class="logo-lg" height="50">
            <img src="{{url('public/admin')}}/logo.png" alt="small logo" class="logo-sm" height="28">
        </a>


        <a href="index.html" class="logo-dark">
            <img src="{{url('public/admin')}}/logo.png" alt="dark logo" class="logo-lg" height="50">
            <img src="{{url('public/admin')}}/logo.png" alt="small logo" class="logo-sm" height="28">
        </a>
    </div>


    <div data-simplebar>
        <ul class="app-menu">

            <li class="menu-title"></li>

            <li class="menu-item">
                <a href="{{url('admin')}}" class="menu-link waves-effect waves-light">
                    <span class="menu-icon"><i class="bx bx-home-smile"></i></span>
                    <span class="menu-text"> Dashboards </span>
                    
                </a>
            </li>

            <li class="menu-item">
                <a href="#menuExpages" data-bs-toggle="collapse" class="menu-link waves-effect waves-light">
                    <span class="menu-icon"><i class="bx bx-file"></i></span>
                    <span class="menu-text"> Profil </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="menuExpages">
                    <ul class="sub-menu">
                        <li class="menu-item">
                            <a href="{{ url('admin/profil') }}" class="menu-link">
                                <span class="menu-text">Profil</span>
                            </a>
                        </li>
                        
                        <li class="menu-item">
                            <a href="{{url('admin/renstra')}}" class="menu-link">
                                <span class="menu-text">Renstra</span>
                            </a>
                        </li>

                        <li class="menu-item">
                            <a href="{{url('admin/rip')}}" class="menu-link">
                                <span class="menu-text">RIP</span>
                            </a>
                        </li>

                        <li class="menu-item">
                            <a href="{{url('admin/struktur-organisasi')}}" class="menu-link">
                                <span class="menu-text">Struktur Organisasi</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="menu-item">
                <a href="{{ url('admin/panduan') }}" class="menu-link waves-effect waves-light">
                    <span class="menu-icon"><i class="bx bx-file"></i></span>
                    <span class="menu-text"> Panduan </span>
                </a>
            </li>

            <li class="menu-item">
                <a href="{{ url('admin/penelitian') }}" class="menu-link waves-effect waves-light">
                    <span class="menu-icon"><i class="bx bx-file"></i></span>
                    <span class="menu-text"> Penelitian </span>
                </a>
            </li>

            <li class="menu-item">
                <a href="{{ url('admin/pengabdian') }}" class="menu-link waves-effect waves-light">
                    <span class="menu-icon"><i class="bx bx-file"></i></span>
                    <span class="menu-text"> Pengabdian </span>
                </a>
            </li>            

            <li class="menu-item">
                <a href="#menuLayanan" data-bs-toggle="collapse" class="menu-link waves-effect waves-light">
                    <span class="menu-icon"><i class="bx bx-file"></i></span>
                    <span class="menu-text"> Layanan HKI </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="menuLayanan">
                    <ul class="sub-menu">
                        <li class="menu-item">
                            <a href="{{ url('admin/prosedur-hki') }}" class="menu-link">
                                <span class="menu-text">Prosedur HKI</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ url('admin/hki') }}" class="menu-link">
                                <span class="menu-text">Data HKI</span>
                            </a>
                        </li>
                       
                    </ul>
                </div>
            </li>

            <li class="menu-item">
                <a href="#menuKegiatan" data-bs-toggle="collapse" class="menu-link waves-effect waves-light">
                    <span class="menu-icon"><i class="bx bx-file"></i></span>
                    <span class="menu-text"> Kegiatan </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="menuKegiatan">
                    <ul class="sub-menu">
                        <li class="menu-item">
                            <a href="{{ url('admin/seminar') }}" class="menu-link">
                                <span class="menu-text">Seminar</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ url('admin/galeri') }}" class="menu-link">
                                <span class="menu-text">Galeri</span>
                            </a>
                        </li>
                        
                    </ul>
                </div>
            </li>

            <li class="menu-item">
                <a href="{{ url('admin/publikasi') }}" class="menu-link waves-effect waves-light">
                    <span class="menu-icon"><i class="bx bx-file"></i></span>
                    <span class="menu-text"> Publikasi </span>
                </a>
            </li>

            <li class="menu-item">
                <a href="{{ url('admin/berita') }}" class="menu-link waves-effect waves-light">
                    <span class="menu-icon"><i class="bx bx-file"></i></span>
                    <span class="menu-text"> Berita </span>
                </a>
            </li>
            <li class="menu-item">
                <a href="{{ url('admin/slide') }}" class="menu-link waves-effect waves-light">
                    <span class="menu-icon"><i class="bx bx-file"></i></span>
                    <span class="menu-text"> Slide </span>
                </a>
            </li>
            <li class="menu-item">
                <a href="{{ url('admin/user') }}" class="menu-link waves-effect waves-light">
                    <span class="menu-icon"><i class="bx bx-user"></i></span>
                    <span class="menu-text"> User </span>
                </a>
            </li>
        </ul>
    </div>
</div>