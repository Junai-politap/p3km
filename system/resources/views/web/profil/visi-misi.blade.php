<x-web>
    <section class="page-header" style="background-image: url(assets/images/background/page-header-about-1.jpg);">
        <div class="container">
            <h2>Visi & Misi P3KM</h2>

        </div>
    </section>

    <section class="about-one">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="about-one__image">
                        <img src="{{ url('public/web') }}/politap.png"
                            style="object-fit: cover; position: static; width: 70%;">

                    </div>
                </div>
                <div class="col-xl-6 d-flex">
                    <div class="my-auto">
                        <div class="about-one__content">

                            <div class="nav navtabs about-one__tab-title">
                                <a href="#visi" class="nav-link active" data-toggle="tab">Visi</a>

                                <a href="#misi" class="nav-link" data-toggle="tab">Misi</a>
                                <a href="#tujuan" class="nav-link" data-toggle="tab">Tujuan</a>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane fade show active animated fadeInUp" id="visi">
                                    @foreach ($list_visi as $visi)
                                        <p>
                                            {!! nl2br($visi->text) !!}
                                        </p>
                                    @endforeach
                                </div>

                                <div class="tab-pane fade  animated fadeInUp" id="misi">
                                    <p>
                                        @foreach ($list_misi as $misi)
                                        <p>
                                            {!! nl2br($misi->text) !!}
                                        </p>
                                    @endforeach
                                    </p>
                                    
                                </div>
                                <div class="tab-pane fade animated fadeInUp" id="tujuan">
                                    <p>
                                        @foreach ($list_tujuan as $tujuan)
                                        <p>
                                            {!! nl2br($tujuan->text) !!}
                                        </p>
                                    @endforeach
                                    </p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-web>
