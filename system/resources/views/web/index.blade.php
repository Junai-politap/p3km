<x-web>
    <section class="slider-one__wrapper">
        <div class="slider-one__nav">
            <a href="#" class="slider-one__nav-left">
                <i class="far fa-angle-left"></i>
            </a>
            <a href="#" class="slider-one__nav-right">
                <i class="far fa-angle-right"></i>
            </a>
        </div>
        <div class="slider-one__carousel owl-carousel owl-theme thm__owl-carousel"
            data-options='{
            "items": 1, "loop": true, "autoplay": true, "autoplayHoverPause": true, "autoplayTimeout": 5000,
            "margin": 0, "dots": false, "nav": false, "animateOut": &quot;fadeOut&quot;, "animateIn": &quot;fadeIn&quot;, "active": true, "smartSpeed": 1000
        }'
            data-carousel-next-btn=".slider-one__nav-right" data-carousel-prev-btn=".slider-one__nav-left">

            @foreach ($list_slide as $slide)
                <div class="item" style="background-image: url({{ url("public/$slide->poto") }});">
                    <div class="slider-one__item">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-12 d-flex justify-content-center">
                                    <div class="card mb-5">
                                        <div class="card box" style="background-color: #000000">
                                            <strong>
                                                <h4 style="color: white; font-size: 200%">{{ $slide->judul }}</h4>
                                            </strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>


    <section class="funfact-one">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-duration="1500ms">
                    <div class="funfact-one__single">
                        <div class="funfact-one__counter">
                            <h3><span class="counter">{{ $penelitian_internal }}</span></h3>
                        </div>
                        <p>Penelitian Internal</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-duration="1500ms">
                    <div class="funfact-one__single">
                        <div class="funfact-one__counter">
                            <h3><span class="counter">{{ $penelitian_DRTPM_APTV }}</span></h3>
                        </div>
                        <p>Penelitian DRTPM/APTV</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-duration="1500ms">
                    <div class="funfact-one__single">
                        <div class="funfact-one__counter">
                            <h3><span class="counter">{{ $pengabdian_internal }}</span>
                        </div>
                        <p>PKM Internal</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-duration="1500ms">
                    <div class="funfact-one__single">
                        <div class="funfact-one__counter">
                            <h3><span class="counter">{{ $pengabdian_DRTPM_APTV }}</span></h3>
                        </div>
                        <p>PKM DRTPM/APTV</p>
                    </div>
                </div>
               
            </div>
        </div>
    </section>

    <section class="faq-three">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="faq-three__image wow fadeInLeft" data-wow-duration="1500ms">

                        <img src="{{ url('public/web') }}/politap.png" style="width: 110%">
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="faq-one__block">

                        <div class="block-title text-left">
                            <p class="has-line">Apa Itu P3KM</p>
                            <h6 class="mt-3">
                                @foreach ($list_profil->where('jenis', 'Profil') as $profil)
                                    {!! nl2br($profil->text) !!}
                                @endforeach
                            </h6>
                        </div>

                        <div class="accrodion-grp" data-grp-name="career-one__accrodion">
                            <div class="accrodion ">
                                <div class="accrodion-title">
                                    <h4>Visi P3KM</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>
                                            @foreach ($list_profil->where('jenis', 'Visi') as $profil)
                                                {!! nl2br($profil->text) !!}
                                            @endforeach
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>Misi P3KM</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>
                                            @foreach ($list_profil->where('jenis', 'Misi') as $profil)
                                                {!! nl2br($profil->text) !!}
                                            @endforeach
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>Tujuan P3KM</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>
                                            @foreach ($list_profil->where('jenis', 'Tujuan') as $profil)
                                                {!! nl2br($profil->text) !!}
                                            @endforeach
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="event-two">
        <div class="container">
            <div class="block-title text-center">

                <h3>KEGIATAN</h3>
            </div>
            <div class="row no-gutters">
                @foreach ($list_seminar as $seminar)
                    
                <div class="col-xl-6">
                    <div class="event-two__single">
                        <div class="event-two__image">
                            <img src="{{ url("public/$seminar->poto") }}" style="object-fit: cover; position: static; width: 100%; height: 300px;">
                            <a href="#"><i class="fal fa-plus"></i></a>
                        </div>
                        <div class="event-two__content d-flex">
                            <div class="my-auto">
                                <div class="event-two__date"><b>{{ date("d", strtotime($seminar->tanggal_seminar)) }}</b> <span>{{ date("M", strtotime($seminar->tanggal_seminar)) }}</span></div>

                                <h3><a href="#">{{ $seminar->nama_seminar }}</a></h3>
                                <p>
                                    <a href="{{$seminar->link_seminar}}" target="_blank">{{ $seminar->link_seminar }}</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>


    <section class="blog-one">
        <div class="container">
            <div class="block-title text-center">

                <h3>BERITA <br> TERBARU</h3>
            </div>
            <div class="row">
                @foreach ($list_berita as $berita)
                
                <div class="col-lg-4">
                    <div class="blog-one__single">
                        <div class="blog-one__image">
                            <img src="{{ url("public/$berita->poto") }}" style="object-fit: cover; position: static; width: 100%; height: 200px;">
                            <a href="{{ url("berita/$berita->id") }}"><i class="fal fa-plus"></i></a>
                        </div>
                        <div class="blog-one__content">
                            <a href="{{ url("berita/$berita->id") }}" class="blog-one__cat">{{ date("d-M-Y", strtotime($berita->tanggal_berita)) }}</a>
                            <h3><a href="{{ url("berita/$berita->id") }}">
                                {{ $berita->nama_berita }}
                            </a>
                            </h3>
                            
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>


</x-web>
