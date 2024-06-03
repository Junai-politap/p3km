<x-web>
    @include('title.title', [
        'title' => 'TENTANG KAMI',
    ])

    <section class="contact-info-one">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 wow fadeInUp" data-wow-duration="1500ms">
                    <div class="contact-info-one__single text-left">
                        <div class="contact-info-one__icon">
                            <i class="oberlin-icon-marker"></i>
                        </div>
                        <h3 style="margin-left: 3%">Informasi</h3>
                        <div class="form-group row" style="margin-left: 2%">
                            <label class="col-md-2"> Alamat</label>
                            <div class="col-md-10"> : Jalan Rangge Sentap, Dalong, Sukaharja, Kec. Delta Pawan,
                                Kabupaten Ketapang, Kalimantan Barat 78112
                            </div>
                        </div>

                        <div class="form-group row" style="margin-left: 2%">
                            <label class="col-md-2"> Email</label>
                            <div class="col-md-10"> : p3km.politap.ac.id
                            </div>
                        </div>

                        <div class="form-group row" style="margin-left: 2%">
                            <label class="col-md-2"> Phone</label>
                            <div class="col-md-10"> : + (0534) 3037213
                            </div>
                        </div>

                        <hr>
                        <h3 style="margin-left: 3%">Jam Kerja</h3>
                        <div class="form-group row" style="margin-left: 2%">
                            <label class="col-md-2"> Senin - Jumat</label>
                            <div class="col-md-10"> : 07.00 - 16.00
                            </div>
                        </div>

                        <div class="form-group row" style="margin-left: 2%">
                            <label class="col-md-2"> Sabtu - Minggu</label>
                            <div class="col-md-10"> : Libur
                            </div>
                        </div>

                      
                    </div>
                </div>

            </div>
        </div>
    </section>

    <img src="{{ url('public') }}/maps.png" style="width: 100%; height: 100%; border-radius: 1%">
</x-web>
