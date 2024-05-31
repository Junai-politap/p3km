<x-app>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">


                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <x-button.back-button url="{{ url('admin/berita') }}" />
                    </div>
                    <div class="card-header">
                        <h3 class="card-title">Detail Data</h3>
                    </div>
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid circle" src="{{ url("public/$berita->poto") }}"
                                style="width:100%">
                        </div>

                       
                    </div>
                    <div class="card-body">

                        <div class="from-group row">
                            <label class="col-md-2">
                                <strong> Nama Berita</strong>
                            </label>
                            <div class="col-md-10">
                               : {{ $berita->nama_berita }}
                            </div>
                        </div>
                        <hr>

                        <div class="from-group row">
                            <label class="col-md-2">
                                <strong> Tanggal Berita</strong>
                            </label>
                            <div class="col-md-10">
                               : {{ date('d-m-Y', strtotime($berita->tanggal_berita)) }}
                            </div>
                        </div>
                        <hr>

                        <div class="from-group row">
                            <label class="col-md-2">
                                <strong> Detail Berita</strong>
                            </label>
                            <div class="col-md-10">
                               : {!! nl2br ($berita->detail) !!}
                            </div>
                        </div>
                        <hr>
                    </div>

                </div>

            </div>
            <div class="col-md-1"></div>
        </div>

    </div>
</x-app>
