<x-web>

    @include('title.title', [
        'title' => 'STRUKTUR ORGANISASI P3KM',
    ])
    <section class="team-one">
        <div class="container">

            <div class="row high-gutter">
                @foreach ($list_pimpinan as $pimpinan)
                    <div class="col-lg-6 wow fadeInLeft" data-wow-duration="1500ms">
                        <div class="team-one__single">
                            <div class="team-one__image text-center">
                                <img src="{{ url("public/$pimpinan->foto") }}"
                                    style="object-fit: cover; position: static; width: 80%;">
                            </div>
                            <div class="team-one__content">
                                <div class="team-one__content-inner">
                                    <h3>{{ $pimpinan->nama_lengkap }}, {{ $pimpinan->gelar_belakang }}</h3>
                                    <p>{{ $pimpinan->jabatan }}</p>
                                    <div class="team-one__social">

                                        <button class="btn btn-info" data-toggle="modal"
                                            data-target="#modal-lg{{ $pimpinan->id }}">
                                            <i class="fa fa-check"></i>
                                        </button>
                                        
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="modal-lg{{ $pimpinan->id }}">
                        <div class="modal-dialog modal-lg" style="margin-top: 10%">
                            <div class="modal-content">
                                <div class="modal-header">
                                   
                                    <button type="button" class="close" data-dismiss="modal"
                                        aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                @csrf
                                <div class="modal-body">
                                    <div class="card-body">
                                        <div class="form-group row">
                                            <label for="inputEmail3"
                                                class="col-sm-4 col-form-label">
                                                NIP/NUP
                                            </label>
                                            <div class="col-sm-8">
                                                <label class="col-form-label">
                                                    : {{ $pimpinan->nip }} <br> {{ $pimpinan->nup }}</label>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">
                                                Bidang Keahlian
                                            </label>
                                            <div class="col-sm-8">
                                                <label class="col-form-label">
                                                    :
                                                    {{ $pimpinan->bidang_keahlian }}</label>
                                            </div>
                                        </div>
                                        <hr>

                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">
                                               Alamat
                                            </label>
                                            <div class="col-sm-8">
                                                <label class="col-form-label">
                                                    :
                                                    {{ $pimpinan->alamat }}</label>
                                            </div>
                                        </div>
                                        <hr>

                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">
                                                Nomor HP
                                            </label>
                                            <div class="col-sm-8">
                                                <label class="col-form-label">
                                                    : {{ $pimpinan->hp }}</label>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">
                                                Email
                                            </label>
                                            <div class="col-sm-8">
                                                <label class="col-form-label">
                                                    : {{ $pimpinan->email }}</label>
                                            </div>
                                        </div>
                                        <hr>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</x-web>
