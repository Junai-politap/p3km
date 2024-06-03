<section class="topbar-one">
    <div class="container">
        <div class="topbar-one__left">
            <a href="{{ url('/') }}">
                <i class="fa fa-map-marker-alt"></i>
                Jalan Rangge Sentap, Dalong, Sukaharja, Kec. Delta Pawan,
                <br>Kabupaten Ketapang, Kalimantan Barat 78112
            </a>
            <a href="{{ url('/') }}">
                <i class="far fa-clock"></i>
                Senin - Jumat 07.00 - 16.00
            </a>
            <a href="tel:+ (0534) 3037213">
                <i class="far fa-phone"></i>
                + (0534) 3037213
            </a>
        </div><!-- /.topbar-one__left -->

        <div class="topbar-one__right">
            
        </div><!-- /.topbar-one__right -->
    </div><!-- /.container -->
</section><!-- /.topbar-one -->

<nav class="main-nav-one stricky">
    <div class="container">
        <div class="inner-container">
            
            <a href="{{ url('/') }}" class="side-menu__toggler mt-2 mb-2" style="margin-left: 95%;"><i class="fa fa-bars"></i></a>
            <div class="main-nav__main-navigation">
                <ul class="main-nav__navigation-box">
                    <li class="">
                        <a href="{{ url('/') }}">Dashboard</a>

                    </li>
                    <li class="dropdown">
                        <a href="">Profil</a>
                        <ul>
                            <li><a href="{{ url('profil') }}">Profil P3KM</a></li>
                            <li><a href="{{ url('visi-misi') }}">Visi & Misi</a></li>
                            <li><a href="{{ url('struktur-organisasi') }}">Struktur Organisasi</a></li>
                            <li><a href="{{ url('renstra') }}">Renstra</a></li>
                            <li><a href="{{ url('rip') }}">RIP</a></li>
                        </ul>
                    </li>
                    
                    <li class="dropdown">
                        <a href="#">Panduan</a>
                        <ul>

                            <li class="dropdown">
                                <a href="{{url('panduan-internal')}}">Panduan Internal</a>
                                
                            </li>
                            <li class="dropdown">
                                <a href="{{url('panduan-pusat')}}">Panduan Pusat</a>
                                
                            </li>

                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#">Master Data</a>
                        <ul>

                            <li class="dropdown">
                                <a href="#">Penelitian</a>
                                <ul>
                                    <li><a href="{{ url('penelitian-internal') }}">Internal</a></li>
                                    <li><a href="{{ url('penelitian-drtpm-aptv') }}">DRTPM/APTV</a></li>

                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#">Pengabdian</a>
                                <ul>
                                    <li><a href="{{ url('pengabdian-internal') }}">PKM Internal</a></li>
                                    <li><a href="{{ url('pengabdian-drtpm-aptv') }}">PKM DRTPM/APTV</a></li>
                                </ul>
                            </li>

                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="{{ url('publikasi') }}">Publikasi</a>

                    </li>
                    <li class="dropdown">
                        <a href="#">Sentral HKI</a>
                        <ul>
                            <li><a href="{{ url('hki') }}">Data HKI</a></li>
                            <li><a href="{{ url('prosedur-hki') }}">Prosedur HKI</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#">Kegiatan</a>
                        <ul>
                            <li class="dropdown">
                                <a href="#">Seminar</a>
                                <ul>
                                    <li><a href="{{ url('seminar-nasional') }}">Nasional</a></li>
                                    <li><a href="{{ url('seminar-internasional') }}">Internasional</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ url('galeri') }}">Galeri</a></li>

                        </ul>
                    </li>

                    <li>
                        <a href="{{ url('berita') }}">Berita</a>
                    </li>

                    <li>
                        <a href="{{ url('tentang-kami') }}">Tentang Kami</a>
                    </li>
                    
                </ul><!-- /.main-nav__navigation-box -->
            </div><!-- /.main-nav__main-navigation -->
            
        </div><!-- /.inner-container -->
    </div><!-- /.container -->
</nav><!-- /.main-nav-one -->
